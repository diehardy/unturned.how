<?php
try{
    $conn = new PDO('mysql: host=localhost; dbname=unturned', 'root', 'mysql');
}
catch (PDOException $e){
    echo $e->getMessage();
}
