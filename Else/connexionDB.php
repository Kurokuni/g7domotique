<?php
$ServerName="localhost";
$UserName="root";
$Password="";
$DBName="g7database.sql";

try{
    $conn = new PDO("mysql:host=$ServerName;dbname=$DBName", $UserName,$Password);
    // set error if connexion fails
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo"Connexion successfull";
}
catch(PDOExeption $e)
{
    echo"connexion failed" . $e->getMessage();
}
