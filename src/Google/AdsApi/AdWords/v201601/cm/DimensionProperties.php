<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class DimensionProperties extends \Google\AdsApi\AdWords\v201601\cm\DataEntry
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\LevelOfDetail $levelOfDetail
     */
    protected $levelOfDetail = null;

    /**
     * @param string $DataEntryType
     * @param \Google\AdsApi\AdWords\v201601\cm\LevelOfDetail $levelOfDetail
     */
    public function __construct($DataEntryType = null, $levelOfDetail = null)
    {
      parent::__construct($DataEntryType);
      $this->levelOfDetail = $levelOfDetail;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\LevelOfDetail
     */
    public function getLevelOfDetail()
    {
      return $this->levelOfDetail;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\LevelOfDetail $levelOfDetail
     * @return \Google\AdsApi\AdWords\v201601\cm\DimensionProperties
     */
    public function setLevelOfDetail($levelOfDetail)
    {
      $this->levelOfDetail = $levelOfDetail;
      return $this;
    }

}
