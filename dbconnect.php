<?php
$connection = mysqli_connect('localhost', 'root', '');

$select_db = mysqli_select_db($connection, 'bronco');


$dsn = 'mysql:host=localhost;dbname=tradewinds';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn,$username,$password);
    echo "connected";
}
catch (PDOException $e) {
    $error_message = $e->getMessage();
}


?>