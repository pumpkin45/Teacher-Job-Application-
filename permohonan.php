<?php

session_start();

if(!isset($_SESSION['user'])){
  	header('location: index.php');
}

include 'inc/dbconn.php';

if (isset($_POST['peribadi'])){
    $nama=$_POST['nama'];
	$username=$_SESSION['user']; //call 'username' from another table
	$no_kp=$_POST['no_kp'];
	$tLahir=$_POST['tLahir'];
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

	$register = "INSERT INTO permohonan(nama,username,no_kp,tarikhlahir,warganegara,alamat,ambilan,notel,jantina,statusx,keturunan,agama,tempatlahir,
	tinggi,berat) VALUES('$nama','$username','$no_kp','$tLahir','$warga','$alamat','$ambilan','$notel','$jantina','$statusx','$keturunan','$agama','$t_lahir'
	,'$tinggi','$berat')";
	if (mysqli_query($db, $register)){
    	header('location: keluarga.php');
	} else {
		echo $register;
	}
}
echo $test;
if (isset($_POST['keluarga'])){
	
	$nama_kel=$_POST['nama_kel'];
	$pangkat=$_POST['pangkat'];
	$alamat_kel=$_POST['alamat_kel'];
	$t_lahir_kel=$_POST['t_lahir_kel'];
	$kerja=$_POST['kerja'];
	$nama_kerja=isset($_POST['nama_kerja']) ? $_POST['nama_kerja'] : '';
	$alamat_kerja=$_POST['alamat_kerja'];

	$register = "UPDATE permohonan SET nama_keluarga = '$nama_kel',pangkat = '$pangkat',alamat_keluarga = '$alamat_kel',tempatlahir_keluarga = '$t_lahir_kel',pekerjaan = '$kerja',namakerja = '$nama_kerja',alamatkerja = '$alamat_kerja' WHERE username = '".$_SESSION['user']."'";

  
	if (mysqli_query($db, $register)){
		header('location: kelulusan.php');
	}else { echo $register;}
}

if(isset($_POST['kelulusan'])){
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

	$register = "UPDATE permohonan SET tahun_spm = '$tahun_spm',keputusan_spm = '$keputusan',
	namasek_spm = '$nama_sekolah',tahun_dip = '$thn_dip',cgpa_dip = '$cgpa_dip',bidang_dip = '$bidg_dip',universiti_dip = '$uni_dip',tahun_tinggi = '$thn_tinggi',cgpa_tinggi = '$cgpa_tinggi',bidang_tinggi = '$bidg_tinggi',universiti_tinggi = '$uni_tinggi',nama_sukan = '$nama_sukan',
	jawatan = '$jawatan_sukan',pencapaian = '$pencapaian_sukan',tempoh = '$tempoh_sukan',syarat = '$syarat' WHERE username = '".$_SESSION['user']."'";

	if (mysqli_query($db, $register)){
		header('location: plepas.php');
	} else { echo 'somethings went wrong';}
}