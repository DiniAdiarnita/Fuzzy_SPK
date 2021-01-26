<?php
include "koneksi.php";

 $sql = "CALL 2016()";
 $qwr = mysqli_query($con, $sql);

if(isset($_POST['insert'])){
  $id_penjualan = $_POST['id_penjualan'];
  $tahun_2016 = $_POST['tahun_2016'];
  $banyak = $_POST['banyak'];
  $sedang = $_POST['sedang'];
  $sedikit = $_POST['sedikit'];

 $sql = "CALL 2014()";
 $qwr = mysqli_query($con, $sql);
 if ($qwr) {
   header ("location: fuzzy.php");
 }
}
?>
