<?php
include "koneksi.php";



if(isset($_POST['insert'])){
  $id_penjualan = $_POST['id_penjualan'];
  $tahun_2015 = $_POST['tahun_2015'];
  $banyak = $_POST['banyak'];
  $sedang = $_POST['sedang'];
  $sedikit = $_POST['sedikit'];

 $sql = "CALL 2015()";
 $qwr = mysqli_query($con, $sql); 
 
 if ($qwr) {
   header ("location: fuzzy.php");
 }
}
?>
