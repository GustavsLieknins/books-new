<?php $page_title = "Add book"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main>
    <h1>Add books here</h1>
    <form method="POST" enctype="multipart/form-data" class="form-for-inputs">
    <label >
            Title
            <input type="text" name="name" value='<?= $_POST["name"] ?? "" ?>' class="form-inputs">
            <?php if(isset($errors["name"])){ ?>
                <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
        </label>
        <label>
            Author
            <!-- <input type="text" name="author" value='<?= $_POST["author"] ?? "" ?>' class="form-inputs">
            <?php if(isset($errors["author"])){ ?>
                <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?> -->


            <select name='category' class="dropdown-input" >
                <option value='sport' <?= (isset($_GET["category"]) && $_GET["category"] == 'sport' ? "selected" : '') ?> >Sport</option>
                <option value='music' <?= (isset($_GET["category"]) && $_GET["category"] == 'music' ? "selected" : '') ?> >Music</option>
                <option value='food'  <?= (isset($_GET["category"]) && $_GET["category"] == 'food' ? "selected" : '') ?> >Food</option>
            </select>
        </label>




        <label>
            Release date
            <input type="text" name="releaseDate" value='<?= $_POST["releaseDate"] ?? "" ?>' class="form-inputs">
            <?php if(isset($errors["releaseDate"])){ ?>
                <p class="invalid-data"><?= $errors["releaseDate"] ?></p>
            <?php } ?>
        </label>
        <label>
            Availability
            <input type="text" name="availability" value='<?= $_POST["availability"] ?? "" ?>' class="form-inputs">
            <?php if(isset($errors["availability"])){ ?>
                <p class="invalid-data"><?= $errors["availability"] ?></p>
            <?php } ?>
        </label>
        <label>
            Cover photo
            <input type="file" name="picture">
            <?php if(isset($errors["picture"])){ ?>
                <p class="invalid-data"><?= $errors["picture"] ?></p>
            <?php } ?>
        </label>
        <button class="submit-but">Add</button>
    </form>


    <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name" value="Cat's life" style="display: none">
            <input type="text" name="author" value='2' style="display: none">
            <input type="text" name="releaseDate" value='2024-01-01' style="display: none">
            <input type="text" name="availability" value='2' style="display: none">
            <button class="submit-but" style="background-color: red; color: var(--text)">Add placeholder book</button>
    </form>
    <p>Dont see an author?</p>
    <a href="/addauthors" class="form-guest"><p>Create author!</p></a>
</main>
</body>
</html>
