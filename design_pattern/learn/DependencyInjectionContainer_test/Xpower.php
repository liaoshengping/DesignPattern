<?php

namespace app\learn\DependencyInjectionContainer_test;

/**
 * X-超能量
 */
class XPower implements SuperModuleInterface
{
    public $parameters;

    public function __construct($parameters)
    {
        $this->parameters = $parameters;
    }

    public function activate(array $target=[])
    {
        // 这只是个例子。。具体自行脑补
        echo 'XPoser activate<br/>';
    }
}
