<?php

session_start();

include "inc/dbconn.php";
include "inc/header.php";
include "inc/nav.php";

$result = $_GET['success'];

if(isset($_POST['login'])){

  $user = $_POST['username']; 
  $pass = $_POST['password']; 

  $check = "SELECT * FROM user WHERE username = '$user' AND passwd = '$pass'";
  $run = mysqli_query($db, $check);
  $row = mysqli_fetch_assoc($run);//trace result dlm db
  $result = "";
  
  if (is_array($row) && !empty($row)){
	  
	  $_SESSION['user'] = $row['username'];
	  $validate = "SELECT * FROM permohonan WHERE username = '$user'";
	  $runValidate = mysqli_query($db, $validate);
	  $rowValidate = mysqli_fetch_assoc($runValidate);

	if(isset($rowValidate['no_kp'])){
			header('location: plepas.php')  ;

		}else{
			header('location: peribadi.php')  ;
		}

  } else {
    $result = '<div class="alert alert-danger" role="alert">Username or password incorrect!</div>';
  }

}
?>
	<div id="container">
		<div class="headline1">

		<div class="container" style="padding: 80px 0px">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Log Masuk</h3>
						</div>
						<div class="panel-body">
							<?php echo $result;?>
							<form class="form-horizontal" name="login" method="post" action="">
								<fieldset>
									<div class="form-group">
										<div class="col-lg-12">
											<label for="inputNama" class="control-label">Nama</label>
											<input required type="text" name="username" class="form-control" id="inputNama" placeholder="cth: Hanani">
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-12">
											<label for="inputPassword" class="control-label">Kata Laluan</label>
											<input required type="password" name="password" class="form-control" id="inputPassword" placeholder="Kata Laluan">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-10">
											<button type="reset" class="btn btn-danger">Batal</button>
											<button type="submit" name="login" class="btn btn-success">Hantar</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			</fieldset>
			</form>
		</div>
	</div>
