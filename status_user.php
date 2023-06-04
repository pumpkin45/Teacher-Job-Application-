<?php

session_start();

if(!isset($_SESSION['user'])){

  header('location: index.php');
}
$nama = $_SESSION['user'];

include "inc/dbconn.php";			
$status = "SELECT * FROM permohonan WHERE username = '$nama'"; 
$run = mysqli_query($db, $status);// execute $update code
$row = mysqli_fetch_assoc($run);//trace result dlm db

include "inc/header.php";
include "inc/nav.php"; 
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
						<th>Status</th>
						<td>
							<?php echo $row['status_admin']?>
						</td>
					</tr>
					<tr>
						<th>Tarikh Temuduga</th>
						<td>
							<?php echo $row['iv_date']?>
						</td>
					</tr>
				</tbody>
			</table>
			<!-- <div id="container"> -->
			<!-- <div id="wrapper"> -->
			<div class="row">
				<div class="col-lg-12">
            <div class="alert alert-warning">
            <strong>Peringatan!</strong>
			<p>Sila lampirkan sijil-sijil berkaitan pada hari temuduga bagi mengelakkan sebarang kesulitan terjadi</p>
			</div>
			</div>
			 </div>
            </div>
			</div>
		</div>
	</div>

	<!-- start <body> section  -->
	<!-- letak content utk display dekat user  -->
	<!-- end </body> section  -->

	<!-- <?php include "inc/footer.php"; ?> -->