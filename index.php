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
if (isset($_GET["p"])) {
    $page = $_GET["p"];

    if ($page == "movie") {
        include "movie.php";
    } else if ($page == "watchlist") {
        include "watchlist.php";
    } else if ($page == "login") {
        include "login.php";
    } else if($page =="signup"){
        include "signup.php";
    }else {
        include "home.php";
    }
} else {
    include "home.php";
}
?>
</body>
</html>