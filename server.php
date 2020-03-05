<?php 
include __DIR__ .'/database.php';

//Query dove ho cercato tutte le stanze
$sql = "SELECT * FROM `stanze`";
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



?>