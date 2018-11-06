
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
  	body{
  		background: url('<?= base_url('assets/backend') ?>/dist/img/bg_login.jpg')
  	}
  </style>
</head>
<body class="hold-transition login-page" style="background: url('<?= base_url('assets/backend') ?>/dist/img/bg_login.jpg');">
<div class="login-box">
  <div class="login-logo">
    <img style="height: 180px; width: 200px" src="<?= base_url('assets/backend') ?>/dist/img/logo_smd.png">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  	<div class="text-center h1">Login</div>
  	<br>
    <?php echo form_open('login/aksi_login'); ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select name="jabatan" class="form-control">
        	<option value="">Pilih jabatan.....</option>
        	<option value="admin">Admin</option>
        	<option value="camat">CAMAT</option>
        	<option value="sekretaris">SEKRETARIS</option>
        	<option value="kasubag_pk">KASUBAG PROGRAM dan KEU</option>
        	<option value="kasubag_uk">KASUBAG UMUM ASET dan KEPEG</option>
        	<option value="kasi_tp">KASI TATA PEMERINTAH</option>
        	<option value="kasi_pmd">KASI PMD</option>
        	<option value="kasi_sos">KASI SOSIAL</option>
        	<option value="kasi_pu">KASI PELAYANAN UMUM</option>
        	<option value="kasi_tr">KASI TRANTIBUN</option>
        </select>
        <span class="form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-offset-8 col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
  <?= form_close(); ?>
    <p class="login-box-msg text-danger"><?= $this->session->flashdata('gagal'); ?></p>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= base_url('assets/backend') ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/backend') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url('assets/backend') ?>/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
