<?php

require "Database.php";
require "Validator.php";
$config = require "config.php";

$errors = [];
$books = [];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $author = $_POST["author"];

    if(!Validator::string($author, min_len: 1, max_len: 255))
    {
        $errors["author"] = "Author invalid";
    }

    if(empty($errors))
    {

        $query = "INSERT INTO 
        authors (name) 
        VALUE 
        (:name);";
        $params = [":name" => $author];
        $db = new DataBase($config);
        $books = $db->execute($query, $params)->fetchALL();



        header("Location: /addauthors");
        die();
    }
}

admin("views/books-add-authors.view.php", $books, [], $errors);
