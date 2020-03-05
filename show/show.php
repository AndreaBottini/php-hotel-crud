<?php
include __DIR__ . '/server.php';
include __DIR__ .'/../partials/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h1>NUMERO STANZA: <?php echo $room['room_number']?></h1>
                <ul class="list-group">
                    <li class="list-group-item">ID: <?php echo $room['id']?></li>
                    <li class="list-group-item">Floor: <?php echo $room['floor']?></li>
                    <li class="list-group-item">Beds: <?php echo $room['beds']?></li>
                    <li class="list-group-item">Created At: <?php echo $room['created_at']?></li>
                    <li class="list-group-item">Updated At: <?php echo $room['updated_at']?></li>
                </ul>
            </div>
        </div>
    </div> 
</div>           
<?php include __DIR__ .'/../partials/footer.php';?>