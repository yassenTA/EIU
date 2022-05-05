<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './confg.php';
        $id=$_GET['id'];
        $sql="DELETE FROM `users` WHERE Id=$id";
                $result= mysqli_query($link, $sql);
                if($result){
                    header("location: list_users.php");
                }
        ?>
    </body>
</html>