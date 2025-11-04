<?php
    $pageTitle = "Homepage";
    $description = "Welcome to the bookstore. Your one stop shop for new and used books. Check out our winter sale!";
    include "./inc/templates/meta.php";
?>

<body>
    <?php
     include "./inc/templates/shopCTA.php";   
     include "./inc/templates/header.php"?>
    <main>
        <section class="index-hero">
                <h1>Chart Your Reading Course</h1>
                <div>
                    <p>Discover captivating stories.</p>
                    <p>curated collections all for a reasonable price.</p>
                </div>
                <div class="book-container">

                <article class="book-card">
                        <a href="">
                        <div class="book-img-container">
                            <img src="./uploads/lotrfellowship.jpg" alt="">
                        </div>
                        <p><cite>J.R.R. Tolkien</cite></p>
                        <p>Lord of the Rings The Fellowship Of The Ring</p>
                        <p>$59.99</p>
                    </a>
                </article>

                <article class="book-card">
                        <a href="">
                        <div class="book-img-container">
                            <img src="./uploads/lotrtwotowers.jpg" alt="">
                        </div>
                        <p><cite>J.R.R. Tolkien</cite></p>
                        <p>Lord of the Rings The Two Towers</p>
                        <p>$59.99</p>
                    </a>
                </article>

                <article class="book-card">
                        <a href="">
                        <div class="book-img-container">
                            <img src="./uploads/lotrrotk.jpg" alt="">
                        </div>
                        <p><cite>J.R.R. Tolkien</cite></p>
                        <p>Lord of the Rings The Return Of The King</p>
                        <p>$59.99</p>
                    </a>
                </article>

            </div>
                <a class="btn-brand-2" href="./shop.php">Browse Books</a>
        </section>
    </main>
</body>
<?php
    include "./inc/templates/footer.php";
?>