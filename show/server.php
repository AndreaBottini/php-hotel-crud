<?php
include __DIR__ .'/../database.php';
include __DIR__ .'/../functions.php';

//1.Controllo che l'ID sia realmente esistente
if(empty($_GET['id'])){
    die('ID Verificato non esistente');
}
//2.Creo la variabile dalla GET dove recupero l'ID.
$idRoom = $_GET['id'];

$room = getById($conn, 'stanze', $idRoom);

// //3.Creo la Query
// $sql = "SELECT * FROM `stanze` WHERE id = $idRoom";

// //4.Effettuo la chiamata al DB per acquisire l'ID utilizzando il metodo fetch association.
// $result = $conn->query($sql);
// // var_dump($result);

// if ($result && $result->num_rows > 0) { 
//     $room = $result->fetch_assoc();
//     } 
//     elseif ($result) {
//         echo "No results"; 
//     } 
//     else {
//         echo "Query Error"; 
//     }

//     $conn->close();
?>