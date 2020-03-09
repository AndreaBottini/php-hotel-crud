<?php

function getAll($conn, $table) {
    //Query dove ho cercato tutte le stanze
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    // var_dump($result);

    if ($result && $result->num_rows > 0) { 
    $results = [];
    while($row = $result->fetch_assoc()) {
        // echo "ID:" . $row['id'] . " " . $row['floor'];
        $results[] = $row;
      }
    } 
    elseif ($result) {
        $results = [];
    } 
    else {
        $results = false;
    }

    $conn->close();
    return $results;
}

function getById($conn, $table, $id)  {
    $sql = "SELECT * FROM `$table` WHERE id = '$id'";

    $resultQuery = $conn->query($sql);
    // var_dump($result);

    if ($resultQuery && $resultQuery->num_rows > 0) { 
        $result = $resultQuery->fetch_assoc();
    } 
        elseif ($result) {
        $result = [];
    } 
        else {
        $result = false;
    }
    return $result;

    $conn->close();

}
