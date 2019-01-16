<?php

class Mail{
	
	public function send($userinfo)
	{
	   echo '发送给用户名为'.$userinfo['username'].'发送邮件'.PHP_EOL;
	}
}