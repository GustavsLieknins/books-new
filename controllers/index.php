<?php

require "Database.php";
$config = require "config.php";


$query = "SELECT * FROM authors"; 
$params = [];
$db = new DataBase($config);
$authors = $db->execute($query, $params)->fetchAll();

$query = "SELECT * FROM books WHERE availability > 0 ORDER BY id DESC"; 
$params = [];
$db = new DataBase($config);
$books = $db->execute($query, $params)->fetchAll();


$perPage = null;
if (isset($_GET['perPage'])) {
    $_SESSION['perPage'] = $_GET['perPage'];
    $perPage = $_SESSION['perPage'];
}

$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$books_per_page = $_SESSION['perPage'] ?? 5;
$books_count = count($books);

$books_pages_count = ceil($books_count / $books_per_page);

$start_index = ($page - 1) * $books_per_page;
$end_index = min($start_index + $books_per_page, $books_count);
$books_paginated = array_slice($books, $start_index, $end_index - $start_index);


auth("views/index.view.php", $books = [$books_paginated, $page, $books_pages_count, $books_per_page, $authors]);

