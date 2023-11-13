<?php

 $dsn = 'msql:host=localhost;dbname=assignment_tracker';
 $username = 'root';
 //password = paSSword;


 try {
    $db = new PDO($dsn, $username);

 } catch (PDOException $e) {
    $error = "Database Error: ";
    $error =$e->getMessage();
    include('view/error.php');
    exit();
 }
     