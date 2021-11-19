<?php
include_once 'dbconfig.php';
include_once '../src/User/User.class.php';

if(isset($_POST["email"])){

    $email = $_POST["email"];
    $pwd = md5($_POST["password"]);

    try{
        $user = new User();
        $user->setEmail($email);
        $user->setPassword($pwd);
        
        $user = $user->verifyUser($connection);
        
        if($user){
            
            echo "login";
            
         }
         
         else 
             echo "User not found";
    }
    catch (Exception $e){
        
        echo $e;
    }
    
    
}
