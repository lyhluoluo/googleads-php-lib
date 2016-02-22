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
namespace Google\AdsApi\Dfp;

use Google\AdsApi\Common\AdsHeaderHandler;
use Google\AdsApi\Common\AdsHeaderHandlerHelper;
use Google\AdsApi\Common\AdsServiceDescriptor;
use Google\AdsApi\Common\AdsSession;
use Google\AdsApi\Common\LibraryMetadataProvider;
use Google\AdsApi\Common\Util\AdsReflectionUtils;
use ReflectionClass;
use SoapHeader;

/**
 * Handles how HTTP and SOAP headers are set for DFP API requests.
 */
class DfpHeaderHandler implements AdsHeaderHandler {

  /**
   * @var string the ads product API calls are being made against; used to
   *     format the application name used in the SOAP header
   */
  const PRODUCT_NAME_FOR_SOAP_HEADER = 'Dfp';

  /**
   * @var string the class name of the SOAP request header object used by the
   *     DFP API
   */
  const SOAP_HEADER_CLASS_NAME = 'SoapRequestHeader';

  /**
   * @var array a list of HTTP headers to scrub
   */
  private $httpHeadersToScrub = array('Authorization');

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
    $soapRequestHeader->setNetworkCode($session->getNetworkCode());
    $soapRequestHeader->setApplicationName(
        $this->formatApplicationNameForSoapHeader(
            $session->getApplicationName()));

    return new SoapHeader(
        $serviceDescriptor->getSoapNamespace(),
        self::SOAP_HEADER_NAME,
        $soapRequestHeader
    );
  }

  /**
   * Creates a new instance of the SOAP header object used by the DFP API.
   */
  private function createSoapHeaderObject(
      AdsServiceDescriptor $serviceDescriptor) {
    // The SOAP header object is in the same namespace as the DFP service
    // we are generating headers for.
    $reflectionClass =
        new ReflectionClass($serviceDescriptor->getServiceClass());
    return $this->reflectionUtils->createInstance(sprintf(
        '%s\\%s',
        $reflectionClass->getNamespaceName(),
        self::SOAP_HEADER_CLASS_NAME
    ));
  }

  private function formatApplicationNameForSoapHeader($applicationName) {
    return $this->adsHeaderHandlerHelper->formatApplicationNameForSoapHeader(
        $applicationName,
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
        $soapXml, array());
  }
}

