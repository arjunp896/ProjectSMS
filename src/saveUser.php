<?php
include_once 'dbconfig.php';
include_once '../src/User/User.class.php';

if (isset($_POST["fname"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $cpwd = $_POST["cpassword"];

    if ($pwd == $cpwd) {

        validateEmail($email);
        validatePassword($pwd);
        validateName($fname, $lname);

        $user = new User($fname, $lname, $email, md5($pwd));

        $exist = $user->checkExistingUser($connection);

        if (! $exist) {

            $result = $user->createUser($connection);

            if ($result) {
                header("location: ../page/Login.php");
            } else {
                echo "Erro in save user: " . $result;
            }
        } else {
//             echo "email already registered";
        header("location: ../page/Create_account.php?error='email already registered'");
        }
    } else {
        echo "Password not matched";
        header("location: ../page/Create_account.php?error='Password not matched'");
    }
}

function validateEmail($email)
{
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        echo "invalid email";
        header("location: ../page/Create_account.php?error='invalid email'");
    }
}

function validatePassword($pwd)
{
    
    
    if (strlen($pwd) < 8) {
//         echo "invalid password";
        header("location: ../page/Create_account.php?error=invalid password");
    }
}

function validateName($fname, $lname)
{
    if (preg_match('~[0-9]+~', $fname)) {
        echo 'Fname contains number';
        header("location: ../page/Create_account.php?error=invalid First Name");
    }

    if (preg_match('~[0-9]+~', $lname)) {
        echo 'lname contains number';
        header("location: ../page/Create_account.php?error=invalid Last Name");
    }
}