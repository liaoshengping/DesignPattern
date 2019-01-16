<?php

class User{
	
    public function register($data, $type)
    {
        echo '之前已经发送了邮箱给'.$data['username'].PHP_EOL;

        return '结束';
    }
}