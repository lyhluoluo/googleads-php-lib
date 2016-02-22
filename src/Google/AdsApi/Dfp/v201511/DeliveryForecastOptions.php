<?php

namespace Google\AdsApi\Dfp\v201511;

class DeliveryForecastOptions
{

    /**
     * @var long[] $ignoredLineItemIds
     */
    protected $ignoredLineItemIds = null;

    /**
     * @param long[] $ignoredLineItemIds
     */
    public function __construct(array $ignoredLineItemIds = null)
    {
      $this->ignoredLineItemIds = $ignoredLineItemIds;
    }

    /**
     * @return long[]
     */
    public function getIgnoredLineItemIds()
    {
      return $this->ignoredLineItemIds;
    }

    /**
     * @param long[] $ignoredLineItemIds
     * @return \Google\AdsApi\Dfp\v201511\DeliveryForecastOptions
     */
    public function setIgnoredLineItemIds(array $ignoredLineItemIds)
    {
      $this->ignoredLineItemIds = $ignoredLineItemIds;
      return $this;
    }

}
