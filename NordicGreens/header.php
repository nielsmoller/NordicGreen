<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nordic Greens B2B shop</title>
    <link rel="icon" type="image/x-icon" href="img/NGlogo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c5d62ef58.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header-container">
        <div class="left-container">
            <a href="index.php"><img class="headerlogo" src="img/NGlogo.png" alt="Nordic Greens Logo"></a>
            <a href="index.php"><p>Nordic Greens B2B</p></a>
        </div>

        <div class="searchbar-container">
            <?php
                if (isset($_SESSION["usersemail"])) {
                    echo 
                    "<div class='search-container'>
                        <form action='products.php' method='GET'> 
                            <input type='text' placeholder='Søg efter produkter..' name='search'>
                            <button type='submit'><i class='fa-solid fa-magnifying-glass' style='color: #f5f8f2;'></i></button>
                        </form>
                    </div>";
                }
            ?>
        </div>

        <div class="right-container">
            <ul>
                <?php
                    if (isset($_SESSION["usersemail"])) {
                        echo "
                        <button class='profile-btn' onclick=\"window.location.href=('profile.php')\">Profil<i class='fa-regular fa-user' style='color: #ffffff;'></i></button>
                        ";
                        echo "
                        <button class='logout-btn' onclick=\"window.location.href=('includes/logout.inc.php')\">Log ud<i style='color: #f5f8f2;'></i></button>
                        "; 
                    }
                    else {
                        echo "
                        <button class='signup-btn' onclick=\"window.location.href=('signup.php')\">Registrer<i style='color: #ffffff;'></i></button>
                        ";
                        echo "
                        <button class='login-btn' onclick=\"window.location.href=('login.php')\">Log ind<i style='color: #f5f8f2;'></i></button>
                        ";
                    }
                ?>
            </ul>
        </div>
    </div>

    <div class="navbar-container">
        <div class="center-nav">
            <ul>
                <li><a href="products.php">Produkter</a></li>
                <li><a href="about.php">Om os</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </div>
        
        <?php
            if (isset($_SESSION["usersemail"])) {
                echo "<div class='basket'>
                <a href='#'><i class='fa-solid fa-basket-shopping fa-2xl' style='color: #2b3d25;'></i></a>
                </div>";
            }
        ?>
    </div>