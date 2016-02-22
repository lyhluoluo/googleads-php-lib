<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class ProductDimension
{

    /**
     * @var string $ProductDimensionType
     */
    protected $ProductDimensionType = null;

    /**
     * @param string $ProductDimensionType
     */
    public function __construct($ProductDimensionType = null)
    {
      $this->ProductDimensionType = $ProductDimensionType;
    }

    /**
     * @return string
     */
    public function getProductDimensionType()
    {
      return $this->ProductDimensionType;
    }

    /**
     * @param string $ProductDimensionType
     * @return \Google\AdsApi\AdWords\v201601\cm\ProductDimension
     */
    public function setProductDimensionType($ProductDimensionType)
    {
      $this->ProductDimensionType = $ProductDimensionType;
      return $this;
    }

}
