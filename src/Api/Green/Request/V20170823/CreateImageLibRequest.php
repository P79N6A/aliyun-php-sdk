<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Emmetltd\AliyunCore\Api\Green\Request\V20170823;

class CreateImageLibRequest extends \Emmetltd\AliyunCore\RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Green", "2017-08-23", "CreateImageLib", "green", "openAPI");
		$this->setMethod("POST");
	}

	private  $sourceIp;

	private  $name;

	private  $bizTypes;

	private  $serviceModule;

	private  $category;

	private  $scene;

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getBizTypes() {
		return $this->bizTypes;
	}

	public function setBizTypes($bizTypes) {
		$this->bizTypes = $bizTypes;
		$this->queryParameters["BizTypes"]=$bizTypes;
	}

	public function getServiceModule() {
		return $this->serviceModule;
	}

	public function setServiceModule($serviceModule) {
		$this->serviceModule = $serviceModule;
		$this->queryParameters["ServiceModule"]=$serviceModule;
	}

	public function getCategory() {
		return $this->category;
	}

	public function setCategory($category) {
		$this->category = $category;
		$this->queryParameters["Category"]=$category;
	}

	public function getScene() {
		return $this->scene;
	}

	public function setScene($scene) {
		$this->scene = $scene;
		$this->queryParameters["Scene"]=$scene;
	}
	
}