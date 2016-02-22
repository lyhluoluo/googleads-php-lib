<?php

namespace Google\AdsApi\AdWords\v201601\o;

class BooleanAttribute extends \Google\AdsApi\AdWords\v201601\o\Attribute
{

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param string $AttributeType
     * @param boolean $value
     */
    public function __construct($AttributeType = null, $value = null)
    {
      parent::__construct($AttributeType);
      $this->value = $value;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Google\AdsApi\AdWords\v201601\o\BooleanAttribute
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
