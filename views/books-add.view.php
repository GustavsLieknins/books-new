<?php $page_title = "Add book"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main>
    <h1>Add books here</h1>
    <form method="POST">
    <label>
            Add title:
            <input type="text" name="name" value='<?= $_POST["name"] ?? "" ?>'>
            <?php if(isset($errors["name"])){ ?>
                <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
        </label>
        <label>
            Add author:
            <input type="text" name="author" value='<?= $_POST["author"] ?? "" ?>'>
            <?php if(isset($errors["author"])){ ?>
                <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?>
        </label>
        <label>
            Add release date:
            <input type="text" name="releaseDate" value='<?= $_POST["releaseDate"] ?? "" ?>'>
            <?php if(isset($errors["releaseDate"])){ ?>
                <p class="invalid-data"><?= $errors["releaseDate"] ?></p>
            <?php } ?>
        </label>
        <label>
            Add availability:
            <input type="text" name="availability" value='<?= $_POST["availability"] ?? "" ?>'>
            <?php if(isset($errors["availability"])){ ?>
                <p class="invalid-data"><?= $errors["availability"] ?></p>
            <?php } ?>
        </label>
        <button class="submit-but">Add</button>
    </form>
</main>
</body>
</html>
