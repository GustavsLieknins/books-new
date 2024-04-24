<?php $page_title = "Add book"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main>
    <h1>Add authors here</h1>
    <form method="POST" enctype="multipart/form-data" class="form-for-inputs">
    <label >
            Name
            <input type="text" name="author" value='<?= $_POST["author"] ?? "" ?>' class="form-inputs">
            <?php if(isset($errors["author"])){ ?>
                <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?>
        </label>
        <button class="submit-but">Add</button>
    </form>
    <p>Back to creating books?</p>
    <a href="/addbooks" class="form-guest"><p>Go back!</p></a>
</main>
</body>
</html>
