<?php

namespace Google\AdsApi\AdWords\v201601\mcm;

class MutateLinkResults
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomerLink[] $links
     */
    protected $links = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomerLink[] $links
     */
    public function __construct(array $links = null)
    {
      $this->links = $links;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomerLink[]
     */
    public function getLinks()
    {
      return $this->links;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\mcm\ManagedCustomerLink[] $links
     * @return \Google\AdsApi\AdWords\v201601\mcm\MutateLinkResults
     */
    public function setLinks(array $links)
    {
      $this->links = $links;
      return $this;
    }

}
