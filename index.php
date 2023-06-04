<?php 

session_start();

if(isset($_SESSION['user'])){

  header('location: mainpage.php');
}

include "inc/header.php";
include "inc/nav.php"; 
?>
<div id="container">
	<img class="headline">
	<div class="intro">
		<h2>Tentang KEMAS</h2>
		<hr>
		<p>Program pendidikan awal kanak-kanak yang dianjurkan oleh KEMAS yang dikenali sebagai kanak-kanak tadika (tadika) merupakan
			satu program yang memberi peluang pendidikan awal bagi kanak-kanak yang berumur 4 hingga 6 tahun. Konsep Tabika KEMAS
			ialah 'Belajar melalui bermain' yang diselaraskan oleh alam semula jadi kanak-kanak bermain, rasa ingin tahu dan mencuba.
			Konsep tersebut kemudiannya diperluaskan kepada kemahiran median (membaca, menulis dan mengira). Konsep ini bertujuan
			untuk memberi peluang dan galakan kepada kanak-kanak menguasai kemahiran asas dan pengalaman yang akan memudahkan mereka
			menerima pendidikan formal di sekolah rendah nanti. Di samping itu, ianya juga bagi meningkatkan kecemerlangan potensi
			individu kanak-kanak yang menyeluruh, seimbang dan bersepadu. Pengetahuan dan kemahiran kanak-kanak meningkat dengan pembajaan
			dan memantapkan amalan nilai-nilai murni melalui usaha-usaha dan program dirancang dan berstruktur. Usaha ini bertujuan
			melahirkan waris cemerlang negara yang dibimbing dan dididik dalam suasana dan satu persekitaran yang sihat, bahagia dan
			selamat serta kerjasama dengan ibu bapa.</p>
	</div>
</div>
<!-- <?php include "inc/footer.php"; ?> -->

<!-- start <body> section  -->
<!-- letak content utk display dekat user  -->
<!-- end </body> section  -->