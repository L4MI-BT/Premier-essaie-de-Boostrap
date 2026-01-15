<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $title ?></title>
</head>
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="bandeau">
        <nav class="d-flex flex-row container align-middle">
            <div class="m-3">
                <img src="./asset/img/exacom.png" alt="logo-exacom" class="logo-exacom">
            </div>
            <ul class="nav nav-underline mt-2 ms-3">
                <li class="nav-item">
                    <a class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?>" 
                       <?= $current_page == 'index.php' ? 'aria-current="page"' : '' ?> 
                       href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page == 'presentation.php' ? 'active' : '' ?>" 
                       <?= $current_page == 'presentation.php' ? 'aria-current="page"' : '' ?> 
                       href="presentation.php">Présentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page == 'galerie.php' ? 'active' : '' ?>" 
                       <?= $current_page == 'galerie.php' ? 'aria-current="page"' : '' ?> 
                       href="galerie.php">Galerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $current_page == 'contact.php' ? 'active' : '' ?>" 
                       <?= $current_page == 'contact.php' ? 'aria-current="page"' : '' ?> 
                       href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>