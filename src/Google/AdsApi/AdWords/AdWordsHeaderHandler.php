<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\AdsApi\AdWords;

use Google\AdsApi\Common\AdsHeaderHandler;
use Google\AdsApi\Common\AdsHeaderHandlerHelper;
use Google\AdsApi\Common\AdsServiceDescriptor;
use Google\AdsApi\Common\AdsSession;
use Google\AdsApi\Common\LibraryMetadataProvider;
use Google\AdsApi\Common\Util\AdsReflectionUtils;
use Google\AdsApi\Common\ValidationException;
use ReflectionClass;
use SoapHeader;

/**
 * Handles how HTTP and SOAP headers are set for AdWords API requests.
 */
class AdWordsHeaderHandler implements AdsHeaderHandler {

  /**
   * @var string the ads product API calls are being made against; used to
   *     format the application name used in the SOAP header
   */
  const PRODUCT_NAME_FOR_SOAP_HEADER = 'Aw';

  /**
   * @var string the namespace suffix of the group and class name of the default
   *     SOAP request header object used by the AdWords API
   */
  const DEFAULT_SOAP_HEADER_CLASS_NAME = 'cm\\SoapHeader';

  /**
   * @var string the namespace suffix of the group and class name of the express
   *     SOAP request header object used by the AdWords API
   */
  const EXPRESS_SOAP_HEADER_CLASS_NAME = 'express\\ExpressSoapHeader';

  /**
   * @var array a list of HTTP headers to scrub
   */
  private $httpHeadersToScrub = array('Authorization');

  /**
   * @var array a list of SOAP headers to scrub
   */
  private $soapHeadersToScrub = array('developerToken');

  private $libraryMetadataProvider;
  private $adsHeaderHandlerHelper;
  private $reflectionUtils;

  /**
   * Creates a new instance of this header handler.
   */
  public function __construct() {
    $this->libraryMetadataProvider = new LibraryMetadataProvider();
    $this->adsHeaderHandlerHelper = new AdsHeaderHandlerHelper();
    $this->reflectionUtils = new AdsReflectionUtils();
  }

  /**
   * @see AdsHeaderHandler::generateHttpHeaders()
   */
  public function generateHttpHeaders(AdsSession $session) {
    return array();
  }

  /**
   * @see AdsHeaderHandler::generateSoapHeaders()
   */
  public function generateSoapHeaders(AdsSession $session,
      AdsServiceDescriptor $serviceDescriptor) {
    $soapRequestHeader = $this->createSoapHeaderObject($serviceDescriptor);
    $soapRequestHeader->setDeveloperToken($session->getDeveloperToken());
    $soapRequestHeader->setUserAgent(
        $this->formatUserAgentForSoapHeader($session->getUserAgent()));
    $soapRequestHeader->setClientCustomerId($session->getClientCustomerId());
    $soapRequestHeader->setValidateOnly($session->isValidateOnly());
    $soapRequestHeader->setPartialFailure($session->isPartialFailure());

    if ($serviceDescriptor->isExpressHeaderRequired()) {
      $businessId = $session->getExpressBusinessId();
      $plusPageId = $session->getExpressPlusPageId();
      if ($businessId !== null && $plusPageId !== null
          || $businessId === null && $plusPageId === null) {
        throw new ValidationException(
            'expressBusinessId, expressPlusPageId',
            $businessId . ', ' . $plusPageId,
            'One of expressBusinessId or expressPlusPageId must be set, but '
                . 'not both.'
        );
      }
      $soapRequestHeader->setExpressBusinessId($businessId);
      $soapRequestHeader->setPageId($plusPageId);
    }

    return new SoapHeader(
        $serviceDescriptor->getSoapNamespace(),
        self::SOAP_HEADER_NAME,
        $soapRequestHeader
    );
  }

  /**
   * Creates a new instance of the SOAP header object used by the AdWords API.
   */
  private function createSoapHeaderObject(
      AdsServiceDescriptor $serviceDescriptor) {
    // The SOAP header object is in the same base namespace (without the group)
    // as the AdWords service we are generating headers for.
    $reflectionClass =
        new ReflectionClass($serviceDescriptor->getServiceClass());
    $namespaceParts =
        explode('\\', trim($reflectionClass->getNamespaceName(), '\\'));
    // Remove the group.
    array_pop($namespaceParts);
    $soapHeaderClassName = sprintf(
        '%s\\%s',
        implode('\\', $namespaceParts),
        $serviceDescriptor->isExpressHeaderRequired()
            ? self::EXPRESS_SOAP_HEADER_CLASS_NAME
            : self::DEFAULT_SOAP_HEADER_CLASS_NAME
    );

    return $this->reflectionUtils->createInstance($soapHeaderClassName);
  }

  private function formatUserAgentForSoapHeader($userAgent) {
    return $this->adsHeaderHandlerHelper->formatApplicationNameForSoapHeader(
        $userAgent,
        self::PRODUCT_NAME_FOR_SOAP_HEADER,
        $this->libraryMetadataProvider
    );
  }

  /**
   * @see AdsHeaderHandler::scrubHttpHeaders()
   */
  public function scrubHttpHeaders($httpHeaders) {
    return $this->adsHeaderHandlerHelper->scrubHttpHeaders(
        $httpHeaders, $this->httpHeadersToScrub);
  }

  /**
   * @see AdsHeaderHandler::scrubSoapHeaders()
   */
  public function scrubSoapHeaders($soapXml) {
    return $this->adsHeaderHandlerHelper->scrubSoapHeaders(
        $soapXml, $this->soapHeadersToScrub);
  }
}

