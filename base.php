<?php

define('HOST','localhost');

define('DB_NAME','db');
define('USER','root');
define('PASS','');

try{
   
    $database= new PDO("mysql:host=" . HOST . ";db_name=" . DB_NAME , USER, PASS);
}
catch(PDOconnection $e){
    echo $e;
}

?>