<?php

include_once 'dbconfig.php';
include_once '../src/User/User.class.php';
include_once '../src/Constants.class.php';

if(isset($_POST["email"])){

    $email = $_POST["email"];
    $pwd = md5($_POST["password"]);

    try{
        $user = new User();
        $user->setEmail($email);
        $user->setPassword($pwd);
        
        $user = $user->verifyUser($connection);
        
        if($user){
//             echo "login";
            
            $roleId = $user->getRoleId();
            if($roleId == Constants::ROLE_USER){
               
                header("location: ../page/UserHome.php");
            }
            else{
                header("location: ../page/AdminHome.php");
            }
            
            
         }
         
         else 
             echo "User not found";
    }
    catch (Exception $e){
        
        echo $e;
    }
    
    
}
