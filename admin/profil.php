<?php

session_start();

if(!isset($_SESSION['id'])) {
    header('Location: ./');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="utf-8" />
        <link rel="stylesheet" href="public/css/style.css">
        <title><?php echo $title ?></title>

    </head>
<body>
    <div>
        Id : <?php echo $_SESSION['id']; ?>
    </div>
    <div>
        Nom : <?php echo $_SESSION['name']; ?>
    </div>
</body>