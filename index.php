<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
        <?php
       if($_GET["p"] == "watchlist"){
            include "watchlist.php";
        }
        else if($_GET["p"] == "movie"){
            include "movie.php";
        }
        else if($_GET["p"] == "login"){
            include "login.php";
        }else{
            include "home.php";
        }
        ?>
</body>
</html>