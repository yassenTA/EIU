<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'list users';
include_once './confg.php';
$sql="select* from users";
$result= mysqli_query($link, $sql);
echo '<table border=3px>'
. '<tr>'
. '<td>First name</td>'
. '<td>Lastname</td>'
. '<td>User type</td>'
. '<td>Action</td>'
. '</tr>';

while ($row=  mysqli_fetch_assoc($result)){
    echo '<tr>';
    echo '<td>'.$row['FName'].'</td>';
    echo '<td>'.$row['LName'].'</td>';
    echo '<td>'.$row['user_Type_id'].'</td>';
    echo '<td><a href="update_user.php?id='.$row['Id'].'">Update</a><br>'
            . '<a href="delete_user.php?id='.$row['Id'].'">Delete</a></td>';
    echo '</tr>';
}
echo '</table>';
?>