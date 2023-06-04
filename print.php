<?php

require_once __DIR__ . '/vendor/autoload.php';//utk gne function mPDF();

$id = $_GET['name'];

$mpdf = new mPDF();//dri folder mPDF

include "inc/dbconn.php";			
$view = "SELECT * FROM permohonan WHERE nama = '$id' "; 
$run = mysqli_query($db, $view);// execute $update code
$row = mysqli_fetch_assoc($run);//trace result dlm db
  $result = "";

  if(isset($_POST['print'])) {
	$html = '
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<style>
				td{
					padding: 10px;
				}

				th,td{
					border: 1px solid black;
					border-collapse: collapse;
				}

				table{
					border: 1px solid black;
					border-collapse: collapse;
				}

				td{
					width:500px;
				}
			</style>
			<title>'.$row['nama'].'</title>
		</head>
		<body>
			
		<div class="content">
	
				<img src="img/kemas2.png" height="80" width="180">
				<h4><b>BORANG PERMOHONAN MENGIKUTI
					KURSUS PENDIDIKAN AWAL KANAK-KANAK
					TABIKA/TASKA</b></h4>
					<h5><u>JABATAN KEMAJUAN MASYARAKAT (KEMAS) MALAYSIA</u></h5>
				<h2>Maklumat Pemohon</h2>
				<h4>Butir-Butir Peribadi</h4>
				<table class="table table-bordered table-hover">
					<tbody>
						<tr>
							<th width="200px">Nama</th>
							<td>
								'. $row['nama'].'
							</td>
						</tr>
						<tr>
							<th>No. Kad Pengenalan</th>
							<td>
								'. $row['no_kp'].'
							</td>
						</tr>
						<tr>
							<th>Tarikh Lahir</th>
							<td>
								'. $row['tarikhlahir'].'
							</td>
						</tr>
						<tr>
							<th>Warganegara</th>
							<td>
								'. $row['warganegara'].'
							</td>
						</tr>
						<tr>
							<th>Alamat Surat Menyurat</th>
							<td>
								'. $row['alamat'].'
							</td>
						</tr>
						<tr>
							<th>Ambilan/Sesi Permohonan</th>
							<td>
								'. $row['ambilan'].'
							</td>
						</tr>
						<tr>
							<th>Nombor Telefon</th>
							<td>
								'. $row['notel'].'
							</td>
						</tr>
						<tr>
							<th>Jantina</th>
							<td>
								'. $row['jantina'].'
							</td>
						</tr>
						<tr>
							<th>Status</th>
							<td>
								'. $row['statusx'].'
							</td>
						</tr>
						<tr>
							<th>Keturunan</th>
							<td>
								'. $row['keturunan'].'
							</td>
						</tr>
						<tr>
							<th>Agama</th>
							<td>
								'. $row['agama'].'
							</td>
						</tr>
						<tr>
							<th>Tempat Lahir</th>
							<td>
								'. $row['tempatlahir'].'
							</td>
						</tr>
						<tr>
							<th>Tinggi</th>
							<td>
								'. $row['tinggi'].'
							</td>
						</tr>
						<tr>
							<th>Berat</th>
							<td>
								'. $row['berat'].'
							</td>
						</tr>
					</tbody>
				</table>
				<h4>Keluarga</h4>
				<table class="table table-bordered table-hover">
					<tbody>
						<tr>
						<th width="200px">Nama</th>
							<td>
								'. $row['nama_keluarga'].'
							</td>
						</tr>
						<tr>
							<th>Pangkat</th>
							<td>
								'. $row['pangkat'].'
							</td>
						</tr>
						<tr>
							<th>Alamat</th>
							<td>
								'. $row['alamat_keluarga'].'
							</td>
						</tr>
						<tr>
							<th>Tempat Lahir</th>
							<td>
								'. $row['tempatlahir_keluarga'].'
							</td>
						</tr>
						<tr>
							<th>Pekerjaan</th>
							<td>
								'. $row['pekerjaan'].'
							</td>
						</tr>
						<tr>
							<th>Nama Kerja</th>
							<td>
								'. $row['namakerja'].'
							</td>
						</tr>
						<tr>
							<th>Alamat Tempat Kerja</th>
							<td>
								'. $row['alamatkerja'].'
							</td>
						</tr>
	
					</tbody>
				</table>
				<h4>Kelulusan</h4>
				<table class="table table-bordered table-hover">
					<tbody>
						<tr>
						<th width="200px">Tahun Peperiksaan, SPM</th>
							<td>
								'. $row['tahun_spm'].'
							</td>
						</tr>
						<tr>
							<th>Keputusan,SPM</th>
							<td>
								'. $row['keputusan_spm'].'
							</td>
						</tr>
						<tr>
							<th>Nama Sekolah</th>
							<td>
								'. $row['namasek_spm'].'
							</td>
						</tr>
						<tr>
							<th>Tahun, Diploma</th>
							<td>
								'. $row['tahun_dip'].'
							</td>
						</tr>
						<tr>
							<th>CGPA</th>
							<td>
								'. $row['cgpa_dip'].'
							</td>
						</tr>
						<tr>
							<th>Bidang Pengajian</th>
							<td>
								'. $row['bidang_dip'].'
							</td>
						</tr>
						<tr>
							<th>Universiti/ Kolej</th>
							<td>
								'. $row['universiti_dip'].'
							</td>
						</tr>
						<tr>
							<th>Tahun, Tertinggi</th>
							<td>
								'. $row['tahun_tinggi'].'
							</td>
						</tr>
						<tr>
							<th>CGPA</th>
							<td>
								'. $row['cgpa_tinggi'].'
							</td>
						</tr>
						<tr>
							<th>Bidang Pengajian</th>
							<td>
								'. $row['bidang_tinggi'].'
							</td>
						</tr>
						<tr>
							<th>Universiti/ Kolej</th>
							<td>
								'. $row['universiti_tinggi'].'
							</td>
						</tr>
						<tr>
							<th>Nama Sukan/Pertubuhan</th>
							<td>
								'. $row['nama_sukan'].'
							</td>
						</tr>
						<tr>
							<th>Jawatan</th>
							<td>
								'. $row['jawatan'].'
							</td>
						</tr>
						<tr>
							<th>Pencapaian Tertinggi</th>
							<td>
								'. $row['pencapaian'].'
							</td>
						</tr>
						<tr>
							<th>Tempoh</th>
							<td>
								'. $row['tempoh'].'
							</td>
						</tr>
						<tr>
							<th>Pengakuan</th>
							<td>
								'. $row['syarat'].'
							</td>
						</tr>
						<tr>
							<th>Status Kelayakan</th>
							<td>
								'. $row['status_admin'].'
							</td>
						</tr>
						<tr>
							<th>Tarikh Temuduga</th>
							<td>
								'. $row['iv_date'].'
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</body>
		</html>';
	$mpdf->WriteHTML($html);//from file mpfg $html convert html code ke pdf
	$mpdf->Output();//display kt browser
	// echo $html;

  } else {
    $result = '<div class="alert alert-danger" role="alert">went wrong</div>';
   
  }

include "inc/header.php";
include "inc/nav_app.php"; 
?>
	
	<div id="wrapper">

		<div class="content">

			<img src="img/kemas2.png" height="80" width="180">
			<h4><b>BORANG PERMOHONAN MENGIKUTI
				KURSUS PENDIDIKAN AWAL KANAK-KANAK
				TABIKA/TASKA</b></h4>
				<h5><u>JABATAN KEMAJUAN MASYARAKAT (KEMAS) MALAYSIA</u></h5>
			<!-- <h2>Maklumat Pemohon</h2> -->
			<table class="table table-bordered table-hover">
				<tbody>
					<h4>Butir-Butir Peribadi</h4>
					<tr>
						<th width="30px">Nama</th>
						<td>
							<?php echo $row['nama']?>
						</td>
					</tr>
					<tr>
						<th>No. Kad Pengenalan</th>
						<td>
							<?php echo $row['no_kp']?>
						</td>
					</tr>
					<tr>
						<th>Tarikh Lahir</th>
						<td>
							<?php echo $row['tarikhlahir']?>
						</td>
					</tr>
					<tr>
						<th>Warganegara</th>
						<td>
							<?php echo $row['warganegara']?>
						</td>
					</tr>
					<tr>
						<th>Alamat Surat Menyurat</th>
						<td>
							<?php echo $row['alamat']?>
						</td>
					</tr>
					<tr>
						<th>Ambilan/Sesi Permohonan</th>
						<td>
							<?php echo $row['ambilan']?>
						</td>
					</tr>
					<tr>
						<th>Nombor Telefon</th>
						<td>
							<?php echo $row['notel']?>
						</td>
					</tr>
					<tr>
						<th>Jantina</th>
						<td>
							<?php echo $row['jantina']?>
						</td>
					</tr>
					<tr>
						<th>Status</th>
						<td>
							<?php echo $row['statusx']?>
						</td>
					</tr>
					<tr>
						<th>Keturunan</th>
						<td>
							<?php echo $row['keturunan']?>
						</td>
					</tr>
					<tr>
						<th>Agama</th>
						<td>
							<?php echo $row['agama']?>
						</td>
					</tr>
					<tr>
						<th>Tempat Lahir</th>
						<td>
							<?php echo $row['tempatlahir']?>
						</td>
					</tr>
					<tr>
						<th>Tinggi</th>
						<td>
							<?php echo $row['tinggi']?>
						</td>
					</tr>
					<tr>
						<th>Berat</th>
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
						<th width="30%">Nama</th>
						<td>
							<?php echo $row['nama_keluarga']?>
						</td>
					</tr>
					<tr>
						<th>Pangkat</th>
						<td>
							<?php echo $row['pangkat']?>
						</td>
					</tr>
					<tr>
						<th>Alamat</th>
						<td>
							<?php echo $row['alamat_keluarga']?>
						</td>
					</tr>
					<tr>
						<th>Tempat Lahir</th>
						<td>
							<?php echo $row['tempatlahir_keluarga']?>
						</td>
					</tr>
					<tr>
						<th>Pekerjaan</th>
						<td>
							<?php echo $row['pekerjaan']?>
						</td>
					</tr>
					<tr>
						<th>Nama Kerja</th>
						<td>
							<?php echo $row['namakerja']?>
						</td>
					</tr>
					<tr>
						<th>Alamat Tempat Kerja</th>
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
						<th width="30%">Tahun Peperiksaan, SPM</th>
						<td>
							<?php echo $row['tahun_spm']?>
						</td>
					</tr>
					<tr>
						<th>Keputusan,SPM</th>
						<td>
							<?php echo $row['keputusan_spm']?>
						</td>
					</tr>
					<tr>
						<th>Nama Sekolah</th>
						<td>
							<?php echo $row['namasek_spm']?>
						</td>
					</tr>
					<tr>
						<th>Tahun, Diploma</th>
						<td>
							<?php echo $row['tahun_dip']?>
						</td>
					</tr>
					<tr>
						<th>CGPA</th>
						<td>
							<?php echo $row['cgpa_dip']?>
						</td>
					</tr>
					<tr>
						<th>Bidang Pengajian</th>
						<td>
							<?php echo $row['bidang_dip']?>
						</td>
					</tr>
					<tr>
						<th>Universiti/ Kolej</th>
						<td>
							<?php echo $row['universiti_dip']?>
						</td>
					</tr>
					<tr>
						<th>Tahun, Tertinggi</th>
						<td>
							<?php echo $row['tahun_tinggi']?>
						</td>
					</tr>
					<tr>
						<th>CGPA</th>
						<td>
							<?php echo $row['cgpa_tinggi']?>
						</td>
					</tr>
					<tr>
						<th>Bidang Pengajian</th>
						<td>
							<?php echo $row['bidang_tinggi']?>
						</td>
					</tr>
					<tr>
						<th>Universiti/ Kolej</th>
						<td>
							<?php echo $row['universiti_tinggi']?>
						</td>
					</tr>
					<tr>
						<th>Nama Sukan/Pertubuhan</th>
						<td>
							<?php echo $row['nama_sukan']?>
						</td>
					</tr>
					<tr>
						<th>Jawatan</th>
						<td>
							<?php echo $row['jawatan']?>
						</td>
					</tr>
					<tr>
						<th>Pencapaian Tertinggi</th>
						<td>
							<?php echo $row['pencapaian']?>
						</td>
					</tr>
					<tr>
						<th>Tempoh</th>
						<td>
							<?php echo $row['tempoh']?>
						</td>
					</tr>
					<tr>
						<th>Pengakuan</th>
						<td>
							<?php echo $row['syarat']?>
						</td>
					</tr>
					<tr>
						<th>Status Kelayakan</th>
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

			<form class="form-inline" role="form" name="" action="" method="POST">

				<input class="btn btn-embosed btn-info" name="print" type="submit" value="Cetak">

			</form>

		</div>
	</div>
	<!-- start <body> section  -->
	<!-- letak content utk display dekat user  -->
	<!-- end </body> section  -->

	<!-- <?php include "inc/footer.php"; ?> -->