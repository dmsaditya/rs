<?php
if(!isset($_SESSION)) {
     session_start();
}
if(!isset($_SESSION['username'])){
?>
<script>document.location.href="../login/"</script>
<?php 
}

$host="localhost";
$user="root"; 
$password=""; 
$database="hospital"; 

$koneksi=mysql_connect($host,$user,$password); 

mysql_select_db($database,$koneksi); 

if($koneksi){ 
}else{ 
 echo "koneksi ke database mysql gagal"; 
} 

?>
