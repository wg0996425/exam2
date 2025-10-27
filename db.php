<?php 

function db() {
    $SERVERNAME = "localhost";
    $DBNAME = "exam2";
    $USERNAME = 'root';
    $PASSWORD = "";

    try {
        $dsn = "mysql:host=$SERVERNAME;dbname=$DBNAME";
        $pdo = new PDO($dsn, $USERNAME, $PASSWORD);
        return $pdo;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>