<?php $page_title = "Register"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main>
<h1>Register</h1>

    <form action="/register" method="POST">
        <label>
            Username:
            <input type="text" name="username" style="<?= isset($errors["register"]) ? "border: 1px solid red" : "" ?>">
            <?php if(isset($errors["register"])){ ?>
                <p class="invalid-data"><?= $errors["register"] ?></p>
            <?php } ?>
        </label>
        <label>
            Password:
            <input type="password" name="password"style="<?= isset($errors["register"]) ? "border: 1px solid red" : "" ?>" >
        </label>
        <button>Register!</button>
    </form>

    </main>
</body>
</html>
