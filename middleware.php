<?php



function auth($location, $books = [], $user = [], $errors = [])
{
    if($_SESSION["user"] == true)
    {
        require $location;
    }else
    {
        header("Location: /login");
    }
}

function guest($location, $errors = [])
{
    if(isset($_SESSION["user"]))
    {
        if(isset($_SESSION) && $_SESSION["user"] == true)
        {
            header("Location: /");
        }else
        {
            require $location;
        }
    }else
    {
        require $location;
    }

}

function admin($location, $books = [], $user = [], $errors = [])
{
    if($_SESSION["admin"] === 1)
    {
        require $location;
    }else
    {
        header("Location: /login");
    }
}

