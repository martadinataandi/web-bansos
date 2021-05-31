
<?php 
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
header("location:index.php?pesan=gagal");
}
 
?>

<?php include 'koneksi_penyerapan.php'; ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bansos Region IX/ Kalimantan</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Bansos</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Beranda</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#Program Bansos">Program Bansos</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#Administrasi">Adminitrasi</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#Progres Penyaluran">Proges Penyaluran</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#Sebaran Agen">Sebaran Agen Bansos</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#Dokumentasi">Dokumentasi</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Contact</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="Index.php">Logout</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1">Selamat Datang Di Dashboard Bansos</h1>
        <h1 class="mb-1">Region IX Kalimantan</h1>
        <h3 class="mb-5">
          <br></br>
          <em>Sebuah Website Dari Bansos Region IX Kalimantan</em>
        </h3>
      </div>
    </header>

    <!-- Program Bansos -->
    <section class="content-section text-white" id="Program Bansos">
      <div class="container text-center">
        <h2>Program Bansos</h2>
        <button class="hover" type="button" data-toggle="modal" data-target="#PKH">Program Keluarga Harapan</button>
        <button class="hover" type="button" data-toggle="modal" data-target="#Sembako">Program Sembako</button>
        <button class="hover" type="button" data-toggle="modal" data-target="#Tagana">Tali Asih Tagana</button>
        <button class="hover" type="button" data-toggle="modal" data-target="#Pelopor-Perdamaian"> Tali Asih Pelopor Perdamaian</button>
      </div>
    </section>

    <!-- Jenis-jenis Bantuan -->
    <div class="modal" tabindex="-1" id="PKH">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Program Keluarga Harapan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="jenisbantuan"><strong>Program Keluarga Harapan</strong> ditetapkan untuk mendukung pelaksanaan
              penyaluran program perlindungan sosial yang terencana, terarah, dan
              berkelanjutan dalam bentuk Program Keluarga Harapan (PKH) sebagai bantuan
              sosial bersyarat yang bertujuan untuk mengurangi beban pengeluaran dan
              meningkatkan pendapatan keluarga miskin dan rentan.</p>
            <p class="jenisbantuan">Penyaluran bantuan
              sosial PKH sebagai salah satu upaya mengurangi kemiskinan dan kesenjangan
              dengan mendukung perbaikan aksesibilitas terhadap layanan kesehatan,
              pendidikan, dan kesejahteraan sosial guna meningkatkan kualitas hidup
              keluarga miskin dan rentan.</p>
            <nav class="nav justify-content-center">
              <a class="nav-link active" aria-current="page" href="grafik PKH.html"><strong>Jumlah KPM Per Provinsi</strong></a>
            </nav> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" tabindex="-1" id="Sembako">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"> Program Sembako</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="jenisbantuan"><strong>Program Sembako</strong> adalah program bantuan sosial pangan yang 
                merupakan pengembangan dari bantuan pangan nontunai dengan penambahan nilai bantuan dan jenis bahan pangan. Program Sembako diberikan melalui KKS yang memiliki fitur uang elektronik dan/atau tabungan serta dapat digunakan sebagai media penyaluran bantuan sosial.
            </p>
            <nav class="nav justify-content-center">
              <a class="nav-link active" aria-current="page" href="grafik Sembako.html"><strong>Jumlah KPM Per Provinsi</strong></a>
            </nav> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" id="Tagana">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Program Tagana</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="jenisbantuan"><strong> Taruna Siaga Bencana</strong>  selanjutnya disingkat TAGANA adalah Relawan sosial 
                atau tenaga kesejahteraan sosial berasal dari masyarakat yang memiliki kepedulian dan aktif dalam penanggulangan bencana bidang perlindungan sosial dengan tugas untuk melaksanakan penanggulangan bencana baik pada pra bencana, saat tanggap darurat maupun pasca bencana dan tugas-tugas penanganan permasalahan sosial lainnya yang terkait dengan penanggulangan bencana.</p>
            <p class="jenisbantuan"> Tali Asih bukan Honor, merupakan penanda “Ikatan Emosional” Kementerian Sosial dengan
                perpanjangannya baik di Provinsi maupun di Kabupaten/ Kota dengan relawan TAGANA Indonesia yang sangat luar biasa melaksanakan giat kemanusiaan dalam penanggulangan Bencana tidak terbatas Saat Bencana, tetapi juga Pra hingga Pasca Bencana.</p>
            <nav class="nav justify-content-center">
              <a class="nav-link active" aria-current="page" href="grafik Tagana.html"><strong>Jumlah KPM Per Provinsi</strong></a>
            </nav>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" id="Pelopor-Perdamaian">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Program Tenaga Pelopor Perdamaian</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="jenisbantuan"><strong>Tenaga Pelopor Perdamaian</strong> adalah para relawan lokal yang bekerja dengan mengedepankan sikap-sikap humanis, selalu ramah, bertutur lembut dan berlapang dada serta mampu melakukan pendekatan strategi yang tepat untuk mencegah konflik Sosial antar masyarakat.</p>
              <p class="jenisbantuan"> Tali Asih bukan Honor, merupakan penanda “Ikatan Emosional” Kementerian Sosial dengan
                perpanjangannya baik di Provinsi maupun di Kabupaten/ Kota dengan relawan Tenaga Pelopor Perdamaian Indonesia yang sangat luar biasa melaksanakan giat kemanusiaan dalam memelihara perdamaian dan mengidentifikasi potensi konflik di masyarakat.</p>
              <nav class="nav justify-content-center">
                <a class="nav-link active" aria-current="page" href="grafik Pelopor Perdamaian.html"><strong>Jumlah KPM Per Provinsi</strong></a>
              </nav>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>

    <!-- Administarsi -->
    <section class="content-section text-white" id="Administrasi">
      <div class="container text-center">
        <h2>Administrasi</h2>
        <button class="hover" type="button" data-toggle="modal" data-target="#CIF">Cleansing CIF</button>
        <button class="hover" type="button" data-toggle="modal" data-target="#OpenItem">Open Item</button>
      </div>
    </section>

    <!-- Jenis-jenis Administrasi -->
    <div class="modal" tabindex="-1" id="CIF">
      <div class="modal-dialog modal-lg text-white">
        <div class="modal-content bg-transparent">
          <div class="modal-header">
            <h5 class="modal-title">Cleansing CIF Bansos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-responsive-lg text-white table-bordered">
              <thead class="bg-primary text-center">
                <tr>
                  <th scope="col">Area</th>
                  <th scope="col">Cabang</th>
                  <th scope="col">Target CIF</th>
                  <th scope="col">Total Cleansing Cabang + GVP 1</th>
                  <th scope="col">GAP</th>
                  <th scope="col">%</th>
                </tr>
              </thead>
              <tbody>
                  <?php         
                  $data_penyerapan = mysqli_query($koneksi,"select * from cleansing_CIF");
                  $nomor = 1;
                  while($d = mysqli_fetch_array($data_penyerapan)){
                  ?>
                <tr>
                  <td><?php echo $d['Area']; ?></td>
                  <td><?php echo $d['Cabang']; ?></td>
                  <td class="text-center"><?php echo $d['Target CIF']; ?></td>
                  <td class="text-center"><?php echo $d['Total Cleansing']; ?></td>
                  <td class="text-center"><?php echo $d['GAP']; ?></td>
                  <td class="text-center"><?php echo $d['%']; ?></td>
                </tr>
                <?php
                }
                ?>           
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" tabindex="-1" id="OpenItem">
      <div class="modal-dialog text-center modal-xl">
        <div class="modal-content bg-transparent">
          <div class="modal-header text-white">
            <h5 class="modal-title">Open Item Bansos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table-responsive table-bordered">
              <thead class="bg-primary text-white text-center">
                <tr>
                  <th rowspan="3">Area</th>
                  <th rowspan="3">Jumlah Open Item</th>
                  <th colspan="10">Status Reimbursement</th>
                  <th rowspan="3">Jumlah Nominal</th>
                </tr>
                <tr>
                    <th colspan="2">Cabang</th>
                    <th colspan="2">Area</th>
                    <th colspan="2">Region</th>
                    <th colspan="2">GVP</th>
                    <th colspan="2">Proses Jurnal Balik</th>
                </tr>
                <tr>
                    <th>Jumlah Item</th>
                    <th>Item Tertua</th>
                    <th>Jumlah Item</th>
                    <th>Item Tertua</th>
                    <th>Jumlah Item</th>
                    <th>Item Tertua</th>
                    <th>Jumlah Item</th>
                    <th>Item Tertua</th>
                    <th>Jumlah Item</th>
                    <th>Item Tertua</th>
                </tr>
              </thead>
              <tbody class="text-white">
                  <?php         
                  $data_penyerapan = mysqli_query($koneksi,"select * from open_item");
                  $nomor = 1;
                  while($d = mysqli_fetch_array($data_penyerapan)){
                  ?>
                <tr>
                  <td><?php echo $d['Area']; ?></td>
                  <td class="text-center"><?php echo $d['Total Open Item']; ?></td>
                  <td class="text-center"><?php echo $d['Jumlah Item Cabang']; ?></td>
                  <td class="text-center"><?php echo $d['Agin Tertua Cabang']; ?></td>
                  <td class="text-center"><?php echo $d['Jumlah Item Area']; ?></td>
                  <td class="text-center"><?php echo $d['Agin Tertua Area']; ?></td>
                  <td class="text-center"><?php echo $d['Jumlah Item Region']; ?></td>
                  <td class="text-center"><?php echo $d['Agin Tertua Region']; ?></td>
                  <td class="text-center"><?php echo $d['Jumlah Item GVP']; ?></td>
                  <td class="text-center"><?php echo $d['Agin Tertua GVP']; ?></td>
                  <td class="text-center"><?php echo $d['Jumlah Item Jurnal Balik']; ?></td>
                  <td class="text-center"><?php echo $d['Agin Tertua Jurnal Balik']; ?></td>
                  <td class="text-center"><?php echo $d['Jumlah Nominal']; ?></td>
                </tr>
                <?php
                }
                ?>           
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Progres Penyaluran -->
    <section class="content-section text-white text-center" id="Progres Penyaluran">
      <div class="container">
        <div class="content-section-heading">
          <h2>Progres Penyaluran</h2>
        </div>
        <div class="row">
          <div class="col order-first">
            <a class="btn"  data-toggle="modal" data-target="#KalimantanBarat">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid" src="img/Kalimantan Barat.png" alt="">
              </span>
              <p>Kalimantan Barat</p>
            <a/>
          </div>
          <div class="col">
            <a class="btn"  data-toggle="modal" data-target="#KalimantanSelatan">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img id class="img-fluid" src="img/Kalimantan Selatan.png" alt="">
              </span>
              <p>Kalimantan Selatan</p>
            </a>
          </div>
          <div class="col">
            <a class="btn"  data-toggle="modal" data-target="#KalimantanTengah">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img id class="img-fluid" src="img/Kalimantan Tengah.png" alt="">
              </span>
              <p>Kalimantan Tengah</p>
            </a>
          </div>
          <div class="col">
            <a class="btn"  data-toggle="modal" data-target="#KalimantanTimur">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img id class="img-fluid" src="img/Kalimantan Timur.png" alt="">
              </span>
              <p>Kalimantan Timur</p>
            </a>
          </div>
           <div class="col order-last">
            <a class="btn"  data-toggle="modal" data-target="#KalimantanUtara">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img id class="img-fluid" src="img/Kalimantan Utara.png" alt="">
              </span>
              <p>Kalimantan Utara</p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Sebaran Agen -->
    <section class="content-section bg-white text-center" id="Sebaran Agen">
      <div class="container">
        <div class="content-section-heading">
          <h2>Sebaran Agen Bansos</h2>
            <iframe title="Sebaran Agen Bansos Kalimantan" aria-label="Map" id="datawrapper-chart-GBMVj" src="https://datawrapper.dwcdn.net/GBMVj/6/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="497"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
            </script>
        </div>
      </div>
    </section>  

    <!-- Portfolio -->
    <section class="content-section bg-white" id="Dokumentasi">
      <div class="container">
        <div class="content-section-heading text-center">
          <h2>Dokumentasi</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran1.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran4.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran5.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran6.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran7.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran9.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran10.jpg" alt="">
            </a>
          </div>
           <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran11.jpg" alt="">
            </a>
          </div>
           <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran13.jpg" alt="">
            </a>
          </div>
           <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran14.jpg" alt="">
            </a>
          </div>
           <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran15.jpg" alt="">
            </a>
          </div>
           <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran16.jpg" alt="">
            </a>
          </div>
           <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran17.jpg" alt="">
            </a>
          </div>
           <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran18.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3">
            <a class="portfolio-item" href="#!">
              <img class="img-fluid" src="img/foto penyaluran20.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center" id="contact">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#!">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#!">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#!">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Region IX Kalimantan 2020</p>
      </div>
    </footer>

    <!-- Kalbar -->
    <div class="modal fade" id="KalimantanBarat" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="KalimantanBarat" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content bg-transparent">
          <div class="modal-header text-white text-center">
            <h5 class="text-title" id="KalimantanBarat">Kalimantan Barat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <!-- Default Card Example -->
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#PKH" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="PKH">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima PKH</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="PKH">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalbar_pkh");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                              $jumlah_barang = mysqli_num_rows($data_penyerapan);
                              ?>
                              <tr class="text-center">
                                <td colspan="2">Grand Total</td>
                                <td><?php echo $jumlah_barang; ?></td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Sembako" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Sembako">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Sembako</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Sembako">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalbar_sembako");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Tagana" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="collapseCardExample">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tagana</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Tagana">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalbar_tagana");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Pelopor-Perdamaian" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Pelopor-Perdamaian">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tenaga Pelopor Perdamaian</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Pelopor-Perdamaian">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalbar_pelopor_perdamaian");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Kalsel -->
    <div class="modal fade" id="KalimantanSelatan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="KalimantanSelatan" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content bg-transparent">
          <div class="modal-header text-white text-center">
            <h5 class="modal-title" id="KalimantanSelatan">Kalimantan Selatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <!-- Default Card Example -->
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#PKH" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="PKH">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima PKH</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="PKH">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalsel_pkh");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Sembako" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Sembako">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Sembako</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Sembako">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalsel_sembako");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Tagana" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Tagana">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tagana</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Tagana">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalsel_tagana");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Pelopor-Perdamaian" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Pelopor-Perdamaian">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tenaga Pelopor Perdamaian</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Pelopor-Perdamaian">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalsel_pelopor_perdamaian");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>  

    <!-- Kalteng -->
    <div class="modal fade" id="KalimantanTengah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="KalimantanTengah" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content bg-transparent">
          <div class="modal-header text-white text-center">
            <h5 class="modal-title" id="KalimantanTengah">Kalimantan Tengah</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <!-- Default Card Example -->
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#PKH" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="PKH">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima PKH</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="PKH">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalteng_pkh");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Sembako" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Sembako">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah KPM Sembako</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Sembako">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalteng_sembako");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Tagana" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Tagana">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tagana</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Tagana">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalteng_tagana");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Pelopor-Perdamaian" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Pelopor-Perdamaian">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tenaga Pelopor Perdamaian</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Pelopor-Perdamaian">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalteng_pelopor_perdamaian");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>  

    <!-- Kaltim -->
    <div class="modal fade" id="KalimantanTimur" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="KalimantanTimur" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content bg-transparent">
          <div class="modal-header text-white text-center">
            <h5 class="modal-title" id="KalimantanTimur">Kalimantan Timur</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <!-- Default Card Example -->
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#PKH" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="PKH">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima PKH</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="PKH">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kaltim_pkh");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Sembako" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Sembako">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Sembako</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Sembako">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kaltim_sembako");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Tagana" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Tagana">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tagana</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Tagana">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kaltim_tagana");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Pelopor-Perdamaian" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Pelopor-Perdamaian">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tenaga Pelopor Perdamaian</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Pelopor-Perdamaian">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kaltim_pelopor_perdamaian");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>  

    <!-- Kalut -->
    <div class="modal fade" id="KalimantanUtara" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="KalimantanUtara" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content bg-transparent">
          <div class="modal-header text-white text-center">
            <h5 class="modal-title" id="KalimantanUtara">Kalimantan Utara</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <!-- Default Card Example -->
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#PKH" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="PKH">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima PKH</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="PKH">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalut_pkh");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Sembako" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Sembako">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Sembako</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Sembako">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalut_sembako");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Tagana" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Tagana">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tagana</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Tagana">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalut_tagana");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#Pelopor-Perdamaian" class="d-block card-header py-2" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="Pelopor-Perdamaian">
                     <div class="row no-gutters align-items-center">
                      <div class="col mr-1">
                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Penerima Tenaga Pelopor Perdamaian</h5>
                      </div>
                      <div class="col-auto">
                        <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </div>
                    </div>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse of" id="Pelopor-Perdamaian">
                    <div class="card-body">
                      <div class="table-responsive-lg">
                        <table class="table table-bordered">
                          <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kota/Kabupaten</th>
                              <th scope="col">Jumlah Penerima</th>
                              <th scope="col">Penerima Bertransaksi</th>
                              <th scope="col">Progres</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php         
                            $data_penyerapan = mysqli_query($koneksi,"select * from kalut_pelopor_perdamaian");
                            $nomor = 1;
                            while($d = mysqli_fetch_array($data_penyerapan)){
                              ?>
                              <tr>
                                <td class="text-center"><?php echo $nomor++; ?></td>
                                <td><?php echo $d['Kota/ Kabupaten']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima']; ?></td>
                                <td class="text-center"><?php echo $d['Jumlah Penerima Bertransaksi']; ?></td>
                                <td><div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style=" width:<?php echo $d['%']; ?>"><?php echo $d['%']; ?></div>
                                    </div>
                                </td>
                              </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> 
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
  </body>
</html>
