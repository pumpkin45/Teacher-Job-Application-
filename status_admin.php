<?php

session_start();

include "inc/dbconn.php";

if(!isset($_SESSION['id_admin'])){

  header('location: login_app.php');
}

$result = "";

if(isset($_POST['hantar'])) {// user insert input(true)

 
 $id = $_GET['id'];		
$view = "SELECT * FROM permohonan WHERE nama = '$id' "; 
$run = mysqli_query($db, $view);// execute $update code
$row = mysqli_fetch_assoc($run);//trace result dlm db
 	$status_admin=$_POST['status'];

  $username = $row['username'];

   $register = "UPDATE permohonan SET status_admin = '$status_admin' WHERE nama = '$id'";


   if (mysqli_query($db, $register)){

    $result = '<div class="alert alert-success" role="alert">Status telah berjaya</div>';
    echo $view;
    echo $register;
    header('location: calendar.php');
	
  } else{

	echo $register;
    $result = '<div class="alert alert-danger" role="alert">Went Wrong!</div>';
  }

}
include "inc/header.php";
include "inc/nav_app.php"; 
?>

	<div id="container">
		<div id="wrapper">
			<div class="content">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">

							<div class="col-md-9" name="maincontent" id="maincontent">
								<?php echo $result ?>
								<h3>Tetapan Status</h3>
								<br>
								<form class="form" role="form" name="" action="" method="POST">

									Status:
									<br>
									<input type="radio" name="status" value="Layak"> Layak
									<br>
									<input type="radio" name="status" value="Tidak Layak"> Tidak Layak
									<br>
									<br>
									<input class="btn btn-embosed btn-info" type="submit" value="Hantar" name="hantar">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <?php include "inc/footer.php"; ?> -->