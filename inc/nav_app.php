<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">KEMAS</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php 
    
    if(isset($_SESSION['id_admin'])) {

      $menu = '
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Selamat Datang '.$_SESSION['id_admin'].'</a></li>
        <li>
        <form class="navbar-form navbar-right">
          <a href="logout_admin.php" class="btn btn-default">Log Keluar</a>
        </form>
        </li>
      </ul>
      <ul class="nav navbar-nav side-nav">
        <li>
          <a href="spemohon.php"></i> Senarai Pemohon</a>
        </li>
        <li>
          <a href="profil.php"></i> Profil</a>
        </li>
      </ul>';


    } else {

      $menu = '
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-right" role="search">
          <a href="login_app.php" class="btn btn-default">Log Masuk</a>
          <a href="signup_app.php" class="btn btn-default">Daftar Masuk</a>
        </form>
      </ul>';

    }
     echo $menu;
    ?>
    </div>
  </div>
</nav>