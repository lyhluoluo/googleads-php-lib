<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CampaignExtensionSettingReturnValue extends \Google\AdsApi\AdWords\v201601\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\CampaignExtensionSetting[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignExtensionSetting[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignExtensionSetting[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignExtensionSetting[] $value
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignExtensionSettingReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
