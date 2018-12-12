<?php

$host = "localhost";
$username = "root";
$password= "";
$dbname= "read_sign";

try {
    $dsn = "mysql:host=$host; dbname=$dbname";

    $coneh= new PDO ($dsn, $username, $password);

    $coneh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $coneh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

}

catch (PDOException $e){

    echo "error occured" . $e->getMessage();

}



?>