<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

    include "../header.php";

?>

  <title>BAN Page</title>
  
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="../index.php" class="w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu" style="font-weight: bold"><a href="../index.php" id="home" class="navlink w-nav-link">Home</a><a href="#About" id="about" class="navlink w-nav-link">About BAN</a><a href="#End-Section" class="navlink w-nav-link">Customer Care</a></nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="About" class="content-ban">
    <h2 id="AboutIXC" class="heading-2 mobile">Lab Broadband Access Network - <br>BAN</h2>
    <div class="row-18 w-row">
      <div class="column-46 w-col w-col-4">
        <div class="about">
          <h1 class="heading-17">about us</h1><img src="../images/pmxwanyjahqqjsiiklwn.png" width="141" class="image-ixc">
          <p class="paragraph-ixc">Mohon diisi sesuai dgn kompetensi</p>
        </div>
      </div>
      <div class="column-47 w-col w-col-4">
        <div class="about">
          <h1 class="heading-17">our responsibility</h1><img src="../images/sustainable-and-responsible-icon.png" width="141" class="image-ixc respon">
          <p class="paragraph-ixc responsibility">Menyediakan Expert pada bidang Active &amp; Passive Access Network Technology, Home Networking, FTTH, Home Gateway, and Performance Monitoring System.</p>
        </div>
        <div class="about">
          <h1 class="heading-17">produk unggulan</h1>
          <p class="paragraph-ixc responsibility">Daftar Produk Unggulan<br>Lab Broadband Access Network</p><a href="ban-unggulan.php" class="link-10">Load more . . .</a></p>
        </div>
      </div>
      <div class="column-48 w-col w-col-4">
        <div class="about research">
          <h1 class="heading-17">repository</h1>
          <p class="paragraph-ixc responsibility">Daftar Kajian<br>Lab Broadband Access Network</p><a href="ban-kajian.php" class="link-10">Load more . . .</a></div>
        <div class="about research">
          <h1 class="heading-17">standard documents</h1>
          <p class="paragraph-ixc responsibility">Daftar Dokumen Standarisasi<br>Lab Broadband Access Network</p><a href="ban-dokumen-standard.php" class="link-10">Load more . . .</a></div>
      </div>
    </div>
  </div>
  
  <?php
      include "../footer.php";
  ?>