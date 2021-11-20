<?php
require '../src/check.php';

class User
{

    private $userId;

    private $fname;

    private $lname;

    private $email;

    private $password;

    private $roleId;

    function __construct($fname = null, $lname = null, $email = null, $password = null)
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

    function getRoleId()
    {
        return $this->roleId;
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
        $this->email = strtolower($email);
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    }

    function createUser(PDO $connection)
    {
        $sqlStmt = "INSERT INTO user (fname, lname, email, password)" . "VALUES(:fname, :lname, :email, :password)";

        try {
            $prepareQuery = $connection->prepare($sqlStmt);

            $prepareQuery->bindValue(":fname", $this->fname, PDO::PARAM_STR);
            $prepareQuery->bindValue(":lname", $this->lname, PDO::PARAM_STR);
            $prepareQuery->bindValue(":email", $this->email, PDO::PARAM_STR);
            $prepareQuery->bindValue(":password", $this->password, PDO::PARAM_STR_CHAR);

            $result = $prepareQuery->execute(); // bool

            return $result;
        } catch (PDOException $pex) {
            echo $pex;
            return $pex;
        }
    }

    function verifyUser(PDO $connection)
    {
        $user = unserialize($this->findUserByEmail($connection));

        if (! empty($user)) {

            if ($user->getPassword() == $this->password) {
                
                $user->setPassword("");
                return $user;
            }
        }

        return FALSE;
    }

    function checkExistingUser(PDO $connection)
    {
        $user = unserialize($this->findUserByEmail($connection));
        
        if(empty($user))
            return FALSE;
        else 
            return TRUE;
    }

    function findUserByEmail(PDO $connection)
    {
        $sqlStmt = "SELECT * FROM user where email = :email";

        try {

            $prepareQuery = $connection->prepare($sqlStmt);

            $prepareQuery->bindValue(":email", $this->email, PDO::PARAM_STR);

            $prepareQuery->execute();

            $result = $prepareQuery->fetchAll();

            $user = "";

            if (sizeof($result) > 0) {

                $user = new User();

                $u = $result[0];

                $user->setUserId($u["userid"]);
                $user->setFname($u["fname"]);
                $user->setLname($u["lname"]);
                $user->setEmail($u["email"]);
                $user->setPassword($u["password"]);
                $user->setRoleId($u["roleid"]);
            }

            return serialize($user);
        } catch (Exception $e) {
            echo $e;
        }
    }
}