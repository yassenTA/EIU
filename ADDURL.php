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
        <form action="" method="post">
            Title: <br>
            <input type="text" name="title"><br>
            Value: <br>
            <input type="text" name="value"><br>
            <input type="submit" name="add" value="ADD">
            <input type="submit" name="update" value="UPDATE">
            <input type="submit" name="delete" value="DELETE">
        </form>
        <?php
            include_once './confg.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
            $title ="";
            $value ="";
            if(isset($_POST['title'])){
                $title = $_POST['title'];
                
            }
            if(isset($_POST['value'])){
                $value = $_POST['value'];
                
            }
if(isset($_POST['add'])){
    $query="INSERT INTO "
            . "`url`(`title`, `value`) "
            . "VALUES ('$title','$value')";
    $result=  mysqli_query($link, $query);
    if($result){
        echo "added";
        exit();
    }
    
    
}
if(isset($_POST['update'])){
    $query="UPDATE `url` SET `title`='$title',`value`='$value' WHERE 4";
    $result=  mysqli_query($link, $query);
    if($result){
        echo "updated";
        exit();
    }
    
    
}
if(isset($_POST['delete'])){
    $query="DELETE FROM `url`WHERE id=6";
    $result=  mysqli_query($link, $query);
    if($result){
        echo "deleted";
        exit();
    }
    
    
}

        ?>
    </body>
</html>
 