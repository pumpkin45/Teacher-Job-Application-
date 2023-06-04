<?php

session_start();

include "inc/dbconn.php";
include "inc/header.php";
include "inc/nav_app.php";

$result = $_GET['success'];

if(isset($_POST['login'])){

	$id_admin = $_POST['id_admin']; 
	$passwd = $_POST['passwd']; 

	$check = "SELECT * FROM admin WHERE id_admin = '$id_admin' AND passwd = '$passwd'";
	$run = mysqli_query($db, $check);

	$row = mysqli_fetch_assoc($run);//trace result dlm db
	$result = "";

	if (is_array($row) && !empty($row)){

		$_SESSION['id_admin'] = $row['id_admin'];
		header('location: spemohon.php');

	} else {
		$result = '<div class="alert alert-danger" role="alert">Id number or password incorrect!</div>';
	}

}

?>
	<div id="container">

		<div class="container">
			<form class="form-horizontal" name="login" method="post" action="">
				<fieldset>
					<h2>Log Masuk</h2>
					<!-- <?php echo $_SESSION['result'];?>
				<?php echo $_SESSION['id_admin'];?> -->
					<div class="form-group">
						<label for="inputNama" class="col-lg-2 control-label">Nombor ID</label>
						<div class="col-lg-6">
							<input required type="text" name="id_admin" class="form-control" id="inputNama" placeholder="cth: 0XX">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-lg-2 control-label">Kata Laluan</label>
						<div class="col-lg-6">
							<input required type="password" name="passwd" class="form-control" id="inputPassword" placeholder="Kata Laluan">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Ingat Saya
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="reset" class="btn btn-default">Batal</button>
							<button type="submit" name="login" class="btn btn-primary">Hantar</button>
						</div>
					</div>
				</fieldset>
			</form>
			<?php echo $result;?>
		</div>
	</div>

	<!-- <?php include "inc/footer.php"; ?> -->