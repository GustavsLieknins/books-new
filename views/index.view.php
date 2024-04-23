<?php $page_title = "Start"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<body>
<main class="main-index">
    <!-- <div> <?php echo "<pre>" ?> -->
        <!-- <p>You already have book   foreach ($books[0] as $book) {  $book["id"] === $_GET["id"] ?? ""   };  ?></p> -->
    <!-- </div> -->
    <!-- <div style= isset($_GET["name"]) ? "border: 1px solid red" : "" ?>" class="error-div">
        <p>You already have <?= $_GET["name"] ?? "" ?></p>
    </div> -->

    <?= isset($_GET["name"]) ? "
    <div class='error-message'>
        <span class='error-text'>You already have " .  $_GET["name"] . "</span>
    </div>" : "" ?>
 
    <h2>Books we have available</h2>

    <div class="div-cards">

        <?php foreach ($books[0] as $book){ ?>
            <div>
                <!-- <a href="<?= $book["id"] === $_GET["id"] ? "/return?id=" .  $book["id"] : ($_SESSION["admin"] === 1 ? "/show?id=" . $book['id'] . "&user=" . $_SESSION['user-id'] : "/borrow?id=" . $book['id']) ?>" class="card-a"> -->
                <a href="<?= $_SESSION["admin"] === 1 ? "/show?id=" . $book['id'] . "&user=" . $_SESSION['user-id'] : "/borrow?id=" . $book['id'] ?>" class="card-a">
                <div class="book-card">
                        <div class="book-availability "><p id='<?= $book['availability'] == 1 ? "book-availability-alert" : "" ?>' >Books left <?= $book['availability'] ?></p></div>
                        <img src="<?= $book['picture'] ?>" alt="Book Cover" class="pic-index">
                        <div class="div-text-index">
                            <p class="book-name">"<?= $book['name'] ?>"</p>
                            <p class="book-author">Written by <?= $book['author'] ?></p>
                        </div>
                        <p>Click to borrow</p>
                </div>
                </a>
            </div>
        <?php } ?>
        </div>
    </div>
    <p class="select-page-s">Select page</p>
    <div class="pagination">
            <?php if($books[1] > 1){ ?>
                <a href="/?page=1" class="page-numbers">
                    <div class="pagination-item">1</div>
                </a>
                <div class="pagination-item pagination-item-dots">...</div>
            <?php } ?>

            <?php for($i = max(1, $books[1] - 2); $i <= min($books[1] + 2, $books[2]); $i++){ ?>
                <?php if($i == $books[1]){ ?>
                    <div class="pagination-item pagination-item-active">
                        <?= $i ?>
                    </div>
                <?php }else{ ?>
                    <a href="/?page=<?= $i ?>" class="page-numbers">
                        <div class="pagination-item">
                            <?= $i ?>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>

            <?php if($books[1] < $books[2]){ ?>
                <div class="pagination-item pagination-item-dots">...</div>
                <a href="/?page=<?= $books[2] ?>" class="page-numbers">
                    <div class="pagination-item">
                        <?= $books[2] ?>
                    </div>
                </a>
            <?php } ?>
            <div class="dropdown-input-div">
            <form class="form-page-switch">
                <select name='perPage' class="dropdown-input" onchange="this.form.submit();">
                    <option value='5' <?= (isset($_GET["perPage"]) && $_GET["perPage"] == 5 || isset($_SESSION["perPage"]) && $_SESSION["perPage"] == 5 ? "selected" : '') ?> >5</option>
                    <option value='10' <?= (isset($_GET["perPage"]) && $_GET["perPage"] == 10 || isset($_SESSION["perPage"]) && $_SESSION["perPage"] == 10  ? "selected" : '') ?> >10</option>
                    <option value='20' <?= (isset($_GET["perPage"]) && $_GET["perPage"] == 20 || isset($_SESSION["perPage"]) && $_SESSION["perPage"] == 20  ? "selected" : '') ?> >20</option>
                    <option value='30'  <?= (isset($_GET["perPage"]) && $_GET["perPage"] == 30 || isset($_SESSION["perPage"]) && $_SESSION["perPage"] == 30 ? "selected" : '') ?> >30</option>
                </select>
            </form>
        </div> 
        </div>  
</main>
</body>
</html>


