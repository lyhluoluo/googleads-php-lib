<?php

namespace Google\AdsApi\AdWords\v201601\express;

class KeywordGroup extends \Google\AdsApi\AdWords\v201601\cm\Criterion
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $name
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $name = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201601\express\KeywordGroup
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
