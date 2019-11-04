<?php $title = "Liste des livres"; ?>
<?php ob_start(); ?>
<h1>Liste des titres</h1>

<div class="contenairs">
    <div class="row">

    <?php
        foreach ($books as $book) {       
    ?>
        
    <div class="col md-3 mt-4">
        <div class="card-body">
            <div class="card-image">
                <img src="public/<?php echo $book ["imageLink"]; ?> " alt="<?php echo $book ['title']; ?> ">
            </div>
            <h2><?php echo $book['title']; ?></h2>   
            
            <div>
            </div>
            
            
            <div class="card-footer text-muted">
                <a class="btn btn-primary" href="<?php echo $book["link"];?> "> Informaton </a>
            </div>           
        </div>            
    </div>
      
            
            
            
    <?php
        }
    ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>