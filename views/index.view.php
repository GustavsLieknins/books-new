<?php $page_title = "Start"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<body>
<main>
<h1>Hi, <?= $_SESSION["username"] ?>!</h1>
    <div class="div-cards">
<!-- <div class="div-index"> -->
    <!-- <h2>Books we have available:</h2> -->
    <!-- <?= $books ?> -->
    <!-- <table> -->
        <!-- <tr>
            <th>Title:</th>
            <th>Author:</th>
            <th>Release Date:</th>
            <th>Availability:</th> -->
        <!-- </tr> -->
        <?php foreach ($books as $book) { ?>
            <div class="book-card">
                <a href="/show?id=<?= $book['id'] ?>&user=<?= $_SESSION['user-id'] ?>">
                    <div class="div-text-index">
                        <img src="<?= $book['picture'] ?>" alt="Book Cover" class="pic-index">
                        <p class="book-name"><?= $book['name'] ?></p>
                        <p>Click on card</p>
                    </div>
                </a>
            </div>
            <!-- <tr>
                <td><a href="/show?id=<?= $book["id"] . "&user=" . $_SESSION["user-id"] ?>">
                    <div class="index-cells">
                        <?= $book["name"] ?>
                    </div>
                </a></td>
                <td><a href="/show?id=<?= $book["id"] . "&user=" . $_SESSION["user-id"] ?>">
                    <div class="index-cells">
                        <?= $book["author"] ?>
                    </div>
                </a></td>
                <td><a href="/show?id=<?= $book["id"] . "&user=" . $_SESSION["user-id"]  ?>">
                    <div class="index-cells">
                        <?= $book["release_date"] ?>
                    </div>
                </a></td>
                <td><a href="/show?id=<?= $book["id"] . "&user=" . $_SESSION["user-id"]  ?>">
                    <div class="index-cells">
                        <?= $book["availability"] ?>
                    </div>
                </a></td>
            </tr> -->
        <?php } ?>
        </div>
    <!-- </table> -->
<!-- </div> -->
</main>
</body>
</html>