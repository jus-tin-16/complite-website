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
        <header>
            <div class="header">
                <?php include '../utils/nav.php';?>
            </div>
        </header>
        <main>
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
        </main>
        <div id="loginForm" class="modal">
            <form class="modal-content animate" action="login.php" method="post">
                <div class="imgcontainer">
                    <span onclick="closeLoginForm()" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
        <footer>

        </footer>
    </body>
    <script>
        function openLoginForm() {
            document.getElementById('loginForm').style.display = 'block';
        }

        function closeLoginForm() {
            document.getElementById('loginForm').style.display = 'none';
        }
    </script>
</html>