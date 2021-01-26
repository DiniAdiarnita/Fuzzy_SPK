<?php
include "koneksi.php";

if(isset($_POST['insert'])){
    $id_penjualan = $_POST['id_penjualan'];
    $tahun_2013 = $_POST['tahun_2013'];
    $tahun_2014 = $_POST['tahun_2014'];
    $tahun_2015 = $_POST['tahun_2015'];
    $tahun_2016 = $_POST['tahun_2016'];

 $sql = "INSERT INTO `datapenjualan`(`id_penjualan`,`tahun_2013`,`tahun_2014`,`tahun_2015`,`tahun_2016`) VALUES ('$id_penjualan','$tahun_2013','$tahun_2014', '$tahun_2015','$tahun_2016')";
 $qwr = mysqli_query($con, $sql);

 if ($qwr) {
   header ("location: fuzzy.php");
 }
}

if (isset($_POST['Update'])) {
    $id_penjualan = $_POST['id_penjualan'];
    $tahun_2013 = $_POST['tahun_2013'];
    $tahun_2014 = $_POST['tahun_2014'];
    $tahun_2015 = $_POST['tahun_2015'];
    $tahun_2016 = $_POST['tahun_2016'];

  $sql = "UPDATE `datapenjualan` SET `tahun_2013`='$tahun_2013',`tahun_2014`='$tahun_2014',`tahun_2015`='$tahun_2015',`tahun_2016`='$tahun_2016' WHERE  `id_penjualan`='$id_penjualan'";
  $qwr = mysqli_query($con, $sql);

  if ($qwr) {
    header ("location: fuzzy.php");
  }
}
if (isset($_POST['delete'])) {
  $id_penjualan = $_POST['id_penjualan'];
  $sql = 'delete from tahun_2015 where id_penjualan ='."'".$id_penjualan."'";
  $qwr = mysqli_query($con, $sql);
    header ("location: fuzzy.php");
}

 ?>
