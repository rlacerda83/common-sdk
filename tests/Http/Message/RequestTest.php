<?php

/*
 * This file is part of gpupo/common-sdk
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\Tests\CommonSdk;

use Gpupo\Common\Entity\Collection;
use Gpupo\CommonSdk\Request;

class RequestTest extends TestCaseAbstract
{
    public function testImplementaPsr7()
    {
        $request = new Request(new Collection([]));
        $this->assertInstanceof("\Psr\Http\Message\RequestInterface", $request);

        return $request;
    }

    /**
     * @depends testImplementaPsr7
     */
    public function testPossuiObjetoUri(Request $request)
    {
        $this->assertInstanceof("\Psr\Http\Message\UriInterface", $request->getUri());
    }
}
