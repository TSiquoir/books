<?php>
    $db = new PDO('mysql:host=localhost;dbname=books', 'root');

    $stmt = $db->prepare('SELECT * FROM authors Order BY name');
    
    $stmt->execute();
  
    $authors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($authors);
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
<div class="container">
    <form action="./" methode="post">
        <div class="row">
            <div class="col-md-6">
            
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input maxlength="10" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Titre du livre">
                    <small id="titleHelp" class="form-text text-muted">Titre du livre entre 0 et 255 caractéres.</small>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="author">Auteur</label>
                    <select name="author_id" class="form-control" id="author_id">
                    
                    <?php foreach ($authors as $author) { ?>
                    <option> value="<?php echo $author['id']; ?>">
                        <?php echo $author['name']; ?>
                    </option>    
                    <?php } ?>
                    
               
                    </select>
                </div>
            </div>

            <div class="col-md-6">
            col 6
            </div>
        </div>
    </form>
</div>
    
</body>
</html>