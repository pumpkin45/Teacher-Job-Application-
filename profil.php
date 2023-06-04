<?php

session_start();

if(!isset($_SESSION['id_admin'])){

  header('location: login_app.php');
}
$nama = $_SESSION['id_admin'];

include "inc/dbconn.php";			
$view = "SELECT * FROM admin WHERE id_admin = '$nama' "; 
$run = mysqli_query($db, $view);// execute $update code
$row = mysqli_fetch_assoc($run);//trace result dlm db
 
  $result = "";

include "inc/header.php";
include "inc/nav_app.php"; 
?>
	<div id="wrapper">

		<div class="content">

			<div class="col-md-10">

				<h2>Profil</h2>
				<table class="table table-bordered table-hover">
					<tbody>
						
						<tr>
							<th width="30%">Nombor ID :</th>
							<td>
								<?php echo $row['id_admin']?>
							</td>
						</tr>
						<tr>
							<th>Nama : </th>
							<td>
								<?php echo $row['nama_admin']?>
							</td>
						</tr>
						
					</tbody>
				</table>

			</div>
		</div>