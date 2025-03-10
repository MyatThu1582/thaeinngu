<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8"f>
  <title>ThaeInnGu - သဲအင်းဂူ</title>

  <?php
  $link = $_SERVER['PHP_SELF'];
  $linkary = explode('/',$link);
  $page = end($linkary);
  if ($page == 'index.php' || $page == 'login.php' || $page == 'register.php') {
    ?>
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
    <script src="boostrap/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="boostrap/js/bootstrap.bundle.js" charset="utf-8"></script>
    <?php
  }else{
    ?>
    <link rel="stylesheet" href="../boostrap/css/bootstrap.css">
    <script src="../boostrap/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="../boostrap/js/bootstrap.bundle.js" charset="utf-8"></script>
    <?php
  }
   ?>
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&family=Noto+Serif+Myanmar:wght@100;200;300;400;500;600;700;800;900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
*{
  font-family: "Outfit", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
}
.hide{
  display: none;
}
.none-bg{
  background-color: white !important;
  color: rgb(94, 0, 0);
}
.bg-brown{
  background-color:rgb(94,0,0);
}
.text-brown{
  color: rgb(94,0,0);
}
.header{
  margin-top: -2px;
  margin-bottom: 2px;
}
.header-text{
  font-size: 14px;
  color: yellow;
}
.home{
  height: 550px;
  color: black;
  padding: 120px;
  background-image: url('Thaeinngu/home.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 100% 50%;
}
.donate{
  color: green;
}
.link{
  text-decoration: none;
}
.menu{
  color: rgb(94,0,0);
  padding: 8px;
  font-weight: 20px;
}
.hide{
  transition: 0.5s;
  opacity: 0;
}
.nab-bar{
  align-items: center;
  padding: 25px 0px;
}
.main-title{
  /* display: block; */
  font-size: 40px;
  font-weight: bold;
  color: rgb(94,0,0);
  margin: 0px 10px;
}
.sub-title{
  font-weight: bold;
  font-size: 15px;
  font-style: italic;
  /* color: rgb(94,0,0); */
}
.direction{
  background-color: rgba(0,0,0,0.4);

}

.sub-links{
  font-size: 15px;
}
.dropdown {
  cursor: pointer;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.3);
  z-index: 1;
  border-radius: 5px;
  padding: 10px 0px;
}

.dropdown-content a {
  color: black;
  padding: 6px 15px;
  transition: 0.5s;
  /* padding: 12px 16px; */
  text-decoration: none;
  display: block;
}

/* .dropdown-content a:hover {background-color: #ddd;} */

.dropdown:hover .dropdown-content {display: block;}

.dropdown-content a:hover{
  color: rgb(94,0,0);
  padding-left: 20px;
}
.bannar{
  background-image: url('../Thaeinngu/bannar.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  /* background-position: 100% 50%; */
}
.bio{
  text-align: justify;
}
.speech{
  height: 200px;
  background-image: url('Thaeinngu/forhome.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
.activity{
  cursor: pointer;
  width: 33%;
  height: 350px;
  border-radius: 6px;
  box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.3);
  transition: 0.3s;
}
.activity:hover{
  transform: scale(1.02);
}
.actimg{
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
}
.title-underline{
  width: 150px;
  height: 4px;
  /* border-bottom: 3px solid red; */
  background-color: rgb(94,0,0);
  margin-bottom: 50px;
}
.btns{
  background-color: rgba(0,0,0,0.1);
  /* box-shadow: 15px 15px 16px 0px rgba(94,0,0,0.5); */
}
.biolinks{
  padding: 15px 44.4px;
  border: none;
  background-color: transparent;
  transition: 0.1s;
}
.hand{
  transform: rotateZ(90deg);
}
.donate{
  width:100%;
  padding: 10px;
  border: none;
  outline: none;
  color: black;
  box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.4);
}
.donate:focus{
  border-left: 2px solid rgb(94,0,0);
}
.donatebtn{
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  outline: none;
  background-color: rgb(94, 0, 0);
  color: white;
}
.announce_div{
  cursor: pointer;
  transition: 0.1s;
  box-shadow:0px 8px 16px 0px rgba(94,0,0,0.1); border-radius:10px;
}
.announce_div:hover{
   transform: scale(1.02);
}
.gallerydiv{
  position:relative;
  overflow:hidden !important;
  background-color: lightblue;
  padding:10px;
  text-align: center;
}
.image-text{
  width: 100%;
  color: white;
  transition: 0.5s;
  background-color: brown;
  padding:10px 20px;
  position: absolute;
  bottom: -44px;
  left: 0;
}
.gallerydiv:hover .image-text{
  bottom: 0px;
}
.rounded_gallery{
  border-radius: 4px;
}







/* For footer */
.footer{
  /* height:380px; */
  background-color: rgb(63,0,0);
}
.copyright{
  padding-left: 100px;
  background-color: rgb(0,0,0,0.2);
}
.footertitle-underline{
  width: 100px;
  height: 3px;
  /* border-bottom: 3px solid red; */
  background-color: white;
}
.f-links{
  display: block;
  color: white;
  margin-bottom: 6px;
}
</style>
<body>
