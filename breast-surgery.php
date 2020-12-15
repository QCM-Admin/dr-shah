<!DOCTYPE HTML>
<html lang="en">
<?php include ('controls/home/head.php');?>
<body class="content-page">
    <!-- Loader -->
    <?php include ('controls/global/loader.php');?>
    <!-- Header -->
    <header id="top" class="header-breast-surgery">
      <?php
        //Brand Panel
        include ('controls/breast-surgery/page-header.php');
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
        include ('controls/breast-surgery/projects.php');
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
