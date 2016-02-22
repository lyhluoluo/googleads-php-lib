<?php

namespace Google\AdsApi\AdWords\v201601\express;

class PolicyViolationKey
{

    /**
     * @var string $policyName
     */
    protected $policyName = null;

    /**
     * @var string $violatingText
     */
    protected $violatingText = null;

    /**
     * @param string $policyName
     * @param string $violatingText
     */
    public function __construct($policyName = null, $violatingText = null)
    {
      $this->policyName = $policyName;
      $this->violatingText = $violatingText;
    }

    /**
     * @return string
     */
    public function getPolicyName()
    {
      return $this->policyName;
    }

    /**
     * @param string $policyName
     * @return \Google\AdsApi\AdWords\v201601\express\PolicyViolationKey
     */
    public function setPolicyName($policyName)
    {
      $this->policyName = $policyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getViolatingText()
    {
      return $this->violatingText;
    }

    /**
     * @param string $violatingText
     * @return \Google\AdsApi\AdWords\v201601\express\PolicyViolationKey
     */
    public function setViolatingText($violatingText)
    {
      $this->violatingText = $violatingText;
      return $this;
    }

}
