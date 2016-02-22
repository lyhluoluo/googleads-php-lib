<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class LocationGroups extends \Google\AdsApi\AdWords\v201601\cm\Criterion
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\MatchingFunction $matchingFunction
     */
    protected $matchingFunction = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param int $feedId
     * @param \Google\AdsApi\AdWords\v201601\cm\MatchingFunction $matchingFunction
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $feedId = null, $matchingFunction = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->feedId = $feedId;
      $this->matchingFunction = $matchingFunction;
    }

    /**
     * @return int
     */
    public function getFeedId()
    {
      return $this->feedId;
    }

    /**
     * @param int $feedId
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationGroups
     */
    public function setFeedId($feedId)
    {
      $this->feedId = $feedId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\MatchingFunction
     */
    public function getMatchingFunction()
    {
      return $this->matchingFunction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\MatchingFunction $matchingFunction
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationGroups
     */
    public function setMatchingFunction($matchingFunction)
    {
      $this->matchingFunction = $matchingFunction;
      return $this;
    }

}
