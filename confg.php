<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define("host", "localhost");
define("dbName", "database_role");
define("username", "root");
define("password", "");
$link=mysqli_connect(host, username, password, dbName);
if(!$link){
    die("Connected Error 404");    
}
