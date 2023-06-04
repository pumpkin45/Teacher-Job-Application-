<?php

session_start();

if(!isset($_SESSION['id_admin'])){

  header('location: login_app.php');
}

// $nama = $_SESSION['user'];

$id = $_GET['id'];

include "inc/dbconn.php";            
$view = "SELECT * FROM permohonan WHERE nama = '$id' "; 
$run = mysqli_query($db, $view);// execute $update code
$row = mysqli_fetch_assoc($run);//trace result dlm db
 
$result = "";

if(isset($_POST['status'])){

	$status = $_POST['status'];
	switch ($status){
		case 'Diterima':
			$update = "UPDATE permohonan SET status_admin='$status' WHERE nama='$id'";
			mysqli_query($db, $update);
			header('location: calendar.php?name='.$id); // this code will redirect to calendar.php with variable name=$id, where $id equal to name of permohon ex "calendar.php?name=hanani"
			break;
		case 'Ditolak':
			$update = "UPDATE permohonan SET status_admin='$status' WHERE nama='$id'";
			mysqli_query($db, $update);			
			header('location: spemohon.php');
			break;
	}
}

include "inc/header.php";
include "inc/nav_app.php"; 
?>
	<div id="wrapper">

		<div class="content">

			<div class="col-md-10">

				<h2>Maklumat Pemohon</h2>
				<table class="table table-bordered table-hover">
					<tbody>
						<h4>Butir-Butir Peribadi</h4>
						<tr>
							<th width="30%">Nama :</th>
							<td>
								<?php echo $row['nama']?>
							</td>
						</tr>
						<tr>
							<th>No. Kad Pengenalan : </th>
							<td>
								<?php echo $row['no_kp']?>
							</td>
						</tr>
						<tr>
							<th>Tarikh Lahir : </th>
							<td>
								<?php echo $row['tarikhlahir']?>
							</td>
						</tr>
						<tr>
							<th>Warganegara : </th>
							<td>
								<?php echo $row['warganegara']?>
							</td>
						</tr>
						<tr>
							<th>Alamat Surat Menyurat : </th>
							<td>
								<?php echo $row['alamat']?>
							</td>
						</tr>
						<tr>
							<th>Ambilan/Sesi Permohonan : </th>
							<td>
								<?php echo $row['ambilan']?>
							</td>
						</tr>
						<tr>
							<th>Nombor Telefon : </th>
							<td>
								<?php echo $row['notel']?>
							</td>
						</tr>
						<tr>
							<th>Jantina : </th>
							<td>
								<?php echo $row['jantina']?>
							</td>
						</tr>
						<tr>
							<th>Status : </th>
							<td>
								<?php echo $row['statusx']?>
							</td>
						</tr>
						<tr>
							<th>Keturunan : </th>
							<td>
								<?php echo $row['keturunan']?>
							</td>
						</tr>
						<tr>
							<th>Agama : </th>
							<td>
								<?php echo $row['agama']?>
							</td>
						</tr>
						<tr>
							<th>Tempat Lahir : </th>
							<td>
								<?php echo $row['tempatlahir']?>
							</td>
						</tr>
						<tr>
							<th>Tinggi : </th>
							<td>
								<?php echo $row['tinggi']?>
							</td>
						</tr>
						<tr>
							<th>Berat : </th>
							<td>
								<?php echo $row['berat']?>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<tbody>
						<h4>Keluarga</h4>
						<tr>
							<th width="30%">Nama : </th>
							<td>
								<?php echo $row['nama_keluarga']?>
							</td>
						</tr>
						<tr>
							<th>Pangkat : </th>
							<td>
								<?php echo $row['pangkat']?>
							</td>
						</tr>
						<tr>
							<th>Alamat : </th>
							<td>
								<?php echo $row['alamat_keluarga']?>
							</td>
						</tr>
						<tr>
							<th>Tempat Lahir : </th>
							<td>
								<?php echo $row['tempatlahir_keluarga']?>
							</td>
						</tr>
						<tr>
							<th>Pekerjaan : </th>
							<td>
								<?php echo $row['pekerjaan']?>
							</td>
						</tr>
						<tr>
							<th>Nama Kerja : </th>
							<td>
								<?php echo $row['namakerja']?>
							</td>
						</tr>
						<tr>
							<th>Alamat Tempat Kerja : </th>
							<td>
								<?php echo $row['alamatkerja']?>
							</td>
						</tr>

					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<tbody>
						<h4>Kelulusan</h4>
						<tr>
							<th width="30%">Tahun Peperiksaan, SPM : </th>
							<td>
								<?php echo $row['tahun_spm']?>
							</td>
						</tr>
						<tr>
							<th>Keputusan,SPM : </th>
							<td>
								<?php echo $row['keputusan_spm']?>
							</td>
						</tr>
						<tr>
							<th>Nama Sekolah : </th>
							<td>
								<?php echo $row['namasek_spm']?>
							</td>
						</tr>
						<tr>
							<th>Tahun, Diploma : </th>
							<td>
								<?php echo $row['tahun_dip']?>
							</td>
						</tr>
						<tr>
							<th>CGPA : </th>
							<td>
								<?php echo $row['cgpa_dip']?>
							</td>
						</tr>
						<tr>
							<th>Bidang Pengajian : </th>
							<td>
								<?php echo $row['bidang_dip']?>
							</td>
						</tr>
						<tr>
							<th>Universiti/ Kolej : </th>
							<td>
								<?php echo $row['universiti_dip']?>
							</td>
						</tr>
						<tr>
							<th>Tahun, Tertinggi : </th>
							<td>
								<?php echo $row['tahun_tinggi']?>
							</td>
						</tr>
						<tr>
							<th>CGPA : </th>
							<td>
								<?php echo $row['cgpa_tinggi']?>
							</td>
						</tr>
						<tr>
							<th>Bidang Pengajian : </th>
							<td>
								<?php echo $row['bidang_tinggi']?>
							</td>
						</tr>
						<tr>
							<th>Universiti/ Kolej : </th>
							<td>
								<?php echo $row['universiti_tinggi']?>
							</td>
						</tr>
						<tr>
							<th>Nama Sukan/Pertubuhan : </th>
							<td>
								<?php echo $row['nama_sukan']?>
							</td>
						</tr>
						<tr>
							<th>Jawatan : </th>
							<td>
								<?php echo $row['jawatan']?>
							</td>
						</tr>
						<tr>
							<th>Pencapaian Tertinggi : </th>
							<td>
								<?php echo $row['pencapaian']?>
							</td>
						</tr>
						<tr>
							<th>Tempoh : </th>
							<td>
								<?php echo $row['tempoh']?>
							</td>
						</tr>
						<tr>
							<th>Pengakuan : </th>
							<td>
								<?php echo $row['syarat']?>
							</td>
						</tr>
						<tr>
							<th>Status : </th>
							<td>
								<form class="form-inline" action="" method="POST">
									<button class="btn btn-success" name="status" value="Diterima">
									Diterima
										<span class="glyphicon glyphicon-ok"></span>
									</button>
									<button class="btn btn-danger" name="status" value="Ditolak">
										Ditolak
										<span class="glyphicon glyphicon-remove"></span>
									</button>
								</form>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>