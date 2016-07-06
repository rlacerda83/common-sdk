<?php

/*
 * This file is part of gpupo/common-sdk
 * Created by Gilmar Pupo <g@g1mr.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <http://www.g1mr.com/>.
 */

namespace Gpupo\CommonSdk\Entity\Metadata;

use Gpupo\Common\Entity\CollectionAbstract;

/**
 * @method string getFirst()
 * @method string getPrevious()
 * @method string getNext()
 * @method string getLast()
 */
class Metadata extends CollectionAbstract
{
    public function getOffset()
    {
        return intval($this->get('offset'));
    }

    public function getLimit()
    {
        return intval($this->get('limit'));
    }

    public function getTotalRows()
    {
        return intval($this->get('totalRows'));
    }
}