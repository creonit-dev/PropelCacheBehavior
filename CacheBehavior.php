<?php

namespace Creonit\PropelCacheBehavior;

use Propel\Generator\Model\Behavior;
use Propel\Generator\Model\ForeignKey;

class CacheBehavior extends Behavior
{
    public function objectMethods($builder)
    {
        return $this->renderTemplate('objectMethods');
    }
}