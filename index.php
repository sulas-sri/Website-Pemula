<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Website Menggunakan PHP</title>
    <meta charset="UTF-8">
    <meta name="description" contens="Nayzeiss">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">Nay Studio</h1>
        <h3 class="desc">Membuat Website dengan PHP</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</li>
                <li><a href="index.php?page=about">About</li>
                <li><a href="index.php?page=contact">Contact</li>
            </ul>
        </nav>
    </header>
    <div id="contens">
        <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'about':
                include "about.php";
                break;
                case 'contact':
                include "contact.php";
                break;
            }
        }
    else{
        include "home.php";
    }
        ?>
    </div>
    <footer>
        Ayuk belajar membuat website | 2023
    </footer>
</body>
</html>