<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>ADMIN SMA INSTITUT INDONESIA SLEMAN</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/2col.css" title="2col" />
<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="css/1col.css" title="1col" />
<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]-->
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/mystyle.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/switcher.js"></script>
<script type="text/javascript" src="js/toggle.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.tabs.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".tabs > ul").tabs();
	});
	</script>
</head>
<body>
<div id="main">
  <!-- Tray -->
  <div id="tray" class="box">
    <p class="f-left box">
      <!-- Switcher -->
      <span class="f-left" id="switcher"> <a href="javascript:void(0);" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a> <a href="javascript:void(0)" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="" /></a> </span> ADMIN: <strong>SMA INSTITUT INDONESIA SLEMAN</strong> </p>
    <p class="f-right">User: <strong><a href="#">Administrator</a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href="logout.php" id="logout">Log out</a></strong></p>
  </div>
  <!--  /tray -->
  <hr class="noscreen" />
  <!-- Menu -->
  <div id="menu" class="box">
    <ul class="box">
      <!-- Active -->
      <li><a href="utama.php"><span>HOME</span></a></li>
	  <li><a href="all_profil.php"><span>PROFIL</span></a></li>
      <li><a href="all_gurudansiswa.php"><span>GURU DAN SISWA </span></a></li>
      <li><a href="all_berita.php"><span>BERITA</span></a></li>
      <li><a href="all_fitur.php"><span>ARSIP</span></a></li>
	  <li id="menu-active"><a href="all_psb.php"><span>PSB</span></a></li>
      <li><a href="all_elearning.php"><span>MATERI</span></a></li>
    </ul>
  </div>
  <!-- /header -->
  <hr class="noscreen" />
  <!-- Columns -->
  <div id="cols" class="box">
    <!-- Aside (Left Column) -->
    <div id="aside" class="box">
      <div class="padding box">
        <!-- Logo (Max. width = 200px) -->
        <p id="logo"><a href="#"><img src="tmp/logo.png" alt="" /></a></p>
       
      </div>
      <!-- /padding -->
      <ul class="box">
        
        <li id="submenu-active"><a href="all_psb.php">PSB</a>
          <!-- Active -->
        <li><a href="tampil_syarat.php">Syarat Pendaftaran</a></li>
        <li><a href="tampil_formulir.php">Formulir Pendaftaran</a></li>
		<li><a href="tampil_data_casis.php">Calon Siswa Terdaftar</a></li>
		<li><a href="casis_nun_tinggi.php">Calon Siswa Nilai Tertinggi</a></li>
      </ul>
    </div>
    <!-- /aside -->
    <hr class="noscreen" />
    <!-- Content (Right Column) -->
    <div id="content" class="box">
      <h1>PSB</h1>
  </div>
  <!-- /cols -->
  <hr class="noscreen" />
  

<!-- /main -->

</html>

