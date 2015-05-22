<?php

/*
 * This file is part of gpupo/common-sdk
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\Tests\CommonSdk\Http\Message;

use Gpupo\CommonSdk\Http\Message\Uri;
use Gpupo\Tests\CommonSdk\TestCaseAbstract;

class UriTest extends TestCaseAbstract
{
    public function testImplementaPsr7()
    {
        $uri = new Uri();
        $this->assertInstanceof("\Psr\Http\Message\UriInterface", $uri);

        return $uri;
    }
}
