<?php $page_title = "Start"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<body>
<main>
<h1>Hi, <?= $_SESSION["username"] ?>!</h1>
    <h2>Books we have available:</h2>
    <div class="div-cards">
<!-- <div class="div-index"> -->
    <!-- <?= $books ?> -->
    <!-- <table> -->
        <!-- <tr>
            <th>Title:</th>
            <th>Author:</th>
            <th>Release Date:</th>
            <th>Availability:</th> -->
        <!-- </tr> -->
        <?php foreach ($books as $book) { ?>
            <div>
            <a href="/show?id=<?= $book['id'] ?>&user=<?= $_SESSION['user-id'] ?>">
                <div class="book-card">
                        <div class="div-text-index">
                            <img src="<?= $book['picture'] ?>" alt="Book Cover" class="pic-index">
                            <p class="book-name"><?= $book['name'] ?></p>
                        </div>
                        
                        <p>Click on card</p>
                </div>
            </a>
            </div>
        <?php } ?>
        </div>
    <!-- </table> -->
<!-- </div> -->
</main>
</body>
</html>