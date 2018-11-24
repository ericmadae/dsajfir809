 <!-- ./wrapper -->
 <div class="modal fade" id="Ubah_akun">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Akun</h4>
        </div>
        <form id="formUbah">
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
                <input type="password" required="required" class="form-control" id="Password"  placeholder="Password" name="password" required>
              </div>
            </div>
            <div class="form-group">
              <label for="Password" class="col-sm-2 control-label">Konfirmasi Password</label>
              <div class="col-sm-10">
                <input type="password" required="required" class="form-control" id="confir_password" placeholder="Password" name="confir_password" required>
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
        <button type="submit" class="btn btn-primary" id="Simpan">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->