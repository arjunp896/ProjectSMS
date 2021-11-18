<?php
require '../check.php';

class User
{
    private $userId;

    private $fname;

    private $lname;

    private $email;

    private $password;

    private $homeId;

    function __construct($fname, $lname, $email, $password)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->password = $password;
    }

    function getUserId()
    {
        return $this->userId;
    }

    function getFname()
    {
        return $this->fname;
    }

    function getLname()
    {
        return $this->lname;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getPassword()
    {
        return $this->password;
    }

    function getHomeId()
    {
        return $this->homeId;
    }

    function setUserId($userId)
    {
        $this->userId = $userId;
    }

    function setFname($fname)
    {
        $this->fname = $fname;
    }

    function setLname($lname)
    {
        $this->lname = $lname;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    function setHomeId($homeId)
    {
        $this->homeId = $homeId;
    }
    
    function createUser($connection) {
        
    }
    
}