<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\AdsApi\AdWords;

use Google\AdsApi\Common\AdsBuilder;
use Google\AdsApi\Common\Configuration;
use Google\AdsApi\Common\ConfigurationLoader;

/**
 * Builder for AdWords report settings.
 * @see ReportSettings
 * @see https://developers.google.com/adwords/api/docs/guides/reporting#http-request
 */
class ReportSettingsBuilder implements AdsBuilder {

  private $configurationLoader;

  private $isSkipReportHeader;
  private $isSkipColumnHeader;
  private $isSkipReportSummary;
  private $isIncludeZeroImpressions;

  public function __construct() {
    $this->configurationLoader = new ConfigurationLoader();
  }

  /**
   * @see AdsBuilder::fromFile()
   */
  public function fromFile($path = null) {
    if ($path === null) {
      $path = self::DEFAULT_CONFIGURATION_FILENAME;
    }
    return $this->from($this->configurationLoader->fromFile($path));
  }

  /**
   * @see AdsBuilder::from()
   */
  public function from(Configuration $configuration) {
    $this->isSkipReportHeader = boolval($configuration->getConfiguration(
        'isSkipReportHeader', 'REPORTING'));
    $this->isSkipColumnHeader = boolval($configuration->getConfiguration(
        'isSkipColumnHeader', 'REPORTING'));
    $this->isSkipReportSummary = boolval($configuration->getConfiguration(
        'isSkipReportSummary', 'REPORTING'));
    return $this;
  }

  /**
   * Whether report responses should skip the header row containing the report
   * name and date range. This is optional and defaults to false.
   *
   * @param boolean $isSkipReportHeader
   * @return ReportSettingsBuilder this builder
   */
  public function skipReportHeader($isSkipReportHeader) {
    $this->isSkipReportHeader = $isSkipReportHeader;
    return $this;
  }

  /**
   * Whether report responses should skip the header row containing the column
   * names. This is optional and defaults to false.
   *
   * @param boolean $isSkipColumnHeader
   * @return ReportSettingsBuilder this builder
   */
  public function skipColumnHeader($isSkipColumnHeader) {
    $this->isSkipColumnHeader = $isSkipColumnHeader;
    return $this;
  }

  /**
   * Whether report responses should skip the summary row containing totals.
   * This is optional and defaults to false.
   *
   * @param boolean $isSkipReportSummary
   * @return ReportSettingsBuilder this builder
   */
  public function skipReportSummary($isSkipReportSummary) {
    $this->isSkipReportSummary = $isSkipReportSummary;
    return $this;
  }

  /**
   * Whether report responses should include zero impression rows. This is
   * optional and defaults to `null`.
   *
   * @param boolean|null $isIncludeZeroImpressions
   * @return ReportSettingsBuilder this builder
   */
  public function includeZeroImpressions($isIncludeZeroImpressions) {
    $this->isIncludeZeroImpressions = $isIncludeZeroImpressions;
    return $this;
  }

  /**
   * @see AdsBuilder::build()
   */
  public function build() {
    $this->defaultOptionals();
    $this->validate();
    return new ReportSettings($this);
  }

  /**
   * @see AdsBuilder::defaultOptionals()
   */
  public function defaultOptionals() {
    if ($this->isSkipReportHeader === null) {
      $this->isSkipReportHeader = false;
    }

    if ($this->isSkipColumnHeader === null) {
      $this->isSkipColumnHeader = false;
    }

    if ($this->isSkipReportSummary === null) {
      $this->isSkipReportSummary = false;
    }
  }

  /**
   * @see AdsBuilder::validate()
   */
  public function validate() {
    // No validation required for report settings.
  }

  /**
   * Whether report responses should skip the header row containing the report
   * name and date range.
   *
   * @return boolean
   */
  public function isSkipReportHeader() {
    return $this->isSkipReportHeader;
  }

  /**
   * Whether report responses should skip the header row containing the column
   * names.
   *
   * @return boolean
   */
  public function isSkipColumnHeader() {
    return $this->isSkipColumnHeader;
  }

  /**
   * Whether report responses should skip the summary row containing totals.
   *
   * @return boolean
   */
  public function isSkipReportSummary() {
    return $this->isSkipReportSummary;
  }

  /**
   * Whether report responses should include zero impression rows.
   *
   * @return boolean|null
   */
  public function isIncludeZeroImpressions() {
    return $this->isIncludeZeroImpressions;
  }
}

