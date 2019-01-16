<?php

class theFactory
{
    public $concrete = null;
	public function __construct($user_type=1)
    {
        switch ($type) {
            case '1':
                $this->concrete = new Mail($userName);
                break;
            case '2':
                $this->concrete = new Sms($userName);
            // case '3':
            //     $mail = (new Mail($userName))->send();
            //     $sms = (new Sms($userName)) -> send();
                // do something else;
            case '4':
            case '5':
            case '6':
                $this->concrete = new XXX($userName);
            default:
                # code...
                break;
        }
    }

    public function send()
    {
        $this->concrete->send();
    }
}