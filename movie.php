<?php 
    $sqlag = mysqli_query($conn, "select * from movie where id='$_GET[id]'");
    $rpl = mysqli_fetch_array($sqlag);
    $sqlg =  mysqli_query($conn, "select genre from movie where id='$_GET[id]' ");
    $sqlm =  mysqli_query($conn, "select * from stars where judul='$rpl[judul]' order by judul");
    $sqlmf = mysqli_fetch_array($sqlm);
?>

<header class="navbar" >
    <a href="<?php echo "?p=home";?>"><h1 class="title">Echo Film</h1></a>
    <section class="navbar-1">
        <a href="<?php echo "?p=home";?>">Home</a>
        <a href="<?php echo "?p=watchlist";?>">Watch List</a>
        <a class="btn-login" href="<?php echo "?p=login";?>">Login</a>
    </section>
</header>
<section class="movie">
    <section class="movie-header">
        <p class="movie-title"><?php  echo"$rpl[judul]"?></p>
        <section class="movie-header-attribute-wrapper">
            <section class="movie-header-attribute">
                <p class="movie-header-title">Rating</p>
                <section class="rating">
                    <img src="gambar/Star.png" alt="" class="star-image">
                    <p><?php  echo"$rpl[rating]"?>/5</p>
                </section>
            </section>
            <section class="movie-header-attribute">
                <p class="movie-header-title">Popularity</p>
                <section class="popularity">
                    <img src="gambar/Line_up@3x.png" alt="" class="star-image">
                    <p><?php  echo"$rpl[popularity]"?></p>
                </section>
            </section>
        </section>
    </section>
    <section class="movie-content">
        <section class="thumbnail">
            <img src="<?php echo "$rpl[thumbnail]";?>" alt="" class="thumbnail-photo">
        </section>
        <section class="movie-video">
            <object data="<?php echo "$rpl[video]";?>" type="application/x-shockwave-flash" class="thumbnail-video"><param name="src" value="http://www.youtube.com/v/Ahg6qcgoay4"/></object>
        </section>
    </section>
    <section class="movie-genre">
        <?php 
            while ($rpg = mysqli_fetch_array($sqlg)){
                echo "<div class='genre'>$rpg[genre]</div>";
            }
        ?> 

    </section>
    <section class="movie-team">
        <section class="team">
            <p>Creator</p>
            <section class="team-name">
                <p><?php echo "$rpl[creator]";?></p>
            </section>
        </section>
        <section class="team" style="border-bottom: 1px solid white;">
            <p>Stars</p>
            <section class="team-name" style="transform: translateX(1rem);">
                <p>Maria Sten</p>
                <p>Alan RitchSton</p>
            </section>
        </section>
    </section>
</section>
<section class="cast">
    <article class="top-cast">
        <p>Top Cast</p>
    </article>
    <section class="star-wrapper">
        <?php 
        mysqli_data_seek($sqlm, 0);
            while ($sqlmf = mysqli_fetch_array($sqlm)){
                echo "
                <section class='star'>
                <img src='$sqlmf[image]' alt='' class='stars-image'>
                <section class='star-name'>
                    <p class='name-1'>$sqlmf[realname]</p>
                    <p class='name-2'>$sqlmf[pseudonym]</p>
                </section>
            </section>
                ";
            }
        ?>
       
       
    </section>
    <section class="story">
        <article class="storyline-title">
            <p>Storyline</p>
        </article>
        <article class="storyline">
            <p><?php echo "$rpl[storyline]";?></p>
        </article>
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
