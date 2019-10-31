<?php
require('models/books.php');

function listbooks()
{
    $books = getBooks();

    require('views/books.php');
}
