<?php

namespace Google\AdsApi\AdWords\v201601\rm;

class BasicUserList extends \Google\AdsApi\AdWords\v201601\rm\UserList
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\rm\UserListConversionType[] $conversionTypes
     */
    protected $conversionTypes = null;

    /**
     * @param int $id
     * @param boolean $isReadOnly
     * @param string $name
     * @param string $description
     * @param string $status
     * @param string $integrationCode
     * @param string $accessReason
     * @param string $accountUserListStatus
     * @param int $membershipLifeSpan
     * @param int $size
     * @param string $sizeRange
     * @param int $sizeForSearch
     * @param string $sizeRangeForSearch
     * @param string $listType
     * @param boolean $isEligibleForSearch
     * @param string $UserListType
     * @param \Google\AdsApi\AdWords\v201601\rm\UserListConversionType[] $conversionTypes
     */
    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $isEligibleForSearch = null, $UserListType = null, array $conversionTypes = null)
    {
      parent::__construct($id, $isReadOnly, $name, $description, $status, $integrationCode, $accessReason, $accountUserListStatus, $membershipLifeSpan, $size, $sizeRange, $sizeForSearch, $sizeRangeForSearch, $listType, $isEligibleForSearch, $UserListType);
      $this->conversionTypes = $conversionTypes;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\rm\UserListConversionType[]
     */
    public function getConversionTypes()
    {
      return $this->conversionTypes;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\rm\UserListConversionType[] $conversionTypes
     * @return \Google\AdsApi\AdWords\v201601\rm\BasicUserList
     */
    public function setConversionTypes(array $conversionTypes)
    {
      $this->conversionTypes = $conversionTypes;
      return $this;
    }

}
