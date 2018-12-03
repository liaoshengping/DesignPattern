<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -16:05
 * @Version 1.0
 * @Describe: 简单工厂
 * 1:
 * 2:
 * ...
 */

interface userProperties {
    function getUsername();
    function getGender();
    function getJob();
}
class User implements userProperties{
    private $username;
    private $gender;
    private $job;
    public function __construct($username, $gender, $job) {
        $this->username = $username;
        $this->gender = $gender;
        $this->job = $job;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getJob() {
        return $this->job;
    }
}

class userFactory {
    static public function createUser($properties = []) {
        return new User($properties['username'], $properties['gender'], $properties['job']);
    }
}

$employers = [
    ['username' => 'Jack', 'gender' => 'male', 'job' => 'coder'],
    ['username' => 'Marry', 'gender' => 'female', 'job' => 'designer'],
];
$user = userFactory::createUser($employers[1]);
echo $user->getGender();

