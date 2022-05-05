<!DOCTYPE HTML>
<html>
    <body>
        <form action="" method="post">
        UserName<input type="text" name="username" required><br>
        Password <input type="text" name="password" required><br>
        Remember me<input type="checkbox" name="remember" value="1"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
        
        <div>
            <?php
            if(isset($_GET['Error'])){
                echo 'Invalid username or password';
            }
            ?>
        </div>
    </body>   
    
    
    
</html>
<?php
session_start();
include './confg.php';
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(isset($_POST['remember'])){
    $rem=$_POST['remember'];    
    }
    $query="select * from users where username='$username' and password='$password'";
    $result=mysqli_query($link, $query);
    $row= mysqli_fetch_assoc($result);
    var_dump($row);
    echo '<br><br>';
    if(mysqli_num_rows($result)>0){
        $_SESSION['Id']=$row['Id'];
        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
        $_SESSION['user_Type_id']=$row['user_Type_id'];
        $_SESSION['LName']=$row['LName'];
        //unset($_SESSION['lname']);
       header('Location:home.php');
       //var_dump($_SESSION);
    }
    else{
        header("Location:login.php?Error=1");
    }
    var_dump($_GET);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
