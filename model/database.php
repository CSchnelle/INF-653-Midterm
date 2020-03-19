<?php
    $dsn = 'mysql:host=qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=hsjrk6n1e886nnzw';
    $username = 'e77kbwj7xcmpkedz';
    $password = 'eajecprzc4oquqnb';

    try {
        $db = new PDO($dsn, $username);
        //$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
