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

class DescribeImageFromLibRequest extends \Emmetltd\AliyunCore\RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Green", "2017-08-23", "DescribeImageFromLib", "green", "openAPI");
		$this->setMethod("POST");
	}

	private  $totalCount;

	private  $sourceIp;

	private  $imageLibId;

	private  $pageSize;

	private  $currentPage;

	public function getTotalCount() {
		return $this->totalCount;
	}

	public function setTotalCount($totalCount) {
		$this->totalCount = $totalCount;
		$this->queryParameters["TotalCount"]=$totalCount;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getImageLibId() {
		return $this->imageLibId;
	}

	public function setImageLibId($imageLibId) {
		$this->imageLibId = $imageLibId;
		$this->queryParameters["ImageLibId"]=$imageLibId;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getCurrentPage() {
		return $this->currentPage;
	}

	public function setCurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->queryParameters["CurrentPage"]=$currentPage;
	}
	
}