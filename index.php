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
                <a class="btn-brand-2" href="./shop.php">Browse Books</a>
        </section>
    </main>
</body>
<?php
    include "./inc/templates/footer.php";
?>