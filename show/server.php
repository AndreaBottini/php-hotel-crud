<?php
include __DIR__ .'/database.php';

$idRoom = $_GET['id'];

$sql = "SELECT * FROM `stanze` WHERE ID = $idRoom";
$result = $conn->query($sql);
// var_dump($result);

if ($result && $result->num_rows > 0) { 
    $rooms = [];
    while($row = $result->fetch_assoc()) {
        // echo "ID:" . $row['id'] . " " . $row['floor'];
        $rooms[] = $row;
      }
    } 
    elseif ($result) {
        echo "No results"; 
    } 
    else {
        echo "query error"; 
    }

    $conn->close();