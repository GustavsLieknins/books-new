<?php

require "Database.php";
require "Validator.php";
$config = require "config.php";

$errors = [];
$books = [];

$query = "SELECT * FROM authors"; 
$params = [];
$db = new DataBase($config);
$authors = $db->execute($query, $params)->fetchAll();



if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $bookName = $_POST["name"];
    $bookAuthor = $_POST["author"];
    $bookReleaseDate = $_POST["releaseDate"];
    $bookAvailability = $_POST["availability"];
    // $bookPicture = $_POST["picture"];
    if(!Validator::string($bookName, min_len: 1, max_len: 255))
    {
        $errors["name"] = "Name invalid";
    }
    if($bookAuthor === -1)
    {
        $errors["author"] = "Author invalid";
    }else if(!Validator::number($bookAuthor))
    {
        $errors["author"] = "Author invalid";
    }
    if(!Validator::date($bookReleaseDate))
    {
        $errors["releaseDate"] = "Release Date invalid";  
    } 
    if(!Validator::number($bookAvailability))
    {
        $errors["availability"] = "Availability invalid";  
    } 
        // if(!Validator::picture($_POST["picture"]))
        // {
        //     $errors["picture"] = "Invalid file type. Only JPEG and PNG files are allowed.";
        // }
    if(empty($errors))
    {


        $query = "SELECT * FROM authors WHERE id = :id"; 
        $params = [":id" => $bookAuthor];
        $db = new DataBase($config);
        $author = $db->execute($query, $params)->fetch();

        $target_dir = "views/img/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
        } else {
            $target_file = "views/img/cat.jpg";
        }
        
        $query = "INSERT INTO 
        books (name, author, release_date, availability, picture) 
        VALUE 
        (:name, :author, :releaseDate, :availability, :picture);";
        $params = [":name" => $bookName, ":author" => $author["id"], ":releaseDate" => $bookReleaseDate, ":availability" => $bookAvailability, ":picture" => $target_file];
        $db = new DataBase($config);
        $books = $db->execute($query, $params)->fetchALL();



        header("Location: /addbooks");
        die();
    }
}

admin("views/books-add.view.php", $authors, [], $errors);
