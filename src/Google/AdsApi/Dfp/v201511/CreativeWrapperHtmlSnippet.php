<?php

namespace Google\AdsApi\Dfp\v201511;

class CreativeWrapperHtmlSnippet
{

    /**
     * @var string $htmlSnippet
     */
    protected $htmlSnippet = null;

    /**
     * @param string $htmlSnippet
     */
    public function __construct($htmlSnippet = null)
    {
      $this->htmlSnippet = $htmlSnippet;
    }

    /**
     * @return string
     */
    public function getHtmlSnippet()
    {
      return $this->htmlSnippet;
    }

    /**
     * @param string $htmlSnippet
     * @return \Google\AdsApi\Dfp\v201511\CreativeWrapperHtmlSnippet
     */
    public function setHtmlSnippet($htmlSnippet)
    {
      $this->htmlSnippet = $htmlSnippet;
      return $this;
    }

}
