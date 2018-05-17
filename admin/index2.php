<?php
if(!isset($_SESSION)) {
     session_start();
}
if(isset($_SESSION['username'])){
?>
<!DOCTYPE html PUBLIC"">
<html xmlns="">
<head>
<link rel="shortcut icon" href="favicon.gif" type="image/x-icon" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PWL</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
function mmLoadMenus() {
  if (window.mm_menu_0501182410_0) return;
  window.mm_menu_0501182410_0 = new Menu("root",200,23,"",17,"#FFFFFF","#000000","#009900","#00FF33","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Pasien","location='?page=input_pasien'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Dokter","location='?page=input_dokter'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Perawat","location='?page=input_suster'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Jadwal&nbsp;Jaga","location='?page=input_jadwal'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Cleaning&nbsp;Service","location='?page=input_cs'");
  mm_menu_0501182410_0.hideOnMouseOut=true;
  mm_menu_0501182410_0.bgColor='#FFFFFF';
  mm_menu_0501182410_0.menuBorder=1;
  mm_menu_0501182410_0.menuLiteBgColor='#FFFFFF';
  mm_menu_0501182410_0.menuBorderBgColor='#FFFFFF';
  window.mm_menu_0501191215_0 = new Menu("root",200,23,"",17,"#FFFFFF","#000000","#009900","#00FF33","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Pasien","location='?page=lihat_pasien'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Dokter","location='?page=lihat_dokter'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Perawat","location='?page=lihat_suster'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Jadwal&nbsp;Jaga","location='?page=lihat_jadwal'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Cleaning&nbsp;Service","location='?page=lihat_cs'");
  mm_menu_0501191215_0.hideOnMouseOut=true;
  mm_menu_0501191215_0.bgColor='#99FF00';
  mm_menu_0501191215_0.menuBorder=1;
  mm_menu_0501191215_0.menuLiteBgColor='#FFFFFF';
  mm_menu_0501191215_0.menuBorderBgColor='#009933';
  window.mm_menu_0501212441_0 = new Menu("root",200,23,"",17,"#FFFFFF","#000000","#009900","#00FF33","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);

mm_menu_0501212441_0.writeMenus();
}
</script>
<script language="JavaScript" src="mm_menu.js"></script>
</head>
<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="main_bg">
  <div id="main">
      </div>
      <div id="buttons"> <a href="/rs" class="but"  title="">RS</a> <a href="#" name="link5" title="" class="but" id="link1" onmouseover="MM_showMenu(window.mm_menu_0501182410_0,0,40,null,'link5')" onmouseout="MM_startTimeout();">Input Data </a> <a href="#" name="link7" title=""  class="but" id="link2" onmouseover="MM_showMenu(window.mm_menu_0501191215_0,0,40,null,'link7')" onmouseout="MM_startTimeout();">Lihat Data </a><a href="?page=profil_recept" name="link3" title=""  class="but" id="link4" onmouseover="MM_showMenu(window.mm_menu_0501212441_0,0,40,null,'link3')" onmouseout="MM_startTimeout();">Akun</a> <a href="../login/logout.php" onclick="return confirm('Anda Yakin Logout dari Sistem?')" class="but" title="">Logout</a> </div> 
    </div>
    <div id="content">
      <div id="left">
        <div class="left_box">
          <br>
          <h1> Keterangan : </h1>
        <?php
  		include "content.php";
		?>
        </div>
      </div>
      <div style="clear: both"></div>
    </div>
  </div>
</div>
</body>
</html>
<?php 
}else{
?>
<script>document.location.href="../login/"</script>
<?php 
}
?>
