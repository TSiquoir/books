<?php $title = "Liste des livres"; ?>
<?php ob_start(); ?>

<div class="container">
    <h1>Liste des titres</h1>
    <div class="row">

        <?php foreach ($books as $book) { ?>
            
            <div class="col-md-3 mt-4">
                <div class="card-deck">
                    <div class="card">
                        <img class="img_livre" src="<?php echo $book["image"]; ?> " class="card-img-top" alt="<?php echo $book ['title']; ?> ">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="?action=book&id=<?php echo $book['id']; ?>">
                                    <?php echo $book['title']; ?>
                                </a>
                            </h5>
                            <div class="card-text">
                                <p class="description">
                                    Auteur : <?php echo $book['author']; ?><br/>
                                    pays : <?php echo $book['country']; ?><br/>
                                    Langue : <?php echo $book['language']; ?><br/>
                                    Année : <?php echo $book['year']; ?><br/>
                                    Pages : <?php echo $book['pages']; ?>
                                </p>    
                            </div>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Information supplémentaire</small>
                            <a class="btn btn-primary" href="<?php echo $book["link"];?> "> Go to Wikipédia </a>
                            
                            
                        </div>
                    </div>       
                </div>            
            </div>  
        <?php } ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>






<!--
<div class="card-body">
            <div class="card-img-top">
                <img src="public/<?php echo $book ["imageLink"]; ?> " alt="<?php echo $book ['title']; ?> ">
            </div>
            <h2><?php echo $book['title']; ?></h2>   
            
            <div><?php echo $book['author']; ?></div>
-->
