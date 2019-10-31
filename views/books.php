<?php $title = "Liste des livres"; ?>
<?php ob_start(); ?>
<h1>Liste des titres</h1>
<p>Bienenue sur la page de la liste des livres</p>
<?php $content = ob_get_clean(); ?>

<?php require('public/index.php'); ?>