<?php

namespace Google\AdsApi\AdWords\v201601\o;

class LanguageSearchParameter extends \Google\AdsApi\AdWords\v201601\o\SearchParameter
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Language[] $languages
     */
    protected $languages = null;

    /**
     * @param string $SearchParameterType
     * @param \Google\AdsApi\AdWords\v201601\cm\Language[] $languages
     */
    public function __construct($SearchParameterType = null, array $languages = null)
    {
      parent::__construct($SearchParameterType);
      $this->languages = $languages;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Language[]
     */
    public function getLanguages()
    {
      return $this->languages;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Language[] $languages
     * @return \Google\AdsApi\AdWords\v201601\o\LanguageSearchParameter
     */
    public function setLanguages(array $languages)
    {
      $this->languages = $languages;
      return $this;
    }

}
