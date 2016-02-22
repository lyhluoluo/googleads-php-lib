<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class FeedAttribute
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
     * @var string $type
     */
    protected $type = null;

    /**
     * @var boolean $isPartOfKey
     */
    protected $isPartOfKey = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $type
     * @param boolean $isPartOfKey
     */
    public function __construct($id = null, $name = null, $type = null, $isPartOfKey = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->type = $type;
      $this->isPartOfKey = $isPartOfKey;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedAttribute
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
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedAttribute
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedAttribute
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPartOfKey()
    {
      return $this->isPartOfKey;
    }

    /**
     * @param boolean $isPartOfKey
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedAttribute
     */
    public function setIsPartOfKey($isPartOfKey)
    {
      $this->isPartOfKey = $isPartOfKey;
      return $this;
    }

}
