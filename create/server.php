<?php
include_once __DIR__ .'/../env.php';
include __DIR__ .'/../database.php';


//1. Controllo che siano inseriti nel form i letti, il piano e il numero della camera
if(empty($_POST['beds'])) {
    die('Numero letti non inserito');
}
if(empty($_POST['floor'])) {
    die('Piano non inserito');
}
if(empty($_POST['room_number'])) {
    die('Numero camera non trovato');
}

//2. Dichiaro le variabili per lavorare con l'injection.
$beds = $_POST['beds'];
$floor = $_POST['floor'];
$roomNumber = $_POST['room_number'];

$sql = "INSERT INTO `stanze` (`beds`, `floor`, `room_number`, `created_at`, `updated_at`)
VALUES (?,?,?, NOW(), NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $beds, $floor, $roomNumber);
$stmt->execute();
var_dump($stmt);

//3. Controllo che lo statement sia maggiore dell'id inserito e nel caso mostro di nuovo la pagina show.
if(isset($stmt->insert_id)) {
    header("Location: $basePath/show/show.php?id=$stmt->insert_id");
} 
else {
    echo 'KO';
}

