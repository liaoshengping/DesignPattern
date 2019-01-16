<?php

namespace app\learn\DependencyInjectionContainer_test;

class Superman
{
    protected $module;

    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }
}