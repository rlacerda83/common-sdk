<?php

/*
 * This file is part of gpupo/common-sdk
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://www.gpupo.com/>.
 */

namespace Gpupo\CommonSdk\Traits;

trait LoadTrait
{
    protected function loadArrayFromFile($filename, array $env = [])
    {
        if (true !== file_exists($filename)) {
            return ['not_found' => $filename];
        }

        foreach ($env as $k => $v) {
            $$k = $v;
        }

        $array = include $filename;

        if (!is_array($array)) {
            return [];
        }

        return array_merge($env, $array);
    }
}
