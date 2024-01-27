<header class="navbar" >
    <a href="<?php echo "?p=home";?>"><h1 class="title">Echo Film</h1></a>
    <section class="navbar-1">
        <a href="<?php echo "?p=home";?>">Home</a>
        <a href="<?php echo "?p=watchlist";?>">Watch List</a>
        <a class="btn-login" href="<?php echo "?p=login";?>">Login</a>
    </section>
</header>
<section class="watchlist">
    <article class="watchlist-title">
        <p>Watchlist</p>
    </article>
    <section class="card-container">
            <?php
            $sql = mysqli_query($conn,"select * from watchlist");
            
            while ($row = mysqli_fetch_assoc($sql)) {
                if ($row['thumbnail'] === null) {
                    echo "<p style='text-align:center;font-size:30px;'>Data Empty</p>";
                }
                // Output each row in HTML format
                echo "<section class='card-wrapper'>
                        <section class='card-upper'>
                            <img src='" . $row['thumbnail'] . "' alt='' class='thumbnail-photo'>
                        </section>
                        <section class='card-down'>
                            <a href='' class='watch-now'>Watch Now</a>
                            <button class='watch-list'>Delete</button>
                        </section>
                    </section>";
            }
            
            // Reset the result set pointer to the beginning (if needed)
            mysqli_data_seek($sql, 0);
            
            // Retrieve all rows from the result set and encode them as JSON
            $rows = array();
            while ($row = mysqli_fetch_assoc($sql)) {
                $rows[] = $row;
            }
            // echo json_encode($rows);
            ?>
                
    </section>
</section>
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
