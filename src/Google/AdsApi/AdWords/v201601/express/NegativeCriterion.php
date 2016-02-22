<?php

namespace Google\AdsApi\AdWords\v201601\express;

class NegativeCriterion extends \Google\AdsApi\AdWords\v201601\cm\Criterion
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Criterion $criterion
     */
    protected $criterion = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param \Google\AdsApi\AdWords\v201601\cm\Criterion $criterion
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $criterion = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->criterion = $criterion;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Criterion
     */
    public function getCriterion()
    {
      return $this->criterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Criterion $criterion
     * @return \Google\AdsApi\AdWords\v201601\express\NegativeCriterion
     */
    public function setCriterion($criterion)
    {
      $this->criterion = $criterion;
      return $this;
    }

}
