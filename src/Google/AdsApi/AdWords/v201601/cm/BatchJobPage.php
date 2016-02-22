<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class BatchJobPage extends \Google\AdsApi\AdWords\v201601\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\BatchJob[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201601\cm\BatchJob[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\BatchJob[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\BatchJob[] $entries
     * @return \Google\AdsApi\AdWords\v201601\cm\BatchJobPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
