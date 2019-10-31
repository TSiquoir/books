<?php
$action = (string) $_GET['action'];

switch ($action) {
  case 'books':
    require('views/books.php');
    listBooks();
  break;
  
  
  default:
    require('views/404.php');
}
