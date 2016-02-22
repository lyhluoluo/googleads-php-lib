<?php

namespace Google\AdsApi\AdWords\v201601\o;

class AdGroupEstimate extends \Google\AdsApi\AdWords\v201601\o\Estimate
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\o\KeywordEstimate[] $keywordEstimates
     */
    protected $keywordEstimates = null;

    /**
     * @param string $EstimateType
     * @param int $adGroupId
     * @param \Google\AdsApi\AdWords\v201601\o\KeywordEstimate[] $keywordEstimates
     */
    public function __construct($EstimateType = null, $adGroupId = null, array $keywordEstimates = null)
    {
      parent::__construct($EstimateType);
      $this->adGroupId = $adGroupId;
      $this->keywordEstimates = $keywordEstimates;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201601\o\AdGroupEstimate
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\o\KeywordEstimate[]
     */
    public function getKeywordEstimates()
    {
      return $this->keywordEstimates;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\o\KeywordEstimate[] $keywordEstimates
     * @return \Google\AdsApi\AdWords\v201601\o\AdGroupEstimate
     */
    public function setKeywordEstimates(array $keywordEstimates)
    {
      $this->keywordEstimates = $keywordEstimates;
      return $this;
    }

}
