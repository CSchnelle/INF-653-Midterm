<?php
    $dsn = 'zy4wtsaw3sjejnud.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=f33okin59mld7tzf';
    $username = 'hu0wlnc966uyzjy4';
    $password = 'cmtbdgfv39s2i8o1';

    try {
        $db = new PDO($dsn, $username);
        //$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
