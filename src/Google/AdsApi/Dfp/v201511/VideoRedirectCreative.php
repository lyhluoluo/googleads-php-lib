<?php

namespace Google\AdsApi\Dfp\v201511;

class VideoRedirectCreative extends \Google\AdsApi\Dfp\v201511\BaseVideoCreative
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\VideoRedirectAsset[] $videoAssets
     */
    protected $videoAssets = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201511\Size $size
     * @param string $previewUrl
     * @param string $policyViolations
     * @param \Google\AdsApi\Dfp\v201511\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201511\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201511\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param int $duration
     * @param boolean $allowDurationOverride
     * @param \Google\AdsApi\Dfp\v201511\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param long[] $companionCreativeIds
     * @param string $customParameters
     * @param string $vastPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param \Google\AdsApi\Dfp\v201511\VideoRedirectAsset[] $videoAssets
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $duration = null, $allowDurationOverride = null, array $trackingUrls = null, array $companionCreativeIds = null, $customParameters = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null, array $videoAssets = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType, $duration, $allowDurationOverride, $trackingUrls, $companionCreativeIds, $customParameters, $vastPreviewUrl, $sslScanResult, $sslManualOverride);
      $this->videoAssets = $videoAssets;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\VideoRedirectAsset[]
     */
    public function getVideoAssets()
    {
      return $this->videoAssets;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\VideoRedirectAsset[] $videoAssets
     * @return \Google\AdsApi\Dfp\v201511\VideoRedirectCreative
     */
    public function setVideoAssets(array $videoAssets)
    {
      $this->videoAssets = $videoAssets;
      return $this;
    }

}
