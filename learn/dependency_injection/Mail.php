<?php

namespace app\learn\dependency_injection;

class Mail implements theInterface
{

	public function __construct()
	{
	
	}

	public function send()
	{
		// do something
        echo 'send Mail msg<br/>';
	}
}