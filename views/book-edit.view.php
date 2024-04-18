<?php $page_title = "Edit book " . $_GET["id"]; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <h1>Edit book here</h1>
    <h1><?= $books["name"] . " by " . $books["author"] ?></h1>
    <form method="POST" class="form-edit" enctype="multipart/form-data">
        <label>
            Title:
            <input type="text" name="name" value='<?= $_POST["name"] ?? $books["name"] ?>'>
            <?php if(isset($errors["name"])){ ?>
                <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
        </label>
        <label>
            Author:
            <input type="text" name="author" value='<?= $_POST["author"] ?? $books["author"] ?>'>
            <?php if(isset($errors["author"])){ ?>
                <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?>
        </label>
        <label>
            Release date:
            <input type="text" name="releaseDate" value='<?= $_POST["releaseDate"] ?? $books["release_date"] ?>'>
            <?php if(isset($errors["releaseDate"])){ ?>
                <p class="invalid-data"><?= $errors["releaseDate"] ?></p>
            <?php } ?>
        </label>
        <label>
            Availability:
            <input type="text" name="availability" value='<?= $_POST["availability"] ?? $books["availability"] ?>'>
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
        <button class="submit-but">Update</button>
    </form>
</body>
</html>
