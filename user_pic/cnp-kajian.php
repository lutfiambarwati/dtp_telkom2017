<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php
  include "../koneksi_db.php";
  include "../header.php";
  include "../pagination1.php";
  include "../check_session.php";

		$reload = "cnp-kajian.php?pagination=true";
		$sql = "SELECT * FROM upload_dtp WHERE JENIS_FILE_UPLOAD = 'Kajian' AND JENIS_LAB_UPLOAD = 'CNP' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);
		
?>

  <title>CNP Kajian</title>
  
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu"><a href="index.php" id="home" class="navlink w-nav-link">Home</a><a href="cnp-page.php" id="about" class="navlink w-nav-link" style="font-weight: bold">About CNP</a><a href="#daftar-kajian" id="about" class="navlink w-nav-link">Daftar Kajian</a><a href="#End-Section" class="navlink w-nav-link">Customer Care</a></nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="daftar-kajian" class="flex-wrapper">
    
    <div class="main-content">
      <h1 class="heading-2 mobile">Daftar Kajian Lab Cloud and Node Platform Research</h1>
      <div class="container-11 w-container">
          
		  		   <?php
		  		        include "../data-view.php";
		  		   ?>

      </div>
    </div>
  </div>
  
<?php
	include "../footer.php";
?>
