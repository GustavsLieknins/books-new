<?php
if(!isset($_SESSION["user"]) || $_SESSION["user"] == false)
{
    echo '<header>
        <nav>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </nav>
    </header>';
}else if($_SESSION["admin"] === false )
{
    echo '<header>
        <nav>
            <a href="/">Start</a>
            <a href="/borrowedBooks?id=' . $_SESSION["user-id"] . '" class="user-but"><img src="views/img/user2.svg" alt="Logo" class="logo">' . $_SESSION["username"] . '</a>
            <a href="/logout" class="logout-but">Logout</a>
        </nav>
    </header>'; 
}else
{
    echo '<header>
        <nav>
            <a href="/">Start</a>
            <a href="/addbooks">Add books</a>
            <a href="/borrowedBooks?id=' . $_SESSION["user-id"] . '" class="user-but"><img src="views/img/user2.svg" alt="Logo" class="logo">' . $_SESSION["username"] . '</a>
            <a href="/logout" class="logout-but">Logout</a>
        </nav>
</header>';
}
