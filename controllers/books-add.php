<?php

require "Database.php";
require "Validator.php";
$config = require "config.php";

$errors = [];
$books = [];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $bookName = $_POST["name"];
    $bookAuthor = $_POST["author"];
    $bookReleaseDate = $_POST["releaseDate"];
    $bookAvailability = $_POST["availability"];
    // $bookPicture = $_POST["picture"];
    if(!Validator::string($bookName, min_len: 1, max_len: 255))
    {
        $errors["name"] = "Name cannot be empty or too long";
    }
    if(!Validator::string($bookAuthor, min_len: 1, max_len: 255))
    {
        $errors["author"] = "Author cannot be empty or too long";
    }
    if(!Validator::date($bookReleaseDate))
    {
        $errors["releaseDate"] = "Not valid or not correct format YYYY-MM-DD";  
    } 
    if(!Validator::number($bookAvailability))
    {
        $errors["availability"] = "Cannot be empty or not a number";  
    } 
    // if(!Validator::picture($_POST["picture"]))
    // {
    //     $errors["picture"] = "Invalid file type. Only JPEG and PNG files are allowed.";
    // }
    if(empty($errors))
    {



        $target_dir = "views/img/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
        } else {
            $errors["picture"] = "Sorry, there was an error uploading your file.";
        }
        
        $query = "INSERT INTO 
        books (name, author, release_date, availability, picture) 
        VALUE 
        (:name, :author, :releaseDate, :availability, :picture);";
        $params = [":name" => $bookName, ":author" => $bookAuthor, ":releaseDate" => $bookReleaseDate, ":availability" => $bookAvailability, ":picture" => $target_file];
        $db = new DataBase($config);
        $books = $db->execute($query, $params)->fetchALL();



        header("Location: /");
        die();
    }
}

admin("views/books-add.view.php", $books, [], $errors);
