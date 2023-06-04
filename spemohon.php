<?php 

session_start();

include "inc/dbconn.php";

if(!isset($_SESSION['id_admin'])){

  header('location: login_app.php');
}
include "inc/header.php";
include "inc/nav_app.php";
?>

<div id="wrapper">
	<div class="col-md-12" name="maincontent" id="maincontent">
		<h2>Senarai Pemohon</h2>
		<h4>Carian</h4>
		<form class="form-inline" role="form" name="pemohon" action="" method="POST">

			<input class="form-control" name="pemohon" type="text" placeholder="cth: Hanani">
			<input class="btn btn-embosed btn-primary" type="submit" value="Cari">

		</form>
		<hr>
		<?php
			//listing all record in database
		    $searchkey=$_POST['pemohon'];
			$sql="SELECT nama,ambilan,status_admin FROM permohonan
			WHERE nama LIKE '%$searchkey%' OR ambilan LIKE '%$searchkey%' OR status_admin LIKE '%$searchkey%'";
			//run sql query
			$qr=mysqli_query($db,$sql);
			//if data not found
			if(mysqli_num_rows($qr)==0){
			   echo "Carian tidak dijumpai";
			}
			//if data found
			else{
			   echo "Carian berjaya untuk $searchkey";
			
		?>

			<table width="90%" class='table table-hover table-bordered'>
				<tr align="center">
					<td width="20%">Nama</td>
					<td width="20%">Ambilan</td>
					<td width="20%">Status</td>
					<div class="input-group">
					</div>
				</tr>

				<?php
			//fetch data from database
		    while($rekod=mysqli_fetch_array($qr)){
	
			    $id=$rekod['nama'];
			    $url="view_admin.php?id=".$id;
				echo "<td><a href='$url'>".$rekod['nama']."</a></td>";
				echo "<td>".$rekod['ambilan']."</td>";
				echo "<td>".$rekod['status_admin']."</td>";
				
				echo"</tr>";
			}
		}
		
		?>
			</table>	
	</div>
</div>