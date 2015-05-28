<?php

/*
 * This file is part of gpupo/common-sdk
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\CommonSdk\Http\Message;

use Psr\Http\Message\RequestInterface;

/**
 * @method setMethod(string $string)
 * @method setBody(string $string)
 * @method setUrl(string $string)
 * @method setHeader(array $string)
 * @method getBody()
 * @method getHeader()
 */
class Request extends AbstractMessage implements RequestInterface
{
    public function setTransport(Transport $transport)
    {
        $this->set('transport', $transport);

        return $this;
    }

    public function getTransport()
    {
        $transport = $this->get('transport');

        if (!$transport instanceof Transport) {
            throw new Exception\RequestException('Transport missed');
        }

        return $transport;
    }

    public function exec()
    {
        $transport = $this->getTransport()
            ->setUrl($this->get('url'))
            ->setMethod($this->get('method', 'GET'))
            ->setHeader($this->getHeader())
            ->setBody($this->getBody());

        return $transport->exec();
    }
}
