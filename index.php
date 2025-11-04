<?php
    $pageTitle = "Homepage";
    $description = "Welcome to the bookstore. Your one stop shop for new and used books. Check out our winter sale!";
    include "./inc/templates/meta.php";
?>

<body>
    <section class="sale-CTA">
        <a href="./shop.php">
            Winter Reading SALE is ON! Visit the Shop
        </a>
    </section>
    <?php include "./inc/templates/header.php"?>
    <main>
        <section class="index-hero">
                <h1>Chart Your Reading Course</h1>
                <p>Discover captivating storiesm curated collections all for a reasonable price.</p>
                <a class="btn-brand-2" href="./shop.php">Browse Books</a>
        </section>
    </main>
</body>
<?php
    include "./inc/templates/footer.php";
?>