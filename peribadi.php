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
                    <h3 class="panel-title">Butir Peribadi</h3>
                </div>
                <div class="panel-body">
                    <form class="form" role="form" name="" action="permohonan.php" method="POST">
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
                        <input type="radio" name="statusx" value="Bujang"> Bujang
                        <br>
                        <input type="radio" name="statusx" value="Berkahwin"> Berkahwin
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
                        </div>
                        <br>
                        <input type="submit" name="peribadi" class="btn btn-success" value="Sambung">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>