<?php

$db = new PDO('mysql:host=localhost;dbname=books', 'root');

session_start();

if (isset($_SESSION['id'])) {
    session_destroy();
}

if (isset($_POST['login'])) {

    $login = (string) $_POST['login'];
    $password = (string) $_POST['password'];

    if (filter_var($login, FILTER_VALIDATE_EMAIL) && $password) {


        $stmt = $db->prepare('SELECT * FROM users WHERE email = :login');
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user ['id'];
            $_SESSION['name'] = $user['name'];
            header('Location: ./profil.php');
        }
  //  var_dump
    }
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
    <div class="container">
        <h1 class="mt-3 mb-3">Connexion</h1>
        <form action="./" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="login">Email address</label>
                        <input required name="login" type="email" class="form-control" id="login" placeholder="Adresse email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input required name="password" type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mt-12">
                    <button class="btn btn-primary" type="submit">Se connecter</button>
                </div>
            </div>
           

        </form>
    </div>
</body>
