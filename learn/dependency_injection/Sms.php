<?php

namespace app\learn\dependency_injection;

class Sms implements theInterface
{

	public function __construct()
	{
	
	}

	public function send()
	{
		// do something
        echo 'send SMS msg<Br/>';
	}
}