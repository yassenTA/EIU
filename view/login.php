<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../classes/user.php';
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $user=new user($id='');
    if($user->login($username,$password)){
        header("location: home.php");
    }
    else{
        echo 'invalid username or password!';
    }
}
?>
<html>
    <body>
        <form method="post">
            username <input type="text" name="username">
            password <input type="text" name="password">
            <br>
            <input type="submit" name="login" value="login">
            
        </form>  
    </body>
</html>


