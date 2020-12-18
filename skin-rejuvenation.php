<!DOCTYPE HTML>
<html lang="en">
<?php include ('controls/home/head.php');?>
<body class="content-page">
    <!-- Loader -->
    <?php include ('controls/global/loader.php');?>
    <!-- Header -->
    <header id="top" class="hero-content-header header-skin-rejuvenation">
      <?php
        //Brand Panel
        include ('controls/skin-rejuvenation/page-header.php');
        //<!-- Navigation Desctop -->
        include ('controls/global/desktopNav.php');
        //<!-- Navigation Mobile -->
        include ('controls/global/mobileNav.php');
      ?>
    </header>
  <!-- Layout -->
  <div class="layout">
      <?php
        //Projects
        include ('controls/skin-rejuvenation/projects.php');
        //<!-- Contacts -->
        include ('controls/home/contact.php');
        //<!-- Footer -->
        include ('controls/global/footer.php');
        //<!-- Lines -->
        include ('controls/global/lines.php');
      ?>
    </div>
  </div>
  <!-- SCRIPTS -->
  <?php include ('controls/global/scripts.php') ;?>
</body>
</html>
