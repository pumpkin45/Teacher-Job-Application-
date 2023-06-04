<?php 

session_start();

if(!isset($_SESSION['user'])){

  header('location: index.php');
}

include "inc/header.php";
include "inc/nav.php"; 
?>
<div id="container">

    <div id="wrapper" class="container">
        <div class="mainpage">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Syarat-Syarat Permohonan</div>
                <div class="panel-body">
                    <p><b>1. Calon hendaklah memiliki kelayakan seperti berikut:</b></p><br>
                    <ul>
                        <ol>
                            a) Warganegara Malaysia
                        </ol>
                        <ol>
                            b) Berumur tidak melebihi 35 thun pada tarikh tutup iklan
                        </ol>
                        <ol>
                            c) Mempunyai diploma dalam bidang pendidikan awal kanak-kanak yang diiktiraf oleh Kerajaan daripada institusi pengajian tinggi
                            tempatan atau kelayakan diiktiraf setaraf dengannya
                        </ol>
                    </ul>
                </div>
                <div class="panel-body">
                    <p><b>2. Sijil Pelajaran Malaysia (SPM) calon perlu memiliki sekurang-kurangnya keputusan seperti berikut:</b></p>
                    <ul>
                        <ol>
                            a) Lulus enam mata pelajaran termasuk Bahasa Melayu dengan dua daripada mata pelajaran adalah di peringkat Kepujian dan selebihnya
                            peringkat Lulus dalam satu peperiksaan
                        </ol>
                        <ol>
                            b) Lulus enam mata pelajaran termasuk Bahasa Melayu dengan dua mata pelajaran adalah di peringkat Kepujian dan selebihnya
                            peringkat Lulus yang dikumpulkan dalam dua peperiksaan dalam tempoh tiga tahun berturut-turut
                        </ol>
                        <ol>
                            c) Calon hendaklah memiliki Kepujian (sekurang-kurangnya Gred C) dalam subjek Bahasa Melayu pada peringkat Sijil Pelajaran
                            Malaysia atau kelulusan yang diiktiraf setaraf dengannya oleh Kerajaan
                        </ol>
                    </ul>
                </div>
                <div class="panel-body">
                    <p><b>3. Terbuka kepada calon lelaki atau perempuan</b></p>
                </div>
            </div>
        </div>
    </div>
    <!-- start <body> section  -->
    <!-- letak content utk display dekat user  -->
    <!-- end </body> section  -->

    <!-- <?php include "inc/footer.php"; ?> -->
</div>