<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/13 -8:30
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

class User implements userProperties
{
    private $username;
    private $gender;
    private $job;

    public function __construct($data=[])
    {
        $this->username = '本应该是名字';
        $this->gender = 11;
        $this->job = 11;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getJob()
    {
        return $this->job;
    }
}