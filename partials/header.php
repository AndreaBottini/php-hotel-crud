<?php include_once __DIR__ .'/../env.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $basePath?>dist/app.css">
    <title>Hotel-CRUD</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <div class="navbar-brand">Hotel BOOLEANA</div>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?php echo $basePath?>">TUTTE LE STANZE DISPONIBILI</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $basePath?>create/create.php">INSERISCI UNA NUOVA STANZA</a></li>
            </ul>
        </nav>
    </header>
    <div class="wrapper mt-5">