<?php $title = "Liste des livres"; ?>
<?php ob_start(); ?>

<body >
    <section id="abs1" class="absolute " >
        <div >
            <img class="img_livre col-md-3 .offset-md-9" src="<?php echo $book ["image"]; ?> " alt="<?php echo $book ['title']; ?> ">
        </div>
        
        <article id="sta1" class="static">
            <h2><?php echo $book['title']; ?></h2>
            <p class="description">
                Auteur : <?php echo $book['author']; ?><br/>
                pays : <?php echo $book['country']; ?><br/>
                Langue : <?php echo $book['language']; ?><br/>
                Année : <?php echo $book['year']; ?><br/>
                Pages : <?php echo $book['pages']; ?>
            </p>    
        </article>
    </section>
</body>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>




<!--
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
        <img src="..." class="card-img" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
    </div>
    </div>
-->