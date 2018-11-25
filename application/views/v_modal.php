       <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Akun</h4>
        </div>
        <form id="formUbahAkun" novalidate>
      <div class="modal-body">
        <!--form -->
        <div class="form-horizontal">
          <div class="box-body">
            <input type="text" name="id" value="" id="id_l" hidden>
            <div class="form-group">
              <label for="Username" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="Username" placeholder="Username" name="username" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="Jabatan" class="col-sm-2 control-label">Jabatan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Jabatan" placeholder="Username" name="jabatan"  value="" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="Password" class="col-sm-2 control-label">Password Baru</label>
              <div class="col-sm-10">
                <input type="password" required="required" class="form-control" id="Password" placeholder="Password" name="password" required>
              </div>
            </div>
            <div class="form-group">
              <label for="Password" class="col-sm-2 control-label">Konfirmasi Password</label>
              <div class="col-sm-10">
                <input type="password" required="required" class="form-control" id="confir_password"  placeholder="Password" name="confir_password" required>
              </div>
            </div>
            <div class="form-group text-center text-danger">
              <span id="error"></span>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- endForm -->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="Simpan" disabled>Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</button>
      </div>
    </form>
    <!-- jQuery 3 -->
<script src="<?= base_url('assets/backend') ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/backend') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
  $(document).ready(function() {
  $("#confir_password").change(function() {
    var p1 = $("#confir_password").val();
    var p2 = $("#Password").val();

    if (p1 != p2) {
      $("#error").text('Konfirmasi password salah');
      $(".modal-footer #Simpan").attr('disabled', 'disabled');
    }else{
      $("#error").text('');
       $(".modal-footer #Simpan").attr('disabled', false);
    }

  });
    
  });
      $.ajax({
        url: '<?= base_url('modal/getData') ?>',
        type: 'GET',
      })
      .done(function(res) {
        var hasil = JSON.parse(res);
        $(".modal-body #id_l").val(hasil.id);
        $(".modal-body #Username").val(hasil.username);
        $(".modal-body #Jabatan").val(hasil.jabatan);
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
    $(document).ready(function() {
      $("#formUbahAkun").on('submit', function(event) {
        event.preventDefault();
        $.ajax({
          url: '<?= base_url('modal/ubahakun') ?>',
          type: 'POST',
          data: $("#formUbahAkun").serialize(),
        })
        .done(function(data) {
         console.log(data);
         location.reload();
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");

        });
        
      });
    });
    
</script>
<script>
  $(".close").click(function() {
    location.reload();
  });
   $("#close").click(function() {
    location.reload();
  });
</script>
