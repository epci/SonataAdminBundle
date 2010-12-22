<?php
/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bundle\BaseApplicationBundle\Form;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class Generator
{

    protected $types = array();


    public function setTypes($types)
    {
        $this->types = $types;
    }

    public function getTypes()
    {
        return $this->types;
    }

    public function addType($type, $definition)
    {
        $this->types[$type] = $definition;
    }
}
