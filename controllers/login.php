<?php

require "Database.php";
$config = require "config.php";
require "Validator.php";





$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $db = new DataBase($config);

    $_POST["username"];
    $_POST["password"];

    $query = "SELECT * FROM user WHERE username = :username";
    $params = [":username" => $_POST["username"]];
    $user = $db->execute($query, $params)->fetch();

    if(!password_verify($_POST["password"], $user["password"]))
    {
        $errors["login"] = "Parole vai e-pasts nav pareiz";
    }

    if(empty($errors))
    {

            $_SESSION["user"] = true;
            $_SESSION["admin"] = $user["admin"] ?? false;
            $_SESSION["username"] = ucfirst($_POST["username"]);
            $_SESSION["user-id"] = $user["id"];
            echo "Welcome!";
            header("Location: /");

        // echo "User with the email " . $_SESSION["email"] . " has logged in.";

        // header("Location: /");
        // die();
    }

}







// $errors = [];

// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     $password = $_POST["password"];           
//     $username = $_POST["username"];
//     $query = "SELECT * FROM user WHERE username = :username AND password = :password";
//     $params = [":username" => $username, ":password" => $password];
//     $db = new DataBase($config);
//     $result = $db->execute($query, $params)->fetch();
//     // var_dump($result);


//     if($result) {
//         $query = "SELECT * FROM user WHERE username = :username";
//         $params = [":username" => $_POST["username"]];
//         $user = $db->execute($query, $params)->fetch();
//         if(password_verify($_POST["password"], $user["password"]))
//         {
//             $query = "SELECT * FROM user WHERE username = :username AND password = :password";
//             $params = [":username" => $username, ":password" => $password];
//             $db = new DataBase($config);
//             $result = $db->execute($query, $params)->fetch();
    
    
//             session_start();
//             $_SESSION["user"] = true;
//             $_SESSION["admin"] = $result["admin"] ?? false;
//             $_SESSION["username"] = $_POST["username"];
//             $_SESSION["user-id"] = $result["id"];
//             echo "Welcome!";
//             header("Location: /");
//         }else
//         {
//             $errors["login"] = "Wrong username or passwordfghdsfghgfsdgfdghghkgiughghkfdgshkdgfgghjkdgkhagdhgadgbkdgkjgdbkgskh";
//         }   
//     } else {
//         $errors["login"] = "Wrong username or password";
//         // header("Location: /login");
//     }
// }



guest("views/login.view.php", $errors);