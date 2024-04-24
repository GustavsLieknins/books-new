<?php $page_title = "Edit book " . $_GET["id"]; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <main>
    <h1>Edit book here</h1>
    <h1><?= $books[0]["name"] . " by " . $books[2]["name"] ?></h1>
    <form method="POST" enctype="multipart/form-data" class="form-for-inputs form-edit">
    <label>
            Name
            <input type="text" name="name" value='<?= $_POST["name"] ?? $books[0]["name"] ?>' placeholder="Name"  class="form-inputs">
            <?php if(isset($errors["name"])){ ?>
                <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
        </label>
        <label>
            Author
            <select name='author' class="book-add-select">
                <option value='-1'>Select one below</option>
                <?php foreach ($books[1] as $author) { ?>
                    <option value='<?= $author["id"] ?>' <?= (isset($_POST["author"]) && $_POST["author"] == $author["id"] || $books[0]["author"] == $author["id"] ? "selected" : '') ?> ><?= $author["name"] ?></option>
                <?php } ?>
            </select>
            <?php if(isset($errors["author"])){ ?>
                <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?>
        </label>
        <label>
            Release date
            <input type="date" name="releaseDate" value='<?= $_POST["releaseDate"] ?? $books[0]["release_date"] ?>' class="form-inputs">
            <?php if(isset($errors["releaseDate"])){ ?>
                <p class="invalid-data"><?= $errors["releaseDate"] ?></p>
            <?php } ?>
        </label>
        <label>
            Availability
            <input type="text" name="availability" value="<?= $_POST["availability"] ?? $books[0]["availability"] ?>" placeholder="Availability" class="form-inputs">
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

