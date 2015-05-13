<?php

/*
 * This file is part of gpupo/common-sdk
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\CommonSdk\Entity;

/**
 * @codeCoverageIgnore
 */
final class Manager extends ManagerAbstract implements ManagerInterface
{
    public function update(EntityInterface $entity, EntityInterface $existent)
    {
        return $this->attributesDiff($existent, $entity);
    }
}
