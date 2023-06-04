<?php

session_start();

if(!isset($_SESSION['id_admin'])){

  header('location: login_app.php');
}

$nama = $_SESSION['user'];

$id = $_GET['id'];
include "inc/dbconn.php";			
$view = "SELECT * FROM admin WHERE username = '$nama' "; 
$run = mysqli_query($db, $view);// execute $update code
$row = mysqli_fetch_assoc($run);//trace result dlm db
 
  $result = "";

include "inc/header.php";
include "inc/nav.php"; 
?>
	<div id="container">

		<h2>Pemberitahuan</h2>
		<hr>
		<p>Tahniah, anda telah layak untuk menghadiri temuduga pada
			<?php echo $row['iv_date']?>
		</p>
		<p>Sila bawa bersama jika tidak anda tidak akan dilayan</p>
	</div>
	</div>
	<!-- <?php include "inc/footer.php"; ?> -->

	<!-- start <body> section  -->
	<!-- letak content utk display dekat user  -->
	<!-- end </body> section  -->