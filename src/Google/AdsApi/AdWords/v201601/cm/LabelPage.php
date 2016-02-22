<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class LabelPage extends \Google\AdsApi\AdWords\v201601\cm\NoStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Label[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201601\cm\Label[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Label[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Label[] $entries
     * @return \Google\AdsApi\AdWords\v201601\cm\LabelPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
