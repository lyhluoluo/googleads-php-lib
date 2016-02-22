<?php

namespace Google\AdsApi\AdWords\v201601\o;

class Estimate
{

    /**
     * @var string $EstimateType
     */
    protected $EstimateType = null;

    /**
     * @param string $EstimateType
     */
    public function __construct($EstimateType = null)
    {
      $this->EstimateType = $EstimateType;
    }

    /**
     * @return string
     */
    public function getEstimateType()
    {
      return $this->EstimateType;
    }

    /**
     * @param string $EstimateType
     * @return \Google\AdsApi\AdWords\v201601\o\Estimate
     */
    public function setEstimateType($EstimateType)
    {
      $this->EstimateType = $EstimateType;
      return $this;
    }

}
