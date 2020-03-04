<?php
include __DIR__ .'/../partials/header.php';
?>
<body>
    <?php 
    include __DIR__ . '/server.php';
    ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <ul>
                    <li>ID: <?php echo $room['id']?></li>
                    <li>Floor: <?php echo $room['floor']?></li>
                    <li>Room Number: <?php echo $room['room_number']?></li>
                    <li>Beds: <?php echo $room['beds']?></li>
                </ul>
            </div>
        </div>
    </div> 
</div>           
</body>

</html>