<?php
include_once __DIR__ .'/../env.php';
include __DIR__ .'/../database.php';

//1. Controllo che l'id, i letti, il piano e il numero di camera siano presenti.
if(empty($_POST['id'])) {
    die('ID non trovato');
}
if(empty($_POST['beds'])) {
    die('Numero letti non inserito');
}
if(empty($_POST['floor'])) {
    die('Piano non inserito');
}
if(empty($_POST['room_number'])) {
    die('Numero camera non trovato');
}

//2. Se l'id è presente, effettuo un secondo controllo per verificare che l'id è esistente,
$roomId = $_POST['id'];
$roomNumber = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];


$sql = "SELECT * FROM `stanze` WHERE id = $roomId";

$result = $conn->query($sql);
// var_dump($result);

if ($result && $result->num_rows > 0) { 
    $room = $result->fetch_assoc();
    } 
    else {
        die('ID non esistente');
    }

//3. Effettuo la chiamata per modificare i dati. Inserimeno i dati passati come POST delle variabili dichiarate precedentemente.   
    $sql = "UPDATE `stanze` SET `room_number = $roomNumber, `beds = $beds, `floor` = $floor WHERE id = $roomId";

//4. Utilizzo la query.
$result = $conn->query($sql);

if($result) {
    header("Location: $basePath/show/show.php?id=$roomId");
} else {
    echo 'KO';
}


?>