<?php

require "Database.php";
$config = require "config.php";


$errors = [];

$query = "SELECT * FROM books WHERE id = :id"; 
$params = [":id" => $_GET["id"]];
$db = new DataBase($config);
$books = $db->execute($query, $params)->fetch();


$query = "SELECT * FROM borrowed_books WHERE user_id = :user_id AND book_id = :book_id"; 
$params = [":user_id" => $_GET["user"], ":book_id" => $_GET["id"]];
$db = new DataBase($config);
$book = $db->execute($query, $params)->fetch();


if($book == true)
{

    $errors["borrow"] = "You already have this book!";
}


//FIX THIS!!!!
// $query = "SELECT * FROM books WHERE id = :id"; 
// $params = [":id" => $_GET["id"]];
// $book = $db->execute($query, $params)->fetch();

// $query = "SELECT * FROM borrowed_books WHERE user_id = :user_id AND name = :name"; 
// $params = [":user_id" => $user["id"], ":name" => $book["name"]];
// $borrowed_books = $db->execute($query, $params)->fetch();

// if($borrowed_books == true)
// {

//     $errors["borrow"] = "You already have this book!";
// }
// var_dump($books);


auth("views/book-show.view.php", $books, $book, $errors);