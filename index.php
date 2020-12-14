<!DOCTYPE HTML>
<html lang="en">
<?php include ('php/home/head.php');?>
<body>
    <!-- Loader -->
    <?php include ('php/global/loader.php');?>
    <!-- Header -->
    <header id="top" class="header-home">
      <?php
        //Brand Panel
        include ('php/global/brandPanel.php');
        //<!-- Navigation Desctop -->
        include ('php/global/desktopNav.php');
        //<!-- Navigation Mobile -->
        include ('php/global/mobileNav.php');
      ?>
    </header>
  <!-- Layout -->
  <div class="layout">
    <!-- Home -->
    <?php include ('php/home/slider.php');?>
    <div class="content">
      <?php
        //About
        include ('php/home/about.php');
        //Projects
        include ('php/home/projects.php');
        //Experience
        include ('php/home/experience.php');
        //clients
        include ('php/home/clients.php');
        //<!-- Contacts -->
        include ('php/home/contact.php');
        //<!-- Footer -->
        include ('php/global/footer.php');
        //<!-- Lines -->
        include ('php/global/lines.php');
      ?>
    </div>
  </div>
  <!-- SCRIPTS -->
  <?php include ('php/global/scripts.php') ;?>
</body>
</html>
