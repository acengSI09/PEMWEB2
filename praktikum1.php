<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>HALAMAN UTAMA</h1>
          </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PRAKTIKUM 1</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
// definisikan variables
 $nama = 'Aceng';
 $umur = 13;
 $berat = 22.4;

 echo 'Nama : ' . $nama;
 echo '<br/>Umur : ' . $umur.' Tahun';
 echo '<br/>Berat : '.$berat.' Kg';

 echo "<br/>Hello $nama Jangan Lupa Hastag Slebew";

 echo "<br/>";

 //definiskan variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo "<br/>";

// definisikan konstansta
define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');

 $jari = 8;
 $luas = PHI * $jari * $jari;
 $kll = 2 * PHI * $jari;

 echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
 echo '<br/>Kelilingnya : '.$kll;
?>
<hr/>
<?php
echo 'Nama databasenya : '.DBNAME;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;

?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>