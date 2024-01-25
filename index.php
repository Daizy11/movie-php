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
        <header class="navbar" >
            <h1 class="title">Echo Film</h1>
            <section class="navbar-1">
                <a href="<?php echo "?p=home";?>">Home</a>
                <a href="<?php echo "?p=movie";?>">Movie</a>
                <a href="<?php echo "?p=watchlist";?>">Watch List</a>
             <button class="btn-login">Login</button>
            </section>
        </header>
       
        <?php

       if($_GET["p"] == "watchlist"){
            include "watchlist.php";
        }
        else if($_GET["p"] == "movie"){
            include "movie.php";
        }else{
            include "home.php";
        }
        ?>
          <footer class="footer">
            <section class="footer-content">
                <img src="https://qwestore.com/png_images_min/10/bFacebook-logob-bBlack-iconb-FB-icon-7841.png" alt="" class="facebook-logo">
                <img src="gambar/5282544_camera_instagram_social media_social network_instagram logo_icon.png" alt="" class="instagram-logo"  >
                <img src="https://static.designboom.com/wp-content/uploads/2023/07/twitter-logo-change-x-elon-musk-designboom-01.jpg" alt="" class="x-logo">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8dea8d27-a9ef-4484-9c20-51f212ebe10f/dd65tbb-545c4f6d-1c6a-4b6f-a19e-499d41142d7d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzhkZWE4ZDI3LWE5ZWYtNDQ4NC05YzIwLTUxZjIxMmViZTEwZlwvZGQ2NXRiYi01NDVjNGY2ZC0xYzZhLTRiNmYtYTE5ZS00OTlkNDExNDJkN2QucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.UDmSajghmsdnZgTrAwZoVpIBOmiiJS5tSn3mK8S584Y" alt="" class="youtube-logo">
            </section>
            <section class="footer-desc">
                <p>Help</p>
                <p>Echo Pro</p>
                <p>Echo Developer</p>
                <p>Advertising</p>
                <p>Jobs</p>
            </section>
            <section class="footer-desc">
                <p>Privacy Policy</p>
                <p>Condition of Use</p>
                <p>Ads</p>
                <p>Help</p>
            </section>
            <section class="footer-desc">
                <p>@1990-2024 by Echo.com, Inc.</p>
            </section>
        </footer>
</body>
</html>