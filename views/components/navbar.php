<?php
if(!isset($_SESSION["user"]) || $_SESSION["user"] == false)
{
    echo '<header>
        <nav>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
            <div><a href="/" class="user-but logo-text"><img src="views/img/book-logo.png" alt="Logo" class="nav-logo">Freaky bookshop</a></div> 
        </nav>
    </header>';
}else if($_SESSION["admin"] === false )
{
    echo '<header>
        <nav>
            <a href="/" class="start-but">Start</a>
            <a href="/borrowedBooks?id=' . $_SESSION["user-id"] . '" class="user-but"><img src="views/img/user2.svg" alt="Logo" class="logo">' . $_SESSION["username"] . '</a>
            <div><a href="/" class="user-but logo-text"><img src="views/img/book-logo.png" alt="Logo" class="nav-logo">Freaky bookshop</a></div>
            <a href="/logout" class="logout-but">Log out</a>
        </nav>
    </header>'; 
}else
{
    echo '<header>
        <nav>
            <a href="/" class="start-but">Start</a> 
            <a href="/addbooks" class="start-but">Addbooks</a>
            <a href="/borrowedBooks?id=' . $_SESSION["user-id"] . '" class="user-but"><img src="views/img/user2.svg" alt="Logo" class="logo">' . $_SESSION["username"] . '</a>
            <div><a href="/" class="user-but logo-text"><img src="views/img/book-logo.png" alt="Logo" class="nav-logo">Freaky bookshop</a></div>
            <a href="/logout" class="logout-but">Log out</a>
        </nav>
</header>';
}
