<?php
include __DIR__ . '/database.php';

$idRoom = $_GET['id'];

$sql = "SELECT * FROM `stanze` WHERE id = $idRoom";
$result = $conn->query($sql);
// var_dump($result);

if ($result && $result->num_rows > 0) { 
    $room = $result->fetch_assoc();
    } 
    elseif ($result) {
        echo "No results"; 
    } 
    else {
        echo "query error"; 
    }

    $conn->close();
?>