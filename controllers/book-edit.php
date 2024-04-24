
<?php
require "Database.php";
require "Validator.php";
$config = require "config.php";


$query = "SELECT * FROM books WHERE id = :id"; 
$params = [":id" => $_GET["id"]];
$db = new Database($config);
$book = $db->execute($query, $params)->fetch();

$query = "SELECT * FROM authors"; 
$params = [];
$db = new DataBase($config);
$authors = $db->execute($query, $params)->fetchAll();

$query = "SELECT * FROM authors WHERE id = :id"; 
$params = [":id" => $book["id"]];
$db = new DataBase($config);
$author = $db->execute($query, $params)->fetch();


$errors = [];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $bookName = $_POST["name"];
    $bookAuthor = $_POST["author"];
    $bookReleaseDate = $_POST["releaseDate"];
    $bookAvailability = $_POST["availability"];
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
    if(empty($errors))
    {
        $query = "SELECT * FROM books WHERE id = :id"; 
        $params = [":id" => $_GET["id"]];
        $book = $db->execute($query, $params)->fetch();

        $target_dir = "views/img/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
        } else {
            $target_file = $book["picture"];
        }

        if($target_file === "views/img/")
        {
            $target_file = $book["picture"];
        }

        $query = "UPDATE books SET name = :name, author = :author, release_date = :release_date, availability = :availability, picture = :picture  WHERE id = :id";
        $params = [":name" => $bookName, ":author" => $bookAuthor, ":release_date" => $bookReleaseDate, ":availability" => $bookAvailability, ":id" => $_GET["id"], ":picture" => $target_file];
        // $db = new Database($config);
        $books = $db->execute($query, $params)->fetch();
        header("Location: /");
    }
}



$page_title = "Edit book ".$_GET["id"];
admin("views/book-edit.view.php", $book = [$book, $authors, $author], [], $errors);
