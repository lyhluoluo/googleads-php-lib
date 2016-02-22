<?php

namespace Google\AdsApi\AdWords\v201601\mcm;

class ManagedCustomerReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomer[] $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomer[] $value
     */
    public function __construct(array $value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomer[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomer[] $value
     * @return \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomerReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
