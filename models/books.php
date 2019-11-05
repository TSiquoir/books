<?php

require_once('utils/db.php');



function countBooks()
{
    $db = dbConnect();

    $stmt = $db->prepare('SELECT count(*) FROM books');
 

    $stmt->execute();
    return $stmt->fetchColumn();
}



function getBooks()
{
    $limit = 20;

    $page = isset($_GET['page']) ? (int) $_GET['page']:1;

    $count = countBooks();

    $offset = ($page - 1) * $limit;

    var_dump($offset);
    die;

    $db = dbConnect();

    $stmt = $db->prepare('SELECT
        books.*,
        authors.name AS author 
        FROM books
        LEFT JOIN authors 
        ON books.author_id = authors.id
        LIMIT :offset, :limit
    ');

    $stmt->bindParam(':offset', $offset);
    $stmt->bindParam(':limit', $limit);
    
    $stmt->execute();
  
    return $stmt->fetchAll(PDO::FETCH ASSOC);

}


function getbook ($id)
{
   $db = dbConnect();
   $stmt = $db->prepare('SELECT
    books.*,
    authors.name AS author 
    FROM books
    LEFT JOIN authors 
    ON books.author_id = authors.id
    WHERE books.id = :id
   ');

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $stmt->execute();

    return $stmt->fetch();
}

