<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="COMPLITE" content="COMPLITE">
        <meta name="author" content="Justin Anthony Aleta">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COMPLITE</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="header">
            <?php include '../utils/nav.php';?>
        </div>
            <div class="content">
            <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    $allowed_pages = ['home', 'about', 'contact'];
                    if (in_array($page, $allowed_pages)) {
                        include $page . '.php';
                    } else {
                        echo '<h1>Page not found</h1>';
                    }
                } else {
                    include 'home.php';
                }
            ?>
            </div>

    </body>
</html>