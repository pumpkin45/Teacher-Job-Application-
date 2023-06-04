<?php

include "inc/dbconn.php";
include "inc/header.php";
include "inc/nav_app.php";

if(isset($_POST['submit'])) {
  $id_admin = $_POST['id_admin'];
  $nama_admin = $_POST['nama_admin'];
  $passwd = $_POST['passwd'];

  $register = "INSERT INTO admin(id_admin,nama_admin,passwd) VALUES('$id_admin','$nama_admin','$passwd')";

  if (mysqli_query($db, $register)){
	  
	$result = '<div class="alert alert-success" role="alert">Tahniah! '.$id_admin.' anda sudah mendaftar, Sila log masuk</div>';
	header('location: login_app.php?success='. $result );
	
	} else {
		
		echo $register;
		$result = '<div class="alert alert-danger" role="alert">'.$id_admin.' already exist!</div>';
	  
	}

}
?>

	<div class="container">
		<!-- <?php echo $result;?> -->
		<form class="form-horizontal" name="signup" method="post" action="">
			<fieldset>
				<h2>Daftar Masuk</h2>
				<div class="form-group">
					<label for="inputNama" class="col-lg-2 control-label">Nombor ID</label>
					<div class="col-lg-6">
						<input required name="id_admin" type="text" class="form-control" id="inputNama" placeholder="cth: 0XX">
					</div>
				</div>

				<div class="form-group">
					<label for="inputfon" class="col-lg-2 control-label">Nama</label>
					<div class="col-lg-6">
						<input required name="nama_admin" type="text" class="form-control" id="inputfon" placeholder="cth: Hanani">
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="col-lg-2 control-label">Kata Laluan</label>
					<div class="col-lg-6">
						<input required name="passwd" type="password" class="form-control" id="inputPassword" placeholder="Kata Laluan">
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

	<!-- <?php include "inc/footer.php"; ?> -->