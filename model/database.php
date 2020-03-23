<?php
    $dsn = 'i943okdfa47xqzpy.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=tn3rnzeo3llct5gb';
    $username = 'c1mvitpkskzh7wbd';
    $password = 'i4qc31hmzr7wdtui';

    try {
        $db = new PDO($dsn, $username);
        //$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
