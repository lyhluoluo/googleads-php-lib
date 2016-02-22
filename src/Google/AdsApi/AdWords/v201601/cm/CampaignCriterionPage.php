<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CampaignCriterionPage extends \Google\AdsApi\AdWords\v201601\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\CampaignCriterion[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignCriterion[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignCriterion[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignCriterion[] $entries
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignCriterionPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
