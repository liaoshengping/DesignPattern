<?php

namespace app\learn\DependencyInjectionContainer_test;

include "../../app.php";

$container = new Container();
// 向该 超级工厂 添加 超人 的生产脚本
// $container->bind('superman', function($container, $moduleName) {
//     $suman = new Superman($container->make($moduleName));
//     return $suman;
// });

// 向该 超级工厂 添加 超能力模组 的生产脚本
$container->bind('xpower', function($conf) {
    return new XPower($conf);
});

// // 同上
// $container->bind('ultrabomb', function($container) {
//     return new UltraBomb;
// });

// ******************  华丽丽的分割线  **********************
// 开始启动生产
$superman_1 = $container->make('xpower', [$cont='18500818850']);
// $superman_2 = $container->make('superman', 'ultrabomb');
// $superman_3 = $container->make('superman', 'xpower');

// $superman_1 -> activate();
echo '<pre>';
echo 'hahaha<br/>';
print_r( $container  );
echo 'superman IS:<br/>';
print_r( $superman_1  );
exit('</pre>');