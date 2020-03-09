<?php
include __DIR__ .'/../database.php';
include __DIR__ .'/../partials/header.php';

//1.Effettuo il controllo dove verifico $_GET non sia vuoto.
if(!empty($_GET['id'])) {
    $roomId = $_GET['id'];
}

//2.Creo la Query che è simile a quella utilizzata per show.
$sql = "SELECT * FROM `stanze` WHERE id = $roomId";

//3.Effettuo la chiamata al DB per acquisire l'ID utilizzando il metodo fetch association.
$result = $conn->query($sql);
// var_dump($result);

//4. Se il risultato è maggiore di 0 inserisco un messaggio utilizzando die per comunicare che l'id non esiste.
if ($result && $result->num_rows > 0) { 
    $room = $result->fetch_assoc();
    } 
    else {
        die('ID non esistente');
    }

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="server.php" method="POST">    
                <div class="form-group">
                    <label for="room_number">Numero Stanza</label>
                    <input class="form-control" type="text" name="room_number" value="<?php echo $room ['room_number']?>">
                </div>
                <div class="form-group">
                    <label for="floor">Piano</label>
                    <input class="form-control" type="text" name="floor" value="<?php echo $room ['floor']?>">
                </div>
                <div class="form-group">
                    <label for="beds">Numero letti</label>
                    <input class="form-control" type="text" name="beds" value="<?php echo $room ['beds']?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $room ['id']?>">
                    <input class="form-control" class="btn btn-submit" type="submit" value="Salva">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include __DIR__ . '/../partials/footer.php';
?>