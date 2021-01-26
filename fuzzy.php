<?php
include "koneksi.php";
?>

<!doctype html>
<html class="no-js" lang="en"> 
<head>
        <meta charset="utf-8">
        <title>Made Three</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.rtl.min.css" />
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.rtl.min.css" />
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.rtl.min.css" />
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.rtl.min.css" />
<!--         
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> -->

        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css"/>

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="100">

        <div class="culmn">
            <!--Home page style-->
            <nav class="navbar navbar-default bootsnav navbar-fixed no-background white">

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="assets/images/logo.png" class="logo" alt="">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->
                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                              <!-- <li><a href="fuzzy.php">Home</a></li>                     -->
                            <li><a href="fuzzy.php">Master Data</a></li>
                            <li><a href="fuzzy.php">Lihat Data</a></li>
                            <li><a href="2013.php">Tahun 2013</a><li>
                            <li><a href="2014.php">Tahun 2014</a><li>
                            <li><a href="2015.php">Tahun 2015</a><li>
                            <li><a href="2016.php">Tahun 2016</a><li>
                            <li><a href="fuzzy.php">LAPORAN</a></li> 
                            <li><a href="laporan_akhir.php">LAPORAN AKHIR</a></li> 
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 
            </nav>
            <!--Home Sections-->
            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">     
                                <div class="hello">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h1 class="text-yellow">Sistem Pendukung Keputusan</h1>
                                            <h3 class="text-white text-uppercase">Dini Adiarnita </h3>
                                            <h3 class="text-white text-uppercase">Penjualan Rumah PT. Gracia Herald</h3>
                                        </div>
                                    </div><!-- End off slid item -->
                                </div>
                            </div>
                        </div>
                        <a class="mouse-scroll" href="#about"> 
                            <span class="mouse">
                                <span class="mouse-movement"></span>
                            </span>
                            <span class="mouse-message fadeIn">Explore</span> <br />
                            <!--<i class="fa fa-angle-down m-top-10 fadeIn mouse-message"></i>--> 
                        </a>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

            <!--Business Section-->
            <section id="service" class="service bg-grey roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_service">
                            <div class="col-md-6">
                                <div class="service_slid">
                                    <div class="slid_shap bg-yellow"></div>
                                    <div class="service_slid_item text-center">
                                        <div class="service_slid_text">
                                            <span class="icon icon icon-tools text-black"></span>
                                            <h5 class="text-black m-top-20">Fuzzy Logic</h5>
                                        </div>
                                        <div class="service_slid_text">
                                            <span class="icon icon icon-sports-2 text-black"></span>
                                            <h5 class="text-black m-top-20">Fuzzy Logic</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="service_item sm-m-top-50">
                                    <div class="service_content">
                                        <div class="card-body">
                                            <?php
                                                // ngecek apakah memanggil post atau get
                                                if(isset($_GET['id_penjualan'])){
                                                $id_penjualan = $_GET['id_penjualan'];

                                                $sql = "SELECT * from datapenjualan where id_penjualan = '$id_penjualan'";
                                                $qwri = mysqli_query($con , $sql);
                                                $row = mysqli_fetch_array($qwri);

                                                $id_penjualan = $row['id_penjualan'];
                                                $tahun_2013 = $row['tahun_2013'];
                                                $tahun_2014 = $row['tahun_2014'];
                                                $tahun_2015 = $row['tahun_2015'];
                                                $tahun_2016 = $row['tahun_2016'];

                                                }else{
                                                $sql_id = "select max(id_penjualan) AS id_penjualan from datapenjualan WHERE id_penjualan like '%00%'";
                                                $hasil_id = mysqli_query ($con, $sql_id);
                                                if(mysqli_num_rows($hasil_id)>0){
                                                    $row = mysqli_fetch_array($hasil_id);
                                                    $idmax = $row ['id_penjualan'];
                                                    $id_urut = (int) substr ($idmax, 2, 3);
                                                    $id_urut++;
                                                    // sprintf = menambahkan (+)
                                                    $id_penjualan = "00".sprintf("%03s", $id_urut);
                                                }else {
                                                    $id_penjualan = "00001";
                                                }
                                                }
                                            ?>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <form action="proses_datapenjualan.php" method="POST">
                                                            <div class="form-group row">
                                                                <label for="inputPassword" class="col-sm-4 col-form-label">ID Penjualan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="id_penjualan" name="id_penjualan" placeholder="ID Penjualan" value="<?php echo @$id_penjualan?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputPassword" class="col-sm-4 col-form-label">Tahun 2013</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="tahun_2013" name="tahun_2013" placeholder="Angka" value="<?php echo @$tahun_2013?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputPassword" class="col-sm-4 col-form-label">Tahun 2014</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="tahun_2014" name="tahun_2014" placeholder="Angka" value="<?php echo @$tahun_2014?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputPassword" class="col-sm-4 col-form-label">Tahun 2015</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="tahun_2015" name="tahun_2015" placeholder="Angka" value="<?php echo @$tahun_2015?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputPassword" class="col-sm-4 col-form-label">Tahun 2016</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="tahun_2016" name="tahun_2016" placeholder="Angka" value="<?php echo @$tahun_2016?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <?php
                                                                if(isset($_GET['id_penjualan'])){
                                                                    ?>
                                                                    <div class="col-sm-10">
                                                                        <input type="submit" class="btn btn-default m-top-40" value="Update" name="Update">
                                                                    </div>
                                                                    <?php
                                                                }else {
                                                                    ?>
                                                                    <div class="col-sm-10">
                                                                        <input type="submit" class="btn btn-default m-top-40" value="Insert" name="insert">
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->

            <!--About Section-->
        <section id="about" class="about bg-yellow roomy-80">  
            <div class="data-table-area">
                    <div class="container" id="portfolio">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-portfolio ">
                                <div class="data-table-list">
                                <br>
                                    <div class="basic-tb-hd">
                                      <center><h2 class="card-title">Lihat Data</h2></center>
                                    </div>
                                    <div class="table-responsive">
                                    <table id="example1" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col"><center>NO</center></th>
                                        <th scope="col"><center>ID Penjualan</center></th>
                                        <th scope="col"><center>Tahun 2013</center></th>
                                        <th scope="col"><center>Tahun 2014</center></th>
                                        <th scope="col"><center>Tahun 2015</center></th>
                                        <th scope="col"><center>Tahun 2016</center></th>
                                        <th scope="col"><center>Aksi</center></th>
                                    </tr>
                                    </thead>
                                    <tbody> 
                                
                                <?php
                              @$tampil="select * from datapenjualan order by id_penjualan asc";
                              $hasil=mysqli_query($con,$tampil);
                              @$no=1;
                              while ($data=mysqli_fetch_array($hasil)){
                                  ?>
                                      <tr>
                                      <td><center><?php echo @$no; ?></center></td>
                                      <td><center><?php echo @$data[id_penjualan]; ?></center></td>
                                      <td><center><?php echo @$data[tahun_2013]; ?></center></td>
                                      <td><center><?php echo @$data[tahun_2014]; ?></center></td>
                                      <td><center><?php echo @$data[tahun_2015]; ?></center></td>
                                      <td><center><?php echo @$data[tahun_2016]; ?></center></td>

                                        <td style="padding-top:10px; padding-bottom:10px;" >
                                            <center>
                                            <a href="fuzzy.php?id_penjualan=<?php echo $data['id_penjualan'];?>">
                                                <input type="button" value="Edit" class="btn btn-warning">
                                            </a>
                                            
                                            <a href="proses_datapenjualan.php?delete=<?php echo $data['id_penjualan'];?>">
                                            <button type="button" class="btn btn-danger" name="delete" value="<?php echo $data['id_penjualan'];?>">
                                                Delete
                                            </button>
                                            </a>
                                            </center>
                                              </td>
                                        </tr>                                                          
                                  <?php
                                  $no++;
                                }
                                ?>
                                </tbody> 
                            </table>                                                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </section>

    <footer id="contact" class="footer action-lage bg-black p-top-80">
        <!--<div class="action-lage"></div>-->
        <div class="data-table-area">
                    <div class="container" id="portfolio">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-portfolio ">
                                <div class="data-table-list">
                                <br>
                                    <div class="basic-tb-hd">
                                      <center><h3 class="card-title" style="color:#FFFF">LAPORAN</h3></center>
                                    </div>
                                    <div class="table-responsive">
                                    <table id="example7" class="table table-striped" >
                                    <thead>
                                    <tr style="color:#ffcc33">
                                        <th scope="col"><center>NO</center></th>
                                        <th scope="col"><center>Tahun 2013</center></th>
                                        <th scope="col"><center>Tahun 2014</center></th>
                                        <th scope="col"><center>Tahun 2015</center></th>
                                        <th scope="col"><center>Tahun 2016</center></th>
                                        <th scope="col"><center>TH 2013 Banyak</center></th>
                                        <th scope="col"><center>TH 2013 Sedang</center></th>
                                        <th scope="col"><center>TH 2013 Sedikit</center></th>
                                        <th scope="col"><center>TH 2014 Banyak</center></th>
                                        <th scope="col"><center>TH 2014 Sedang</center></th>
                                        <th scope="col"><center>TH 2014 Sedikit</center></th>
                                        <th scope="col"><center>TH 2015 Banyak</center></th>
                                        <th scope="col"><center>TH 2015 Sedang</center></th>
                                        <th scope="col"><center>TH 2015 Sedikit</center></th>
                                        <th scope="col"><center>TH 2016 Banyak</center></th>
                                        <th scope="col"><center>TH 2016 Sedang</center></th>
                                        <th scope="col"><center>TH 2016 Sedikit</center></th>
                                    </tr>
                                    </thead>
                                    <tbody> 
                        <?php
                              @$tampil="select a.id_penjualan,a.tahun_2013,
                              a.tahun_2014,a.tahun_2015,a.tahun_2016,
                              b.banyak,b.sedang,b.sedikit,
                              c.banyak,c.sedang,c.sedikit,
                              d.banyak,d.sedang,d.sedikit, 
                              e.banyak,e.sedang,e.sedikit 
                              from datapenjualan 
                              a join tahun_2013 b on (a.id_penjualan=b.id_penjualan)
                              join tahun_2014 c on (b.id_penjualan=c.id_penjualan) 
                              join tahun_2015 d on (c.id_penjualan=d.id_penjualan)
                              join tahun_2016 e on (d.id_penjualan=e.id_penjualan)
                              " ;
                              $hasil=mysqli_query($con,$tampil);
                              @$no=1;
                              while ($data=mysqli_fetch_array($hasil)){
                                  ?>
                                      <tr>
                                     <td><center><?php echo @$no; ?></center></td>
                                      <td><center><?php echo @$data[tahun_2013]; ?></center></td>
                                      <td><center><?php echo @$data[tahun_2014]; ?></center></td>
                                      <td><center><?php echo @$data[tahun_2015]; ?></center></td>
                                      <td><center><?php echo @$data[tahun_2016]; ?></center></td>
                                      <td><center><?php echo @$data[banyak]; ?></center></td>
                                      <td><center><?php echo @$data[sedang]; ?></center></td>
                                      <td><center><?php echo @$data[sedikit]; ?></center></td>
                                      <td><center><?php echo @$data[banyak]; ?></center></td>
                                      <td><center><?php echo @$data[sedang]; ?></center></td>
                                      <td><center><?php echo @$data[sedikit]; ?></center></td>
                                      <td><center><?php echo @$data[banyak]; ?></center></td>
                                      <td><center><?php echo @$data[sedang]; ?></center></td>
                                      <td><center><?php echo @$data[sedikit]; ?></center></td>
                                      <td><center><?php echo @$data[banyak]; ?></center></td>
                                      <td><center><?php echo @$data[sedang]; ?></center></td>
                                      <td><center><?php echo @$data[sedikit]; ?></center></td>

                                        <!-- <td style="padding-top:10px; padding-bottom:10px;" >
                                        <center>
                                            <a href="proses_2013.php?delete=<?php // echo $data['id_penjualan'];?>">
                                            <button type="button" class="btn btn-danger" name="delete" value="<?php // echo $data['id_penjualan'];?>">
                                                Delete
                                            </button>
                                            </a>
                                        </center>
                                        </td> -->
                                        </tr>                                                            
                                  <?php
                                  $no++;
                                }
                                ?>
                                </tbody> 
                            </table>                                                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <!--<script src="assets/js/jquery.easypiechart.min.js"></script>-->
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <!--<script src="assets/js/slick.js"></script>-->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/js.isotope.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>

        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

<!-- data table -->
<script type="text/javascript">
        $('#example1').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true

        });
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        });
        $('#example3').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        });
        $('#example4').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        });
        $('#example5').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        });
        $('#example6').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        });
        $('#example7').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        });
       
        // $(document).ready( function () {
        //     $('#example1').DataTable();
        // } );
    </script>
    </body>
</html>
