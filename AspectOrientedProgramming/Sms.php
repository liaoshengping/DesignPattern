<?php



class Sms{

    public function send($userinfo,$type)
	{
        echo '发送给用户名为'.$userinfo['username'].'发送'.PHP_EOL;
	}
	public function afterDo(){
        echo "afterDo".PHP_EOL;
    }
}