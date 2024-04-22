<?php $page_title = "Register"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main>
<h1>Register</h1>

    <form action="/register" method="POST" class="form-for-inputs">
        <label>
            Username:
            <input type="text" name="username" style="<?= isset($errors["username"]) ? "border: 1px solid red" : "" ?>" class="form-inputs">
            <?php if(isset($errors["register"])){ ?>
                <p class="invalid-data"><?= $errors["register"] ?></p>
            <?php } ?>
        </label>
        <label>
            Password:
            <input type="password" name="password"style="<?= isset($errors["password"]) ? "border: 1px solid red" : "" ?>" class="form-inputs" >
            <?php if(isset($errors["password"])){ ?>
                <p class="invalid-data"><?= $errors["password"] ?></p>
            <?php } ?>
        </label>
        <button class="submit-but">Register!</button>
    </form>
    <p>Already have an account?</p>
    <a href="/login"  class="form-guest"><p>Login!</p></a>
    </main>
</body>
</html>
