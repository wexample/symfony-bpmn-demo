<?php

namespace Wexample\SymfonyBpmnDemo\Traits;

use Wexample\SymfonyBpmnDemo\WexampleSymfonyBpmnDemoBundle;
use Wexample\SymfonyHelpers\Traits\BundleClassTrait;

trait SymfonyBpmnDemoBundleClassTrait
{
    use BundleClassTrait;

    public static function getBundleClassName(): string
    {
        return WexampleSymfonyBpmnDemoBundle::class;
    }
}
