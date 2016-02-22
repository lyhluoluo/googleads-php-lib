<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class GeoTargetOperand extends \Google\AdsApi\AdWords\v201601\cm\FunctionArgumentOperand
{

    /**
     * @var long[] $locations
     */
    protected $locations = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param long[] $locations
     */
    public function __construct($FunctionArgumentOperandType = null, array $locations = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->locations = $locations;
    }

    /**
     * @return long[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param long[] $locations
     * @return \Google\AdsApi\AdWords\v201601\cm\GeoTargetOperand
     */
    public function setLocations(array $locations)
    {
      $this->locations = $locations;
      return $this;
    }

}
