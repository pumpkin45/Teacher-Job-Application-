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
                    <h3 class="panel-title">Keluarga</h3>
                </div>
                <div class="panel-body">
                    <form class="form" role="form" action="permohonan.php" method="POST">
                    Nama Penuh:
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
                        <input type="submit" name="keluarga" class="btn btn-success" value="Sambung">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>