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
use Gpupo\CommonSdk\Response;

class ResponseTest extends TestCaseAbstract
{
    public function testImplementaPsr7()
    {
        $response = new Response(new Collection([]));
        $this->assertInstanceof("Psr\Http\Message\ResponseInterface", $response);

        return $response;
    }
}
