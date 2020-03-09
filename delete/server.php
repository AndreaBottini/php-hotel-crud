<?php 
include __DIR__ .'/../database.php';

//1. Controllo che l'ID sia corretto
if(empty($_POST['id'])) {
    die('ID non corretto');
}

//2. Creo la variabile per cancellare tramite metodo POST
$roomId = $_POST['id'];

//3. Creo la query per cancellare la stanza di mio interesse e verifico se esiste l'id che voglio cancellare
$sql = "SELECT FROM `stanze` WHERE `id` = '$roomId';";

$result = $conn->query($sql);

if ($result && $result->num_rows == 0) {
    die('ID non corretto');
}

//4. Se esite faccio il delete del record e imposto la basePath per ritornare alla homepage
$sql = "DELETE FROM `stanze` WHERE `id` = '$roomId';";

$result = $conn->query($sql);

if ($result) { 
    // echo 'ok';
    header("Location: $basePath?roomNumber=$roomId");
    } else {
    echo 'KO'; 
    }

$conn->close();    


?>