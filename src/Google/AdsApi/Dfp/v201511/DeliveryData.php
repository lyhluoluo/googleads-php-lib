<?php

namespace Google\AdsApi\Dfp\v201511;

class DeliveryData
{

    /**
     * @var long[] $units
     */
    protected $units = null;

    /**
     * @param long[] $units
     */
    public function __construct(array $units = null)
    {
      $this->units = $units;
    }

    /**
     * @return long[]
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param long[] $units
     * @return \Google\AdsApi\Dfp\v201511\DeliveryData
     */
    public function setUnits(array $units)
    {
      $this->units = $units;
      return $this;
    }

}
