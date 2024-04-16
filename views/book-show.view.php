<?php $page_title = "Showing book " . $_GET["id"]; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="div-show">
<h1>Great book '<?= $books["name"] ?>' writen by <?= $books["author"] ?> and released on <?= $books["release_date"] ?></h1>
<?php if($_SESSION["username"] == "admin"){ ?>
    <a href="<?= "/edit?id=".$books["id"] ?>" class="blue_but">Edit</a>
<?php }?>
<a href="/" class="green_but">Back</a>
<?php if(isset($errors["borrow"])){ ?>
    <a href="/return?id=<?= $books["id"] ?>" class="brown_but">Return!</a>
<?php }else{ ?>
    <a href="/borrow?id=<?= $books["id"] ?>" class="brown_but">Borrow</a>
<?php } ?>
<?php if($_SESSION["username"] == "admin"){ ?>
    <a href="<?= "/delete?id=".$books["id"] ?>" class="red_but">Delete</a>
<?php }?>
</div>

</body>
</html>