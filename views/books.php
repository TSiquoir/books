<?php $title = "Liste des livres"; ?>
<?php ob_start(); ?>
<h1>Liste des titres</h1>

<p>HOHHOOOHOHOHOHOHOHOHOHOHOHOHOHOHOHOH</p>

<ul>
    <?php
        foreach ($books as $book) {
            ?>
            <li><?php echo $book['title']; ?></li>
            <?php
        }
    ?>
</ul>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>