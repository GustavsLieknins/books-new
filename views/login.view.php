<?php $page_title = "Login"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main class="main-guestpages">
<h1>Login</h1>

    <form action="/login" method="POST" class="form-for-inputs">
    <label>
        Username
        <input type="text" name="username" style="<?= isset($errors["login"]) ? "border: 1px solid red" : "" ?>"  class="form-inputs" value="<?= $_POST["username"] ?? "" ?>">
        <?php if(isset($errors["login"])){ ?>
            <p class="invalid-data"><?= $errors["login"] ?></p>
        <?php } ?>
    </label>
    
    <label>
        Password
        <input type="password" name="password" style="<?= isset($errors["login"]) ? "border: 1px solid red" : "" ?>"  class="form-inputs" >     
    </label>
    <button class="submit-but">Login!</button>
    </form>


    <p>Dont have an account?</p>
    <a href="/register" class="form-guest"><p>Register!</p></a>
</main>

</body>
</html> 
