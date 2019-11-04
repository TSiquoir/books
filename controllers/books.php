<?php
require('models/books.php');

function listbooks()
{
    $books = getBooks();

    require('views/books.php');
}

function showBook($id) 
{
    $book = getBook($id);
    require('views/book.php');
}


