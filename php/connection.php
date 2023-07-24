<?php

    getenv('MYSQL_HOST') ? $dbhost = getenv('MYSQL_HOST') : $dbhost = 'localhost';
    getenv('MYSQL_NAME') ? $dbname = getenv('MYSQL_NAME') : $dbname = 'docker';
    getenv('MYSQL_USER') ? $dbuser = getenv('MYSQL_USER') : $dbuser = 'root';
    getenv('MYSQL_PASS') ? $dbpass = getenv('MYSQL_PASS') : $dbpass = 'password';
    $dsn = "mysql:host=$dbhost;dbname=$dbname";

    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    try{
        $con = new PDO($dsn, $dbuser, $dbpass, $option);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch (PDOException $e){
        echo $e->getMessage();
    }
