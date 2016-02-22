<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CustomerFeedPage extends \Google\AdsApi\AdWords\v201601\cm\NullStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\CustomerFeed[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201601\cm\CustomerFeed[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\CustomerFeed[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\CustomerFeed[] $entries
     * @return \Google\AdsApi\AdWords\v201601\cm\CustomerFeedPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
