<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class UserListConversionType
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $category
     */
    public function __construct($id = null, $name = null, $category = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->category = $category;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdWords\v201601\rm\UserListConversionType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201601\rm\UserListConversionType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \Google\AdsApi\AdWords\v201601\rm\UserListConversionType
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

}
