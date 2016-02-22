<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CampaignFeedPage extends \Google\AdsApi\AdWords\v201601\cm\NullStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\CampaignFeed[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignFeed[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignFeed[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignFeed[] $entries
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignFeedPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
