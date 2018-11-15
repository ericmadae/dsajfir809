<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Pelayanan</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<?= form_open('pelayanan/ubahdata/'.$info['id']); ?>
	<div class="form-horizontal">
		<div class="box-body">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Pelayanan</label>

				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pelayanan" name="pelayanan" value="<?= $info['pelayanan'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Syrat - Syarat</label>

				<div class="col-sm-10">
					<textarea name="persyaratan" id="texteditor" class="form-control" placeholder="Isi persyaratan disini.."><?= $info['persyaratan'] ?></textarea>
				</div>
			</div>

		</div>
		<!-- /.box-body -->
		<div class="box-footer">
      <a href="<?= base_url('pelayanan') ?>" class="btn btn-primary">Kembali</a>
			<button type="submit" class="btn btn-success pull-right">Ubah</button>
		</div>
		<!-- /.box-footer -->
	</div>
	<?= form_close(); ?>
</div>

<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <div class="box-title">Daftar Agenda</div>
    </div>
    <div class="box-body">
      <table class="table table-bordered table-striped" id="example1">
        <thead>
          <tr>
            <th>No</th>
            <th>Pelayanan</th>
            <th>Persyratan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Pelayanan</th>
            <th>Persyaratan</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1; foreach ($pelayanan as $row): ?>
            <tr>
              <td><?= $i++ ?></td>
              <td width="15%"><?= $row['pelayanan']; ?></td>
              <td width="60%"><?= $row['persyaratan'] ?></td>
              <td width="15%">
                <div class="btn-group pull-right">
                  <a href="<?= base_url('pelayanan/lihatdata/'.$row['id']) ?>" class="btn btn-success">Ubah</a>
                  <a href="<?= base_url('pelayanan/hapusdata/'.$row['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                </div>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>