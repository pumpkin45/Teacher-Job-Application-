<?php

include "inc/dbconn.php";
include "inc/header.php";
include "inc/nav.php";

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $phone = $_POST['phone_number'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $register = "INSERT INTO user(username,nofon,email,passwd) VALUES('$username','$phone','$email','$password')";

  if (mysqli_query($db, $register)){

    $result = '<div class="alert alert-success" role="alert">Tahniah! '.$username.' anda sudah mendaftar, Sila log masuk</div>';
     header('location: login.php?success='. $result );

  } else{

    $result = '<div class="alert alert-danger" role="alert">username already exist!</div>';
  }

}

?>
	<div id="container">

		<div class="container">
			<?php echo $result;?>
			<form class="form-horizontal" name="signup" method="post" action="">
				<fieldset>
					<h2>Daftar Masuk</h2>
					<div class="form-group">
						<label for="inputNama" class="col-lg-2 control-label">Nama</label>
						<div class="col-lg-6">
							<input required name="username" type="text" class="form-control" id="inputNama" placeholder="cth: Hanani">
						</div>
					</div>

					<div class="form-group">
						<label for="inputfon" class="col-lg-2 control-label">Nombor Telefon</label>
						<div class="col-lg-6">
							<input required name="phone_number" type="number" class="form-control" id="inputfon" placeholder="cth: xxx-xxxxxxx">
						</div>
					</div>

					<div class="form-group">
						<label for="inputemail" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-6">
							<input required name="email" type="email" class="form-control" id="inputemail" placeholder="cth: Hanani@gmail.com">
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassword" class="col-lg-2 control-label">Kata Laluan</label>
						<div class="col-lg-6">
							<input required name="password" type="password" class="form-control" id="inputPassword" placeholder="Kata Laluan">
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="reset" class="btn btn-default">Batal</button>
							<button name="submit" type="submit" class="btn btn-primary">Daftar Masuk</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>

	</div>
	<!-- <?php include "inc/footer.php"; ?> -->