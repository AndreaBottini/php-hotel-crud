<?php
include __DIR__ .'/../partials/header.php';
?>
<body>
    <?php 
    include __DIR__ . '/server.php';
    ?>
    <div class="card">
        <ul>
            <li>ID:<?php echo $room['id']?></li>
            <li>Floor:</li>
            <li>Room Number:</li>
            <li>Beds:</li>
        </ul>
    </div>
</body>

</html>