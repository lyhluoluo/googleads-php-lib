<?php

namespace Google\AdsApi\Dfp\v201511;

class NonRuleBasedFirstPartyAudienceSegment extends \Google\AdsApi\Dfp\v201511\FirstPartyAudienceSegment
{

    /**
     * @var int $membershipExpirationDays
     */
    protected $membershipExpirationDays = null;

    /**
     * @param int $id
     * @param string $name
     * @param long[] $categoryIds
     * @param string $description
     * @param string $status
     * @param int $size
     * @param \Google\AdsApi\Dfp\v201511\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     * @param int $membershipExpirationDays
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $dataProvider = null, $type = null, $membershipExpirationDays = null)
    {
      parent::__construct($id, $name, $categoryIds, $description, $status, $size, $dataProvider, $type);
      $this->membershipExpirationDays = $membershipExpirationDays;
    }

    /**
     * @return int
     */
    public function getMembershipExpirationDays()
    {
      return $this->membershipExpirationDays;
    }

    /**
     * @param int $membershipExpirationDays
     * @return \Google\AdsApi\Dfp\v201511\NonRuleBasedFirstPartyAudienceSegment
     */
    public function setMembershipExpirationDays($membershipExpirationDays)
    {
      $this->membershipExpirationDays = $membershipExpirationDays;
      return $this;
    }

}
