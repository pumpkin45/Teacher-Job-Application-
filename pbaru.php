<?php 

session_start();

include "inc/dbconn.php";

if(!isset($_SESSION['user'])){

  header('location: index.php');
}


$result = "";

if(isset($_POST['hantar'])) {// user insert input(true)

 	$nama=$_POST['nama'];
	$username=$_SESSION['user']; //call 'username' from another table
	$no_kp=$_POST['no_kp'];
	$tLahir=$_POST['tLahir'];
	$warga = isset($_POST['warga']) ? $_POST['warga'] : '';
	$alamat=$_POST['alamat'];
	$ambilan=$_POST['ambilan'];
	$notel=$_POST['notel'];
	$jantina=isset($_POST['jantina']) ? $_POST['jantina'] : '';
	$status= isset($_POST['status']) ? $_POST['status'] : '';
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
	$tahun_spm=$_POST['tahun_spm'];
	$keputusan=$_POST['keputusan']; 
	$nama_sekolah=$_POST['nama_sekolah']; 
	$thn_dip=$_POST['tahun_dip']; 
	$cgpa_dip=$_POST['cgpa_dip'];
	$bidg_dip=isset($_POST['bidang_dip']) ? $_POST['bidang_dip'] : '';
	$uni_dip=$_POST['universiti_dip']; 
	$thn_tinggi=$_POST['tahun_tinggi']; 
	$cgpa_tinggi=$_POST['cgpa_tinggi']; 
	$bidg_tinggi=$_POST['bidg_tinggi']; 
	$uni_tinggi=$_POST['universiti_tinggi']; 
	$nama_sukan=$_POST['nama_sukan']; 
	$jawatan_sukan=$_POST['jawatan']; 
	$pencapaian_sukan=$_POST['p_tertinggi']; 
	$tempoh_sukan=$_POST['tempoh']; 
	$syarat=isset($_POST['syarat']) ? $_POST['syarat'] : '';

  $register = "INSERT INTO permohonan(nama,username,no_kp,tarikhlahir,warganegara,alamat,ambilan,notel,jantina,status,keturunan,agama,tempatlahir,
  tinggi,berat,nama_keluarga,pangkat,alamat_keluarga,tempatlahir_keluarga,pekerjaan,namakerja,alamatkerja,tahun_spm,keputusan_spm,
  namasek_spm,tahun_dip,cgpa_dip,bidang_dip,universiti_dip,tahun_tinggi,cgpa_tinggi,bidang_tinggi,universiti_tinggi,nama_sukan,
  jawatan,pencapaian,tempoh,syarat) VALUES('$nama','$username','$no_kp','$tLahir','$warga','$alamat','$ambilan','$notel','$jantina','$status','$keturunan','$agama','$t_lahir'
  ,'$tinggi','$berat','$nama_kel','$pangkat','$alamat_kel','$t_lahir_kel','$kerja','$nama_kerja','$alamat_kerja','$tahun_spm','$keputusan','$nama_sekolah','$thn_dip'
  ,'$cgpa_dip','$bidg_dip','$uni_dip','$thn_tinggi','$cgpa_tinggi','$bidg_tinggi','$uni_tinggi','$nama_sukan','$jawatan_sukan','$pencapaian_sukan','$tempoh_sukan','$syarat')";

  if (mysqli_query($db, $register)){

    $result = '<div class="alert alert-success" role="alert">Tahniah! data anda telah berjaya disimpan</div>';
	
  } else{

	echo $register;
    $result = '<div class="alert alert-danger" role="alert">Went Wrong!</div>';
  }

}

include "inc/header.php";
include "inc/nav.php"; 
?>
<div id="container">
	<div id="wrapper">
		<div class="content">
			<div class="row">
				<div class="col-md-9" name="maincontent" id="maincontent">
					<?php echo $result ?>
					<!-- ***********Edit your content STARTS from here******** -->
					<h3>Butir-Butir Peribadi</h3>
					<br>
					<form class="form" role="form" name="" action="" method="POST">
						Nama Penuh:
						<input required class="form-control" name="nama" type="text" placeholder="cth: Hawa Hanani binti Halim">
						<br>
						<div class="row">
							<div class="col-lg-6">
								No. Kad Pengenalan:
								<input required class="form-control" name="no_kp" type="text" placeholder="cth: xxxxxx-xx-xxxx">
								<br>
							</div>
							<div class="col-lg-6">
								Tarikh Lahir:
								<input required class="form-control" name="tLahir" type="date" placeholder="Tarikh Lahir">
								<br>
							</div>
						</div>
						Kewarganegaraan:
						<br>
						<input type="radio" name="warga" value="Ya"> Warganegara
						<br>
						<input type="radio" name="warga" value="Bukan"> Bukan Warganegara
						<br>
						<br> Alamat Surat Menyurat:
						<input required class="form-control" name="alamat" type="text" placeholder="">
						<br>
						<div class="row">
							<div class="col-lg-6">
								Ambilan/Sesi Permohonan:
								<select class="form-control" name="ambilan" type="text" placeholder="">
									<option>2014</option>;
									<option>2015</option>
									<option>2016</option>
									<option>2017</option>

								</select>
								<br>
							</div>
							<div class="col-lg-6">
								Nombor Telefon:
								<input required class="form-control" name="notel" type="text" placeholder="cth: xxx-xxxxxxx">
								<br>
							</div>
						</div>
						<br> Jantina:
						<br>
						<input type="radio" name="jantina" value="Lelaki"> Lelaki
						<br>
						<input type="radio" name="jantina" value="Perempuan"> Perempuan
						<br>
						<br> Status:
						<br>
						<input type="radio" name="status" value="Bujang"> Bujang
						<br>
						<input type="radio" name="status" value="Berkahwin"> Berkahwin
						<br>
						<br>
						<div class="row">
							<div class="col-lg-6">
								Keturunan:
								<select class="form-control" name="keturunan" type="text" placeholder="">
									<option>Melayu</option>;
									<option>Cina</option>
									<option>India</option>
									<option>Bumiputra</option>
								</select>
								<br>
							</div>
							<div class="col-lg-6">
								Agama:
								<select class="form-control" name="agama" type="text" placeholder="">
									<option>Islam</option>
									<option>Buddha</option>
									<option>Hindu</option>
									<option>Kristian</option>
								</select>
								<br>
							</div>
						</div>
						Tempat Lahir:
						<input class="form-control" name="t_lahir" type="text" placeholder="cth: Kuala Lumpur">
						<br> Butiran Fizikal
						<div class="row">
							<div class="col-lg-2">
								Tinggi:
								<input class="form-control" name="tinggi" type="text" placeholder="160 cm">
							</div>
							<div class="col-lg-1">

							</div>
							<div class="col-lg-2">
								Berat:
								<input class="form-control" name="berat" type="text" placeholder="60 kg">
							</div>
							<div class="col-lg-1">

							</div>
						</div>
						<br>
						<hr>

						<h3>Keluarga</h3>
						<br> Nama Penuh:
						<input required class="form-control" name="nama_kel" type="text" placeholder="cth: Mazlan bin Hassan">
						<br>Pangkat:
						<select required class="form-control" name="pangkat" type="text" placeholder="">
									<option>Bapa</option>;
									<option>Ibu</option>
									<option>Abang</option>
									<option>Kakak</option>
									<option>Suami</option>
									<option>Isteri</option>
								</select>

						<br> Alamat:
						<input required class="form-control" name="alamat_kel" type="text" placeholder="cth: Shah Alam, Selangor">
						<br> Tempat Lahir:
						<select class="form-control" name="t_lahir_kel" type="text" placeholder="">
									<option>Sarawak</option>;
									<option>Sabah</option>
									<option>Pahang</option>
									<option>Perak</option>
									<option>Johor</option>
									<option>Kelantan</option>
									<option>Terengganu</option>
									<option>Kedah</option>
									<option>Selangor</option>
									<option>Negeri Sembilan</option>
									<option>Melaka</option>
									<option>Pulau Pinang</option>
									<option>Perlis</option>
									<option>Kuala Lumpur</option>
								</select>

						<br> Pekerjaan:
						<input class="form-control" name="kerja" type="text" placeholder="cth: Kerani">
						<br> Nama Kerja:
						<input class="form-control" name="nama_kerja" type="text" placeholder="cth: DBKL">
						<br> Alamat Tempat Kerja:
						<input class="form-control" name="alamat_kerja" type="text" placeholder="cth: DBKL">
						<br>

						</a>

						<h3>Kelulusan</h3>
						<br>


						<h4>MCE/ SPM/ SPVM Mengikut Sistem Terbuka atau Setaraf</h4>
						Tahun Peperiksaan:
						<input class="form-control" name="tahun_spm" type="int" placeholder="cth: 2012">

						<br> Keputusan:
						<input class="form-control" name="keputusan" type="text" placeholder="cth: 10A 2B">
						<br> Nama Sekolah:
						<input class="form-control" name="nama_sekolah" type="text" placeholder="cth: Sekolah Menengah Kebangsaan Sungai Besi">
						<br>

						<h4>Diploma</h4>
						Tahun:
						<input class="form-control" name="tahun_dip" type="int" placeholder="cth: 2012">
						<br> CGPA:
						<input class="form-control" name="cgpa_dip" type="text" placeholder="cth: 4.00">
						<br> Bidang Pengajian:
						<input class="form-control" name="bidang_dip" type="text" placeholder="cth: Diploma Sains Komputer">
						<br> Universiti/ Kolej:
						<input class="form-control" name="universiti_dip" type="text" placeholder="cth: UNIKL">
						<br>

						<h4>Kelayakan Akademik Tertinggi</h4>
						Tahun:
						<input class="form-control" name="tahun_tinggi" type="int" placeholder="cth: 2012">
						<br> CGPA:
						<input class="form-control" name="cgpa_tinggi" type="text" placeholder="">
						<br> Bidang Pengajian:
						<input class="form-control" name="bidg_tinggi" type="text" placeholder="">
						<br> Universiti/ Kolej:
						<input class="form-control" name="universiti_tinggi" type="text" placeholder="">
						<br>

						<h4>Aktiviti dan Kegiatan Luar</h4>
						Nama Sukan/ Pertubuhan:
						<input class="form-control" name="nama_sukan" type="text" placeholder="cth: Bola Jaring">
						<br> Jawatan:
						<input class="form-control" name="jawatan" type="text" placeholder="cth: Presiden">
						<br> Pencapaian Tertinggi:
						<input class="form-control" name="p_tertinggi" type="text" placeholder="cth: Juara Peringkat Kebangsaan">
						<br> Tempoh:
						<input class="form-control" name="tempoh" type="int" placeholder="cth: 2 tahun">
						<br>
						<br>
						<p>Bahawa sesungguhnya saya memperaku dan mengesahkan iaitu semua keterangan yang diberikan dalam borang ini adalah benar
							dan betul. Saya memahami sekiranya ada di antara maklumat itu didapati tidak benar / palsu, permohonan saya ini akan
							terbatal dan sekiranya saya telah diberi tawaran, perkhidmatan saya akan ditamatkan dengan serta merta.</p>
						<input type="radio" name="syarat" value="Setuju"> Saya bersetuju dengan syarat di atas
						<br>
						<input type="radio" name="syarat" value="Tidak Setuju"> Saya tidak bersetuju dengan syarat di atas
						<br>
						<br>
						<input class="btn btn-embosed btn-info" type="submit" value="Hantar" name="hantar">
					</form>
				</div>
			</div>
			<br>

		</div>
	</div>

	<!-- <?php include "inc/footer.php"; ?> -->
</div>