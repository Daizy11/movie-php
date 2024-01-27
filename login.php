<section class="login">
    <section class="form">
            <form action="" method="post" action="" enctype="multipart/form-data" class="input-wrapper" >
                <section class="input-title">
                        <p>Login</p>
                </section>
                <label for="" style="text-align: left;">Username</label>
                <section class="input">
                    <input type="text" name="username" placeholder="John Doe">
                </section>
                <label for="" style="text-align: left;">Password</label>
                <section class="input">
                    <input type="password" name="password" placeholder="*****">
                </section>
                <section class="btn-wrapper"> 
                    <input class="button-login" value="Login" name="login" type="submit">
                    <a href="<?php echo "?p=signup";?>" class="a-signup">Dont have an account?</a>
                </section>
            </form>
    </section>
</section>
<?php
	if (!empty($_POST)) {
		if($_POST["login"]){
			$sqla = mysqli_query($conn, "select * from user where username='$_POST[username]' and password='$_POST[password]'");
			$ra = mysqli_fetch_array($sqla);
			$row = mysqli_num_rows($sqla);
			if($row > 0){
				session_start();
				$_SESSION["useradm"]=$ra["username"];
				$_SESSION["passadm"]=$ra["password"];
				echo "<div align='center'>Login Berhasil</div>";		
			}else{
				echo "<div align='center'>Login Gagal</div>";
			}
			echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=home'>";
		}
	}
?>