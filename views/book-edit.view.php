<?php $page_title = "Edit book " . $_GET["id"]; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <main>
    <h1>Edit book here</h1>
    <h1><?= $books["name"] . " by " . $books["author"] ?></h1>
    <form method="POST" enctype="multipart/form-data" class="form-for-inputs form-edit">
    <label>
            Name
            <input type="text" name="name" value='<?= $_POST["name"] ?? $books["name"] ?>' placeholder="Name"  class="form-inputs">
            <?php if(isset($errors["name"])){ ?>
                <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
        </label>
        <label>
            Author
            <input type="text" name="author" value="<?= $_POST["author"] ?? $books["author"] ?>" placeholder="Author" class="form-inputs">
            <?php if(isset($errors["author"])){ ?>
                <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?>
        </label>
        <label>
            Release Date
            <input type="text" name="releaseDate" value="<?= $_POST["releaseDate"] ?? $books["release_date"] ?>" class="form-inputs">
            <?php if(isset($errors["releaseDate"])){ ?>
                <p class="invalid-data"><?= $errors["releaseDate"] ?></p>
            <?php } ?>
        </label>
        <label>
            Availability
            <input type="text" name="availability" value="<?= $_POST["availability"] ?? $books["availability"] ?>" placeholder="Availability" class="form-inputs">
            <?php if(isset($errors["availability"])){ ?>
                <p class="invalid-data"><?= $errors["availability"] ?></p>
            <?php } ?>
        </label>
            Cover photo:
            <input type="file" name="picture">
            <?php if(isset($errors["picture"])){ ?>
                <p class="invalid-data"><?= $errors["picture"] ?></p>
            <?php } ?>
        </label>
        <button class="submit-but">Update</button>
    </form>
    </main>
</body>
</html>

