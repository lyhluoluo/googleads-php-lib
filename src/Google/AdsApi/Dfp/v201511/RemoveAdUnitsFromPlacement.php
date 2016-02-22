<?php

namespace Google\AdsApi\Dfp\v201511;

class RemoveAdUnitsFromPlacement extends \Google\AdsApi\Dfp\v201511\AdUnitAction
{

    /**
     * @var int $placementId
     */
    protected $placementId = null;

    /**
     * @param int $placementId
     */
    public function __construct($placementId = null)
    {
      $this->placementId = $placementId;
    }

    /**
     * @return int
     */
    public function getPlacementId()
    {
      return $this->placementId;
    }

    /**
     * @param int $placementId
     * @return \Google\AdsApi\Dfp\v201511\RemoveAdUnitsFromPlacement
     */
    public function setPlacementId($placementId)
    {
      $this->placementId = $placementId;
      return $this;
    }

}
