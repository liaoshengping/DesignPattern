<?php

namespace app\learn\DependencyInjectionContainer_test;

/**
 * 终极炸弹 （就这么俗）
 */
class UltraBomb implements SuperModuleInterface
{
    public function activate(array $target=[])
    {
        // 这只是个例子。。具体自行脑补
        echo 'UltraBomb activate<br/>';
    }
}