<?php
include_once 'webmenu.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header style="color: black;">
        <div class="logo">
            <img style="width: 100px; border-radius: 50px; " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKPCRBKQnYX67ZBxgwxpBcNh1BpHCjVoOl5g&s" alt="gambar coffe shop">
        </div>
        <nav>
            <div class="navbar">
                <?php
                //looping foreach dari webmenu.php
                foreach ($menu_atas as $key => $value) {
                    echo "<a href='index.php?hal=$key'>$value </a> | ";
                }
                ?>
            </div>
        </nav>
    </header>