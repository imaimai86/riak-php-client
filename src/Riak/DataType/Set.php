<?php

/*
Copyright 2014 Basho Technologies, Inc.

Licensed to the Apache Software Foundation (ASF) under one or more contributor license agreements.  See the NOTICE file
distributed with this work for additional information regarding copyright ownership.  The ASF licenses this file
to you under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance
with the License.  You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an
"AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the License for the
specific language governing permissions and limitations under the License.
*/

namespace Basho\Riak\DataType;

use Basho\Riak\DataType;

/**
 * Class Set
 *
 * Data structure for set crdt
 *
 * @author Christopher Mancini <cmancini at basho d0t com>
 */
class Set extends DataType
{
    /**
     * {@inheritdoc}
     */
    const TYPE = 'set';

    /**
     * @var string
     */
    private $context;

    /**
     * @param array $data
     * @param $context
     * @param array $headers
     */
    public function __construct(array $data, $context, array $headers)
    {
        $this->data = $data;
        $this->context = $context;
        $this->headers = $headers;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    public function getContext()
    {
        return $this->context;
    }
}