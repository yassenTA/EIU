<?php

session_start();
include_once './confg.php';
if(isset($_SESSION['user_Type_id'])){
    $type_id=$_SESSION['user_Type_id'];
    $query="SELECT url.Id,url.title,url.value "
            . "from url,user_type_url "
            . "where url.id=user_type_url.url_id "
            . "and user_type_url.user_type_id=$type_id";
    $result=  mysqli_query($link, $query);
    echo '<ul>';
    while($row =  mysqli_fetch_assoc($result)){
        echo '<li>';
        echo "<a href='".$row['value']."'>".$row['title']."</a>";
        echo '</li>';
    }
    echo '<li><a href="http://localhost/kareem/logout.php">Logout</a></li>';
    echo '</ul>';
    
}

?>