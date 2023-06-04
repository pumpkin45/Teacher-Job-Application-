<?php

session_start();

if(!isset($_SESSION['id_admin'])){

  header('location: login_app.php');
}
// $username = $_SESSION['id']; // This code return null (no value)
$permohon = $_GET['name']; // $_GET['name'] value we get it from previous page. from page view_admin.php line 28

// ========================= try checking value of variable in browser
// echo $permohon . " = permohon"; // return nama permohon
// echo "</br>";
// echo $username . " = username"; // check in browser , value of $username return nothing
// ====================================================================

include "inc/dbconn.php";			
$status = "SELECT * FROM permohonan WHERE nama = '$permohon'"; // since $username dont have any value, this sql query run with no result match 
$run = mysqli_query($db, $status);// execute $update code
$row = mysqli_fetch_assoc($run);//trace result dlm db

if(isset($_POST['hantar'])) {// user insert input(true)

  $iv_date=$_POST['iv_date'];

   $register = "UPDATE permohonan SET iv_date = '$iv_date' WHERE nama = '$permohon' ";

    if (mysqli_query($db, $register)){
	  
		header('location: print.php?name='.$permohon);
	
   } else{
	echo $register;
    $result = '<div class="alert alert-danger" role="alert">Went Wrong!</div>';
  }

}

include "inc/header.php";
include "inc/nav_app.php"; 
?>
	<div id="wrapper">

		<div class="content">

			<h2>Status</h2>
			<table class="table table-bordered table-hover">
				<tbody>
					<tr>
						<th>Nama</th>
						<td>
							<?php echo $row['nama']?>
						</td>
					</tr>
					<tr>
						<th>Ambilan/Sesi Pemohonan</th>
						<td>
							<?php echo $row['ambilan']?>
						</td>
					</tr>
					<tr>
						<th>Tarikh Temuduga</th>
						<td>
							<div class="col-md-9" name="maincontent" id="maincontent">
								<form class="form" role="form" name="" action="" method="POST">
									<input class="form-control" name="iv_date" type="date" placeholder="">
									<br>
									<input class="btn btn-embosed btn-info" type="submit" value="Hantar" name="hantar">
								</form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- <?php include "inc/footer.php"; ?> -->