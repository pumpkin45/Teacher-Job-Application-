<?php 

session_start();
include "inc/dbconn.php";
include "inc/header.php";
include "inc/nav.php"; 

if(!isset($_SESSION['user'])){
    header('location: index.php');
}

?>

<div id="container">
    <div id="wrapper">
        <div class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Kelulusan</h3>
                </div>
                <div class="panel-body">
                    <form class="form" role="form" name="" action="permohonan.php" method="POST">
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
                        <p>Bahawa sesungguhnya saya memperaku dan mengesahkan iaitu semua keterangan yang diberikan dalam borang ini adalah benar
							dan betul. Saya memahami sekiranya ada di antara maklumat itu didapati tidak benar / palsu, permohonan saya ini akan
							terbatal dan sekiranya saya telah diberi tawaran, perkhidmatan saya akan ditamatkan dengan serta merta.</p>
						<input type="radio" name="syarat" value="Setuju"> Saya bersetuju dengan syarat di atas
						<br>
						<input type="radio" name="syarat" value="Tidak Setuju"> Saya tidak bersetuju dengan syarat di atas
						<br>
                        <br>
                        <input type="submit" name="kelulusan" class="btn btn-success" value="Hantar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>