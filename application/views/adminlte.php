<?php 
$username = $this->session->userdata('username');
$jabatan = $this->session->userdata('jabatan');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Sumedang Selatan - 
    <?php if (isset($menu)): ?>
     <?= $menu ?> 
     <?php endif ?> - 
     <?php if (isset($submenu)): ?>
       <?= $submenu ?> 
     <?php endif ?>

   </title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/bower_components/font-awesome/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/bower_components/Ionicons/css/ionicons.min.css">
   <!-- jvectormap -->
   <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/bower_components/jvectormap/jquery-jvectormap.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/dist/css/skins/_all-skins.min.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

   <!-- Google Font -->
   <link rel="stylesheet"
   href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 </head>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SMDS</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sumedang Selatan</b></span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/backend') ?>/dist/img/logo_smd2.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= $username ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url('assets/backend') ?>/dist/img/logo_smd2.png" class="img-circle" alt="User Image">

                  <p>
                    <?= $username.' - '.$jabatan ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <button type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#Ubah-akun">Ubah akun</button>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('login/logout') ?>" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->

    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url('assets/backend') ?>/dist/img/logo_smd2.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?= $username ?></p>
            <span><i class="fa fa-circle text-success"></i> Online</span>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">NAVIGASI</li>
          <li id="dashboard" >
            <a href="<?= base_url('dashboard') ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>

          <li id="profil" class="treeview">
            <a href="#">
              <i class="fa fa-id-card"></i>
              <span>Profil</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="sejarah"><a href="<?= base_url('sejarah') ?>"><i class="fa fa-book"></i> Sejarah</a></li>
              <li id="visimisi"><a href="<?= base_url('visimisi') ?>"><i class="fa fa-flag"></i> Visi Misi</a></li>
            </ul>
          </li>

         
          <li id="profil" class="treeview">
            <a href="#">
              <i class="fa fa-institution"></i>
              <span>Pemerintahan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="organisasi"><a href="<?= base_url('organisasi') ?>"><i class="fa fa-sitemap"></i> Struktur Organisasi</a></li>
              <li id="kepgawaian"><a href="<?= base_url('kepegawaian') ?>"><i class="fa fa-users"></i> Kepegawaian</a></li>
              <li id="Keulurahan"><a href="<?= base_url('Keulurahan') ?>"><i class="fa  fa-code-fork"></i> Kelurahan</a></li>
            </ul>
          </li>

          <li id="pelayanan" >
            <a href="<?= base_url('pelayanan') ?>">
              <i class="fa fa-info"></i> <span>Pelayana</span>
            </a>
          </li>

          <li id="profil" class="treeview">
            <a href="#">
              <i class="fa  fa-line-chart"></i>
              <span>Statistik</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="organisasi"><a href="<?= base_url('organisasi') ?>"><i class="fa fa-sitemap"></i> Struktur Organisasi</a></li>
              <li id="kepgawaian"><a href="<?= base_url('kepgawaian') ?>"><i class="fa fa-users"></i> Kepegawaian</a></li>
              <li id="Keulurahan"><a href="<?= base_url('Keulurahan') ?>"><i class="fa  fa-code-fork"></i> Kelurahan</a></li>
            </ul>
          </li>

          <li id="publikasi" class="treeview">
            <a href="#">
              <i class="fa  fa-list-alt"></i>
              <span>Publikasi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li id="berita" ><a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o"></i> Berita</a></li>
                <li id="agenda" ><a href="<?= base_url('agenda') ?>"><i class="fa fa-calendar"></i> Agenda</a></li>
                <li id="galeri" ><a href="<?= base_url('galeri') ?>"><i class="fa fa-image"></i> Galeri</a></li>          
                <li id="video" ><a href="<?= base_url('video') ?>"><i class="fa fa-video-camera"></i> Video</a></li>
            </ul>
         </li>
                <li id="Kontak" ><a href="<?= base_url('layana') ?>"><i class="fa fa-commenting"></i> Kontak Masuk</a></li>


      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <?php if (isset($menu)): ?>
           <?= ucfirst($menu).' \ ' ?> 
         <?php endif ?>
         <?php if (isset($submenu)): ?>
           <?= ucfirst($submenu) ?> 
         <?php endif ?>
       </h1>
       <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">
          <?php if (isset($submenu)): ?>
            <?= ucfirst($submenu) ?> 
            <?php endif ?></li>
          </ol>
        </section>

        <?php if ($this->session->flashdata('infoss')): ?>
         <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i><?= $this->session->flashdata('infoss') ?> </h4>
        </div> 
      <?php endif ?>
      <?php if ($this->session->flashdata('infoerr')): ?>
       <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i><?= $this->session->flashdata('infoerr') ?> </h4>
      </div> 
    <?php endif ?>

    <!-- Main content -->
    <section class="content">
     <?= $contents ?>
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Web Kecamatan</b> V.1.0.0
  </div>
  <strong>STMIK SUMEDANG</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">

    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>

 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="<?= base_url('assets/backend') ?>/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?= base_url('assets/backend') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- DataTables -->
 <script src="<?= base_url('assets/backend') ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="<?= base_url('assets/backend') ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <!-- FastClick -->
 <script src="<?= base_url('assets/backend') ?>/bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= base_url('assets/backend') ?>/dist/js/adminlte.min.js"></script>
 <!-- Sparkline -->
 <script src="<?= base_url('assets/backend') ?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
 <!-- jvectormap  -->
 <script src="<?= base_url('assets/backend') ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
 <script src="<?= base_url('assets/backend') ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
 <!-- SlimScroll -->
 <script src="<?= base_url('assets/backend') ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- ChartJS -->
 <script src="<?= base_url('assets/backend') ?>/bower_components/chart.js/Chart.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?= base_url('assets/backend') ?>/dist/js/demo.js"></script>
 <!-- Bootstrap WYSIHTML5 -->
 <script src="<?= base_url('assets/backend') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
 <script>
  $('#texteditor').wysihtml5({
    toolbar:{
      "image" : false
    }
  });
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<?php if (isset($menu)): ?>
  <script>
    $(function() {
      $("#<?= $menu ?>").attr('class', 'treeview active menu-open')
    });
  </script>
<?php endif ?>

<?php if (isset($submenu)): ?>
  <script>
    $(function() {
      $("#<?= $submenu ?>").attr('class', 'active text-dangger')
    });
  </script>
<?php endif ?>


<script>
  $("#confir_password").change(function() {
    $p1 = $("#confir_password").val();
    $p2 = $("#Password").val();

    if ($p1 != $p2) {
      $("#error").text('Konfirmasi password salah');
    }
  });
</script>


<!-- load file js lain -->
<?php if (isset($conjs)): ?>
  <?php $this->load->view($conjs); ?>  
<?php endif ?>
</body>
</html>
