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
namespace Emmetltd\AliyunCore\Api\Domain\Request\V20180129;

class SaveSingleTaskForCreatingDnsHostRequest extends \Emmetltd\AliyunCore\RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "SaveSingleTaskForCreatingDnsHost");
		$this->setMethod("POST");
	}

	private  $instanceId;

	private  $Ips;

	private  $dnsName;

	private  $userClientIp;

	private  $lang;

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getIps() {
		return $this->Ips;
	}

	public function setIps($Ips) {
		$this->Ips = $Ips;
		for ($i = 0; $i < count($Ips); $i ++) {	
			$this->queryParameters["Ip.".($i+1)] = $Ips[$i];
		}
	}

	public function getDnsName() {
		return $this->dnsName;
	}

	public function setDnsName($dnsName) {
		$this->dnsName = $dnsName;
		$this->queryParameters["DnsName"]=$dnsName;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}
	
}