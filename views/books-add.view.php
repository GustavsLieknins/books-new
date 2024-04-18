<?php $page_title = "Add book"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main>
    <h1>Add books here</h1>
    <form method="POST" enctype="multipart/form-data">
    <label>
            Title:
            <input type="text" name="name" value='<?= $_POST["name"] ?? "" ?>'>
            <?php if(isset($errors["name"])){ ?>
                <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
        </label>
        <label>
            Author:
            <input type="text" name="author" value='<?= $_POST["author"] ?? "" ?>'>
            <?php if(isset($errors["author"])){ ?>
                <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?>
        </label>
        <label>
            Release date:
            <input type="text" name="releaseDate" value='<?= $_POST["releaseDate"] ?? "" ?>'>
            <?php if(isset($errors["releaseDate"])){ ?>
                <p class="invalid-data"><?= $errors["releaseDate"] ?></p>
            <?php } ?>
        </label>
        <label>
            Availability:
            <input type="text" name="availability" value='<?= $_POST["availability"] ?? "" ?>'>
            <?php if(isset($errors["availability"])){ ?>
                <p class="invalid-data"><?= $errors["availability"] ?></p>
            <?php } ?>
        </label>
        <label>
            Cover photo:
            <input type="file" name="picture">
            <?php if(isset($errors["picture"])){ ?>
                <p class="invalid-data"><?= $errors["picture"] ?></p>
            <?php } ?>
        </label>
        <button class="submit-but">Add</button>
    </form>


    <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name" value="Cat's life" style="display: none">
            <input type="text" name="author" value='Gustavs' style="display: none">
            <input type="text" name="releaseDate" value='2024-01-01' style="display: none">
            <input type="text" name="availability" value='2' style="display: none">
            <button class="submit-but" style="background-color: red; color: var(--text)">Add placeholder book</button>
    </form>
</main>
</body>
</html>
