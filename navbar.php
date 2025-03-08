<?php
   include 'resource/links.php';
?>
<div id="topsection"></div>
  <div class="d-flex ps-5 pe-5 text-light bg-brown" style="position:sticky; top:0px; z-index:9999;">
    <div class="col-3 ps-5 ms-4 header">
      <span class="header-text">သဲအင်း</span>
    </div>
    <div class="col-4 ms-5 ps-5 text-center header">
      <span class="header-text">ဇွဲတင်း</span>
    </div>
    <div class="col-4 header" style="text-align: right;">
      <span class="header-text">အမြဲလင်း</span>
    </div>
  </div>
<div class="" style="box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.5); background-color: white;">
  <div class="container d-flex nab-bar">
    <div class="col-4">
      <span class="main-title">သဲအင်းဂူ</span><span class="sub-title">ဗဟိုဌာနချုပ် (မှော်ဘီ )</span>
    </div>
    <div class="col-7">
      <?php
      $link = $_SERVER['PHP_SELF'];
      $linkary = explode('/',$link);
      $page = end($linkary);
      if ($page == 'index.php' || $page == 'login.php' || $page == 'register.php') {
      ?>
      <div class="">
        <a class="menu link" href="index.php">Home</a>

        <div class="dropdown">
          <span class="dropbtn menu link">About Us</span>
          <div class="dropdown-content mt-1">
            <a href="view/intro.php" class="sub-links">Introduction</a>
            <a href="view/bio.php" class="sub-links">Biography</a>
            <a href="view/" class="sub-links">Orgnization of Us</a>
          </div>
        </div>

        <div class="dropdown">
          <span class="dropbtn menu link">Resources</span>
          <div class="dropdown-content mt-1">
            <a href="view/" class="sub-links">တရားတော်များ</a>
            <a href="view/" class="sub-links">စာအုပ်များ</a>
          </div>
        </div>

        <a class="menu link" href="view/announcement.php">Announcement</a>

        <div class="dropdown">
          <span class="dropbtn menu link">Activity</span>
          <div class="dropdown-content mt-1">
            <a href="view/gallery.php" class="sub-links">Gallery</a>
            <a href="view/activity.php" class="sub-links">Activity</a>
          </div>
        </div>

        <a class="menu link" href="view/donate.php">Donate</a>
        <a class="menu link" href="view/contact.php">Contact</a>
      </div>
    <?php
    }else{
    ?>
    <div class="">
      <a class="menu link" href="../index.php">Home</a>
      <div class="dropdown">
        <span class="dropbtn menu link">About Us</span>
        <div class="dropdown-content mt-1">
          <a href="intro.php" class="sub-links">Introduction</a>
          <a href="bio.php" class="sub-links">Biography</a>
          <a href="#" class="sub-links">Orgnization of Us</a>
        </div>
      </div>

      <div class="dropdown">
        <span class="dropbtn menu link">Resources</span>
        <div class="dropdown-content mt-1">
          <a href="#" class="sub-links">တရားတော်များ</a>
          <a href="#" class="sub-links">စာအုပ်များ</a>
        </div>
      </div>

      <a class="menu link" href="announcement.php">Announcement</a>

      <div class="dropdown">
        <span class="dropbtn menu link">Activity</span>
        <div class="dropdown-content mt-1">
          <a href="gallery.php" class="sub-links">Gallery</a>
          <a href="activity.php" class="sub-links">Activity</a>
        </div>
      </div>

      <a class="menu link" href="donate.php">Donate</a>
      <a class="menu link" href="contact.php">Contact</a>
    </div>
  <?php
  }
    ?>
    </div>
    <div class="col-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
      </svg>
      09-976543601
    </div>
  </div>
</div>
<div class="m-5 hide" id="btn" style="position: fixed !important; bottom:10px; right:-10px;">
  <a class="menu" href="#topsection">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
      <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
    </svg>
  </a>
</div>
