<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_CloudBuild_BuildTrigger extends Google_Collection
{
  protected $collection_key = 'tags';
  protected $buildType = 'Google_Service_CloudBuild_Build';
  protected $buildDataType = '';
  public $createTime;
  public $description;
  public $disabled;
  public $filename;
  public $filter;
  protected $githubType = 'Google_Service_CloudBuild_GitHubEventsConfig';
  protected $githubDataType = '';
  public $id;
  public $ignoredFiles;
  public $includedFiles;
  public $name;
  protected $pubsubConfigType = 'Google_Service_CloudBuild_PubsubConfig';
  protected $pubsubConfigDataType = '';
  public $resourceName;
  public $substitutions;
  public $tags;
  protected $triggerTemplateType = 'Google_Service_CloudBuild_RepoSource';
  protected $triggerTemplateDataType = '';
  protected $webhookConfigType = 'Google_Service_CloudBuild_WebhookConfig';
  protected $webhookConfigDataType = '';

  /**
   * @param Google_Service_CloudBuild_Build
   */
  public function setBuild(Google_Service_CloudBuild_Build $build)
  {
    $this->build = $build;
  }
  /**
   * @return Google_Service_CloudBuild_Build
   */
  public function getBuild()
  {
    return $this->build;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  public function getDisabled()
  {
    return $this->disabled;
  }
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  public function getFilename()
  {
    return $this->filename;
  }
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * @param Google_Service_CloudBuild_GitHubEventsConfig
   */
  public function setGithub(Google_Service_CloudBuild_GitHubEventsConfig $github)
  {
    $this->github = $github;
  }
  /**
   * @return Google_Service_CloudBuild_GitHubEventsConfig
   */
  public function getGithub()
  {
    return $this->github;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIgnoredFiles($ignoredFiles)
  {
    $this->ignoredFiles = $ignoredFiles;
  }
  public function getIgnoredFiles()
  {
    return $this->ignoredFiles;
  }
  public function setIncludedFiles($includedFiles)
  {
    $this->includedFiles = $includedFiles;
  }
  public function getIncludedFiles()
  {
    return $this->includedFiles;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param Google_Service_CloudBuild_PubsubConfig
   */
  public function setPubsubConfig(Google_Service_CloudBuild_PubsubConfig $pubsubConfig)
  {
    $this->pubsubConfig = $pubsubConfig;
  }
  /**
   * @return Google_Service_CloudBuild_PubsubConfig
   */
  public function getPubsubConfig()
  {
    return $this->pubsubConfig;
  }
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  public function getResourceName()
  {
    return $this->resourceName;
  }
  public function setSubstitutions($substitutions)
  {
    $this->substitutions = $substitutions;
  }
  public function getSubstitutions()
  {
    return $this->substitutions;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  /**
   * @param Google_Service_CloudBuild_RepoSource
   */
  public function setTriggerTemplate(Google_Service_CloudBuild_RepoSource $triggerTemplate)
  {
    $this->triggerTemplate = $triggerTemplate;
  }
  /**
   * @return Google_Service_CloudBuild_RepoSource
   */
  public function getTriggerTemplate()
  {
    return $this->triggerTemplate;
  }
  /**
   * @param Google_Service_CloudBuild_WebhookConfig
   */
  public function setWebhookConfig(Google_Service_CloudBuild_WebhookConfig $webhookConfig)
  {
    $this->webhookConfig = $webhookConfig;
  }
  /**
   * @return Google_Service_CloudBuild_WebhookConfig
   */
  public function getWebhookConfig()
  {
    return $this->webhookConfig;
  }
}
