<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    $username = 'kingcastro';
    $password = 'password';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
