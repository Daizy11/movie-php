<?php
  $sqlkl = mysqli_query($conn , "select * from movie ");
  ?>

<header class="navbar" >
    <a href="<?php echo "?p=home";?>"><h1 class="title">Echo Film</h1></a>
    <section class="navbar-1">
        <a href="<?php echo "?p=home";?>">Home</a>
        <a href="<?php echo "?p=watchlist";?>">Watch List</a>
             <a class="btn-login" href="<?php echo "?p=login";?>">Login</a>
            </section>
</header>
        <main class="content">
            <article class="featured-today">
                 <h5 class="featured-header">Featured Today</h5>
            </article>
            <script>
                function onClick(imageSrc) {
                    console.log("Image source:", imageSrc);

                    // Make AJAX request to PHP script
                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                console.log(xhr.responseText); // Log response from PHP
                            } else {
                                console.error('Request failed: ' + xhr.status);
                            }
                        }
                    };
                    xhr.open("POST", "insert_image.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.send("imageSrc=" + encodeURIComponent(imageSrc));
                    alert('Already added to watchlist!')
                }
            </script>
            <section class="card-container">
                <?php 
                while ($rkl = mysqli_fetch_array($sqlkl)) {
                    if (empty($rkl)){
                        echo "<p style='text-align:center;'> Data Empt</p>";
                    }
                    echo "<section class='card-wrapper'>
                            <section class='card-upper'>
                                <img src='$rkl[thumbnail]' alt='' class='thumbnail-photo'>
                            </section>
                            <section class='card-down'>
                                <a href='?p=movie&id=$rkl[id]' class='watch-now'>Watch Now</a>
                                <button class='watch-list' onClick='onClick(\"$rkl[thumbnail]\")'>
                                    +Watch List
                                </button>
                            </section>
                        </section>";
                }
                mysqli_data_seek($sqlkl, 0);
                ?>
            </section>
            <article class="top-10-wrapper">
                 <h5 class="top-10">Top 10 on this week </h5>
            </article>
            <section class="card-container">
            <?php 
                while ($rkl = mysqli_fetch_array($sqlkl)) {
                    echo "<section class='card-wrapper'>
                            <section class='card-upper'>
                            <img src='$rkl[thumbnail]' alt='' class='thumbnail-photo'>

                            </section>
                            <section class='card-down'>
                                <a href='?p=movie&id=$rkl[id]' class='watch-now'>Watch Now</a>
                                <button class='watch-list'  onclick='logImageSrc(\"$rkl[thumbnail]\")'>
                                +Watch List
                                </button>
                            </section>
                        </section>";
                }
            ?>

          
            </section>
        </main>
              
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
      