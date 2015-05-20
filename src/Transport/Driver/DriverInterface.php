<?php

/*
 * This file is part of gpupo/common-sdk
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\CommonSdk\Transport\Driver;

interface DriverInterface
{
    public function exec();
    public function getMethod();
    public function setUrl($url);
    public function setHeader(array $list);
    public function setOption($option, $value);
}
