<?php

session_start();

if(!isset($_SESSION['user'])){

  header('location: index.php');
}

$nama = $_SESSION['user'];

include "inc/dbconn.php";			
$update = "SELECT * FROM permohonan WHERE username = '$nama'"; 
$run = mysqli_query($db, $update);// execute $update code
$row = mysqli_fetch_assoc($run);//trace result dlm db
// echo $update;
// echo $row['nama'];

if(isset($_POST['update'])) {// user insert input(true)

 	$nama=$_POST['nama'];
	$username=$_SESSION['user'];
	$no_kp=$_POST['no_kp'];
	$tLahir=$_POST['tLahir'];
	// $warga=$_POST['warga'];
	$warga = isset($_POST['warga']) ? $_POST['warga'] : '';
	$alamat=$_POST['alamat'];
	$ambilan=$_POST['ambilan'];
	$notel=$_POST['notel'];
	$jantina=isset($_POST['jantina']) ? $_POST['jantina'] : '';
	$statusx= isset($_POST['statusx']) ? $_POST['statusx'] : '';
	$keturunan=$_POST['keturunan'];
	$agama=$_POST['agama'];
	$t_lahir=$_POST['t_lahir'];
	$tinggi=$_POST['tinggi'];
	$berat=$_POST['berat'];
	$nama_kel=$_POST['nama_kel'];
	$pangkat=$_POST['pangkat'];
	$alamat_kel=$_POST['alamat_kel'];
	$t_lahir_kel=$_POST['t_lahir_kel'];
	$kerja=$_POST['kerja'];
	$nama_kerja=isset($_POST['nama_kerja']) ? $_POST['nama_kerja'] : '';
	$alamat_kerja=$_POST['alamat_kerja'];
	$tahun_spm=$_POST['tahun'];
	$keputusan=$_POST['keputusan']; 
	$nama_sekolah=$_POST['nama_sekolah']; 
	$thn_dip=$_POST['tahun_dip']; 
	$cgpa_dip=$_POST['cgpa_dip'];
	$bidg_dip=isset($_POST['bidang_dip']) ? $_POST['bidang_dip'] : '';
	$uni_dip=$_POST['uni_dip']; 
	$thn_tinggi=$_POST['tahun_tinggi']; 
	$cgpa_tinggi=$_POST['cgpa_tinggi']; 
	$bidg_tinggi=$_POST['bidang_tinggi']; 
	$uni_tinggi=$_POST['universiti_tinggi']; 
	$nama_sukan=$_POST['nama_sukan']; 
	$jawatan_sukan=$_POST['jawatan']; 
	$pencapaian_sukan=$_POST['p_tertinggi']; 
	$tempoh_sukan=$_POST['tempoh'];
	$syarat=isset($_POST['syarat']) ? $_POST['syarat'] : ''; 

  $register = "UPDATE permohonan 
  SET nama = '$nama',
  username = '$username',
  no_kp = '$no_kp',
  tarikhlahir = '$tLahir',
  warganegara = '$warga',
  alamat = '$alamat',
  ambilan = '$ambilan',
  notel = '$notel',
  jantina = '$jantina',
  statusx ='$statusx',
  keturunan = '$keturunan',
  agama = '$agama',
  tempatlahir = '$t_lahir',
  tinggi = '$tinggi',
  berat = '$berat',
  nama_keluarga = '$nama_kel',
  pangkat = '$pangkat',
  alamat_keluarga = '$alamat_kel',
  tempatlahir_keluarga = '$t_lahir_kel',
  pekerjaan = '$kerja',
  namakerja = '$nama_kerja',
  alamatkerja = '$alamat_kerja',
  tahun_spm = '$tahun_spm',
  keputusan_spm ='$keputusan',
  namasek_spm ='$nama_sekolah',
  tahun_dip = '$thn_dip',
  cgpa_dip ='$cgpa_dip',
  bidang_dip ='$bidg_dip',
  universiti_dip = '$uni_dip',
  tahun_tinggi = '$thn_tinggi',
  cgpa_tinggi = '$cgpa_tinggi',
  bidang_tinggi = '$bidg_tinggi',
  universiti_tinggi = '$uni_tinggi',
  nama_sukan = '$nama_sukan',
  jawatan = '$jawatan_sukan',
  pencapaian = '$pencapaian_sukan',
  tempoh = '$tempoh_sukan',
  syarat = '$syarat'
  WHERE username = '$username'";

  if (mysqli_query($db, $register)){

    $result = '<div class="alert alert-success" role="alert">Tahniah! data anda telah berjaya disimpan</div>';
	// $_SESSION['result'] = $result;
    header('location: view_update.php');
  } else{

	echo $register;
    $result = '<div class="alert alert-danger" role="alert">Went Wrong!</div>';
  }

}

include "inc/header.php";
include "inc/nav.php"; ?>

	<div id="container">
		<div id="wrapper">
			<div class="content">
				<div class="row">
					<div class="col-md-9" name="maincontent" id="maincontent">
						<!-- ***********Edit your content STARTS from here******** -->
						<h3>Butir-Butir Peribadi</h3>
						<br>
						<!-- <?php echo $result ?> -->
						<form class="form" role="form" name="" action="" method="POST">
							Nama Penuh:
							<input class="form-control" name="nama" type="text" placeholder="cth: Hawa Hanani binti Halim" value="<?php echo $row['nama'] ?>">

							<br>
							<div class="row">
								<div class="col-lg-6">
									No. Kad Pengenalan:
									<input class="form-control" name="no_kp" type="text" placeholder="cth: xxxxxx-xx-xxxx" value="<?php echo $row['no_kp'] ?>">
									<br>
								</div>
								<div class="col-lg-6">
									Tarikh Lahir:
									<input class="form-control" name="tLahir" type="date" placeholder="Tarikh Lahir" value="<?php echo $row['tarikhlahir'] ?>">
									<br>
								</div>
							</div>
							Kewarganegaraan:
							<br>
							<input type="radio" name="warga" value="Ya" <?php if ($row[ 'warganegara']=='Ya' ) echo 'checked'; ?>> Warganegara
							<br>
							<input type="radio" name="warga" value="Bukan" <?php if ($row[ 'warganegara']=='Bukan' ) echo 'checked'; ?>> Bukan Warganegara
							<br>

							<br> Alamat Surat Menyurat:
							<input class="form-control" name="alamat" type="text" placeholder="" value="<?php echo $row['alamat'] ?>">

							<br>
							<div class="row">
								<div class="col-lg-6">
									Ambilan/Sesi Permohonan:
									<select class="form-control" name="ambilan" type="text">
										<option <?php if ($row['ambilan']==2014 ) echo 'selected'; ?>>2014</option>
										<option <?php if ($row['ambilan']==2015 ) echo 'selected'; ?>>2015</option>
										<option <?php if ($row['ambilan']==2016 ) echo 'selected'; ?>>2016</option>
										<option <?php if ($row['ambilan']==2017 ) echo 'selected'; ?>>2017</option>

									</select>
									<br>
								</div>
								<div class="col-lg-6">
									Nombor Telefon:
									<input class="form-control" name="notel" type="text" placeholder="cth: xxx-xxxxxxx" value="<?php echo $row['notel'] ?>">
									<br>
								</div>
							</div>

							<br> Jantina:
							<br>
							<input type="radio" name="jantina" value="Lelaki" <?php if ($row[ 'jantina']=='Lelaki' ) echo 'checked'; ?>> Lelaki
							<br>
							<input type="radio" name="jantina" value="Perempuan" <?php if ($row[ 'jantina']=='Perempuan' ) echo 'checked'; ?>> Perempuan
							<br>

							<br> Status:
							<br>
							<input type="radio" name="statusx" value="Bujang" <?php if ($row[ 'statusx']=='Bujang' ) echo 'checked'; ?>> Bujang
							<br>
							<input type="radio" name="statusx" value="Berkahwin" <?php if ($row[ 'statusx']=='Berkahwin' ) echo 'checked'; ?>> Berkahwin
							<br>
							<br>

							<div class="row">
								<div class="col-lg-6">
									Keturunan:
									<select class="form-control" name="keturunan" type="text">
										<option <?php if ($row['keturunan']=="Melayu" ) echo 'selected'; ?>>Melayu</option>
										<option <?php if ($row['keturunan']=="Cina" ) echo 'selected'; ?>>Cina</option>
										<option <?php if ($row['keturunan']=="India" ) echo 'selected'; ?>>India</option>
										<option <?php if ($row['keturunan']=="Bumiputra" ) echo 'selected'; ?>>Bumiputra</option>
									</select>
									<br>
								</div>
								<div class="col-lg-6">
									Agama:
									<select class="form-control" name="agama" type="text">
										<option <?php if ($row['agama']=="Islam" ) echo 'selected'; ?>>Islam</option>
										<option <?php if ($row['agama']=="Buddha" ) echo 'selected'; ?>>Buddha</option>
										<option <?php if ($row['agama']=="Hindu" ) echo 'selected'; ?>>Hindu</option>
										<option <?php if ($row['agama']=="Kristian" ) echo 'selected'; ?>>Kristian</option>
									</select>
									<br>
								</div>
							</div>
							Tempat Lahir:
							<input class="form-control" name="t_lahir" type="text" placeholder="cth: Kuala Lumpur" value="<?php echo $row['tempatlahir'] ?>">
							<br> Butiran Fizikal
							<div class="row">
								<div class="col-lg-2">
									Tinggi:
									<input class="form-control" name="tinggi" type="text" placeholder="160 cm" value="<?php echo $row['tinggi'] ?>">
								</div>
								<div class="col-lg-1">

								</div>
								<div class="col-lg-2">
									Berat:
									<input class="form-control" name="berat" type="text" placeholder="60 kg" value="<?php echo $row['berat'] ?>">
								</div>
								<div class="col-lg-1">

								</div>
							</div>
							<br>
							<!-- <?php echo $result ?>
					</form> -->
							<hr>

							<h3>Keluarga</h3>
							<br>
							<!-- <form class="form" role="form" name="" action="" method="GET"> -->
							Nama Penuh:
							<input class="form-control" name="nama_kel" type="text" placeholder="cth: Mazlan bin Hassan" value="<?php echo $row['nama_keluarga'] ?>">
							<br>Pangkat:
							<select class="form-control" name="pangkat" type="text">
										<option <?php if ($row['pangkat']=="Bapa" ) echo 'selected'; ?>>Bapa</option>
										<option <?php if ($row['pangkat']=="Ibu" ) echo 'selected'; ?>>Ibu</option>
										<option <?php if ($row['pangkat']=="Abang" ) echo 'selected'; ?>>Abang</option>
										<option <?php if ($row['pangkat']=="Kakak" ) echo 'selected'; ?>>Kakak</option>
										<option <?php if ($row['pangkat']=="Suami" ) echo 'selected'; ?>>Suami</option>
										<option <?php if ($row['pangkat']=="Isteri" ) echo 'selected'; ?>>Isteri</option>

									</select>
							<br> Alamat:
							<input class="form-control" name="alamat_kel" type="text" placeholder="cth: Shah Alam, Selangor" value="<?php echo $row['alamat_keluarga'] ?>">
							<br> Tempat Lahir:
							<select class="form-control" name="t_lahir_kel" type="text">
									<option <?php if ($row['tempatlahir_keluarga']=="Sarawak" ) echo 'selected'; ?>>Sarawak</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Sabah" ) echo 'selected'; ?>>Sabah</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Pahang" ) echo 'selected'; ?>>Pahang</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Perak" ) echo 'selected'; ?>>Perak</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Johor" ) echo 'selected'; ?>>Johor</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Kelantan" ) echo 'selected'; ?>>Kelantan</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Terengganu" ) echo 'selected'; ?>>Terengganu</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Kedah" ) echo 'selected'; ?>>Kedah</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Selangor" ) echo 'selected'; ?>>Selangor</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Negeri Sembilan" ) echo 'selected'; ?>>Negeri Sembilan</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Melaka" ) echo 'selected'; ?>>Melaka</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Pulau Pinang" ) echo 'selected'; ?>>Pulau Pinang</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Perlis" ) echo 'selected'; ?>>Perlis</option>
									<option <?php if ($row['tempatlahir_keluarga']=="Kuala Lumpur" ) echo 'selected'; ?>>Kuala Lumpur</option>
								</select>

							<br> Pekerjaan:
							<input class="form-control" name="kerja" type="text" placeholder="cth: Kerani" value="<?php echo $row['pekerjaan'] ?>">

							<br> Nama Kerja:
							<input class="form-control" name="nama_kerja" type="text" placeholder="cth: DBKL" value="<?php echo $row['namakerja'] ?>">
							
							<br> Alamat Tempat Kerja:
							<input class="form-control" name="alamat_kerja" type="text" placeholder="cth: DBKL" value="<?php echo $row['alamatkerja'] ?>">
							<br>

							</a>
							<!-- </form> -->

							<h3>Kelulusan</h3>
							<br>

							<h4>MCE/ SPM/ SPVM Mengikut Sistem Terbuka atau Setaraf</h4>
							Tahun Peperiksaan:
							<input class="form-control" name="tahun_spm" type="int" placeholder="cth: 2012" value="<?php echo $row['tahun_spm'] ?>">
							<br> Keputusan:
							<input class="form-control" name="keputusan" type="text" placeholder="cth: 10A 2B" value="<?php echo $row['keputusan_spm'] ?>">
							<br> Nama Sekolah:
							<input class="form-control" name="nama_sekolah" type="text" placeholder="cth: Sekolah Menengah Kebangsaan Sungai Besi" value="<?php echo $row['namasek_spm'] ?>">
							<br>

							<h4>Diploma</h4>
							Tahun:
							<input class="form-control" name="tahun_dip" type="int" placeholder="cth: 2013" value="<?php echo $row['tahun_dip'] ?>">
							<br> CGPA:
							<input class="form-control" name="cgpa_dip" type="text" placeholder="cth: 4.00" value="<?php echo $row['cgpa_dip'] ?>">
							<br> Bidang Pengajian:
							<input class="form-control" name="bidang_dip" type="text" placeholder="cth: Diploma Sains Komputer" value="<?php echo $row['bidang_dip'] ?>">
							<br> Universiti/ Kolej:
							<input class="form-control" name="uni_dip" type="text" placeholder="cth: UNIKL" value="<?php echo $row['universiti_dip'] ?>">
							<br>

							<h4>Kelayakan Akademik Tertinggi</h4>
							Tahun:
							<input class="form-control" name="tahun_tinggi" type="int" placeholder="" value="<?php echo $row['tahun_tinggi'] ?>">
							<br> CGPA:
							<input class="form-control" name="cgpa_tinggi" type="text" placeholder="" value="<?php echo $row['cgpa_tinggi'] ?>">
							<br> Bidang Pengajian:
							<input class="form-control" name="bidang_tinggi" type="text" placeholder="" value="<?php echo $row['bidang_tinggi'] ?>">
							<br> Universiti/ Kolej:
							<input class="form-control" name="universiti_tinggi" type="text" placeholder="" value="<?php echo $row['universiti_tinggi'] ?>">
							<br>

							<h4>Aktiviti dan Kegiatan Luar</h4>
							Nama Sukan/ Pertubuhan:
							<input class="form-control" name="nama_sukan" type="text" placeholder="cth: Bola Jaring" value="<?php echo $row['nama_sukan'] ?>">
							<br> Jawatan:
							<input class="form-control" name="jawatan" type="text" placeholder="cth: Presiden" value="<?php echo $row['jawatan'] ?>">
							<br> Pencapaian Tertinggi:
							<input class="form-control" name="p_tertinggi" type="text" placeholder="cth: Juara Peringkat Kebangsaan" value="<?php echo $row['pencapaian'] ?>">
							<br> Tempoh:
							<input class="form-control" name="tempoh" type="int" placeholder="cth: 2 tahun" value="<?php echo $row['tempoh'] ?>">
							<br>
							<br>
							<p>Bahawa sesungguhnya saya memperaku dan mengesahkan iaitu semua keterangan yang diberikan dalam borang ini adalah benar
								dan betul. Saya memahami sekiranya ada di antara maklumat itu didapati tidak benar / palsu, permohonan saya ini akan
								terbatal dan sekiranya saya telah diberi tawaran, perkhidmatan saya akan ditamatkan dengan serta merta.</p>
							<input type="radio" name="syarat" value="Setuju" <?php if ($row[ 'syarat']=='Setuju' ) echo 'checked'; ?>> Saya bersetuju dengan syarat di atas
							<br>
							<input type="radio" name="syarat" value="Tidak Setuju" <?php if ($row[ 'syarat']=='Tidak Setuju' ) echo 'checked'; ?>> Saya tidak bersetuju dengan syarat di atas
							<br>
							<br>
							<input class="btn btn-embosed btn-info" type="submit" value="Kemaskini" name="update">
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end main content -->

		<!-- start <body> section  -->
		<!-- letak content utk display dekat user  -->
		<!-- end </body> section  -->

		<!-- <?php include "inc/footer.php"; ?> -->
	</div>