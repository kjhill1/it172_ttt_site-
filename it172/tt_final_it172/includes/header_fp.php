<?php include 'includes/fp_config.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8"/>

<script src="https://use.fontawesome.com/025d1215f3.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/index_fp.css" />


</head>

<body>

<div class="wrapper">

<div class="mobinav" id="mobi">
  <div id="myLinks">
  <a href="#home" class="active">Logo</a>
  <!-- Navigation links (hidden by default) -->
    <a href="index_fp.php">Home</a>
    <a href="search.php">Search Listings</a>
    <a href="about.php">About</a>
    <a href="resources.php">Resources</a>
    <a href="contact.php">Contact Me</a>
    <a href="../index.php">Designer's Portal Page</a>
    
  </div>

  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="myNavFunction()"><i class="fa fa-bars"></i></a>
  </div>

  
<header>
<nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
        <!-- <li><a href="index_fp.php" class="selected" >Home</a></li>
        <li><a href="search.php">Search Listings</a></li>
        <li><a href="resources.php">Learning Resources</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Me</a></li> -->
        <!-- <a href="../index.php">Designer's Portal Page</a> -->
      </ul>
    </nav>  
  
  <h1>
    <img class="desktop" src="imgs/headerimg.png" alt="Keller Williams Eastside, United Home Group">
    <img class="tablet" src="imgs/headimgtab.png" alt="Keller Williams Eastside, United Home Group">
    <img class="phone" src="imgs/phoneimg.png" alt="Keller Williams Eastside, United Home Group">

    
  </h1>

</header>
