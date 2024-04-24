<?php $page_title = "Showing book " . $_GET["id"]; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="div-show">
    <div class="div-book-show">
        <h1>Great book '<?= $books[0]["name"] ?>' writen by <?= $books[1]["name"] ?> and released on <?= $books[0]["release_date"] ?></h1>
        <h2>Availability: <?= $books[0]["availability"] ?></h2>
        <img src="<?= $books[0]["picture"] ?>"  class="img-show">
    </div>
    <div class="div-btns">
        <?php if($_SESSION["admin"] == 1){ ?>
            <a href="<?= "/edit?id=".$books[0]["id"] ?>" class="blue_but">Edit</a>
        <?php }?>
        <a href="/" class="green_but">Back</a>
        <?php if(isset($errors["borrow"])){ ?>
            <a href="/return?id=<?= $books[0]["id"] ?>" class="brown_but">Return</a>
        <?php }else{ ?>
            <a href="/borrow?id=<?= $books[0]["id"] ?>" class="brown_but">Borrow</a>
        <?php } ?>
        <?php if($_SESSION["admin"] == 1){ ?>
            <a href="<?= "/delete?id=".$books[0]["id"] ?>" class="red_but">Delete</a>
        <?php }?>
    </div>
</div>

</body>
</html>