<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

  include "../header.php";
  
?>

  <title>CNP Page</title>
 
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="../index.php" class="w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu" style="font-weight: bold"><a href="../index.php" id="home" class="navlink w-nav-link">Home</a><a href="#About" id="about" class="navlink w-nav-link">About CNP</a><a href="#End-Section" class="navlink w-nav-link">Customer Care</a></nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="About" class="content-cnp">
    <h2 id="AboutIXC" class="heading-2 mobile">Lab Cloud and Node Platform<br>Research - C N P</h2>
    <div class="row-18 w-row">
      <div class="column-46 w-col w-col-4">
        <div class="about">
          <h1 class="heading-17">about us</h1><img src="../images/pmxwanyjahqqjsiiklwn.png" width="141" class="image-ixc">
          <p class="paragraph-ixc">&quot;Our challenge is designed WOW Experience for our user and provide to services IaaS Cloud at DDS&quot;</p>
        </div>
      </div>
      <div class="column-47 w-col w-col-4">
        <div class="about">
          <h1 class="heading-17">our responsibility</h1><img src="../images/sustainable-and-responsible-icon.png" width="141" class="image-ixc respon">
          <p class="paragraph-ixc responsibility">Menyediakan Expert pada bidang Cloud Network Platform dan Cloud Computing Technology, NFVI, Internet Service (Fixed &amp; Wireless) Platform, Policy Control Technology, Voice Signalling &amp; Platform.</p>
          <div class="text-block-5">Visit Our Website :<br><a href="https://catalog.telkomku.com" target="_blank" class="link-4">www.catalog.telkomku.com</a></div>
        </div>
        <div class="about">
          <h1 class="heading-17">produk unggulan</h1>
          <p class="paragraph-ixc responsibility">Daftar Produk Unggulan<br>Lab Cloud and Node Platform Research</p><a href="cnp-unggulan.php" class="link-10">Load more . . .</a></p>
        </div>
      </div>
      <div class="column-48 w-col w-col-4">
        <div class="about research">
          <h1 class="heading-17">repository</h1>
          <p class="paragraph-ixc responsibility">Daftar Kajian<br>Lab Cloud and Node Platform Research</p><a href="cnp-kajian.php" class="link-10">Load more . . .</a></div>
        <div class="about research">
          <h1 class="heading-17">standard documents</h1>
          <p class="paragraph-ixc responsibility">Daftar Dokumen Standarisasi<br>Lab Cloud and Node Platform Research</p><a href="cnp-dokumen-standard.php" class="link-10">Load more . . .</a></div>
      </div>
    </div>
  </div>

<?php
    include "../footer.php";
?>