<?php if (isset($info)): ?>
	<div class="box box-primary">
		<div class="box-header with-border">
			<div class="box-title"><?= $info->jabatan ?></div>
		</div>
		<div class="box-body">
			<?= form_open_multipart('organisasi/ubahinfo/'.$info->id); ?>
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="Nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama" placeholder="Nama" name="nama" value="<?= $info->nama ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="NIP" placeholder="NIP" name="nip" value="<?= $info->nip ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIK" class="col-sm-2 control-label">NIK</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="NIK" placeholder="NIK" name="nik" value="<?= $info->nik ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Foto" class="col-sm-2 control-label">Foto</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="Foto" name="foto" required>
                    <input type="text" name="nm_foto" value="<?= $info->foto ?>" hidden>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('organisasi') ?>" class="btn btn-default">Kembali</a>
                <button type="submit" class="btn btn-success pull-right">Ubha</button>
              </div>
              <!-- /.box-footer -->
            </div>
          </div>
          <!-- /.box -->
		<?= form_close(); ?>
	</div>
<?php endif ?>

<div class="box box-primary">
	<div class="box-header with-border" style="font-size: 24px">
		<div class="box-title">Struktur Organisasi</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped" id="#example1">
			<thead>
				<th>No</th>
				<th>Jabatan</th>
				<th>Nama</th>
				<th>NIK</th>
				<th>NIP</th>
				<th>Foto</th>
				<th>Aksi</th>	
			</thead>
			<tfoot>
				<th>No</th>
				<th>Jabatan</th>
				<th>Nama</th>
				<th>NIK</th>
				<th>NIP</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tfoot>
			<tbody>
				<?php $i=1; foreach ($organisasi as $row): ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row['jabatan'] ?></td>
					<td><?= $row['nama'] ?></td>
					<td><?= $row['nip'] ?></td>
					<td><?= $row['nik'] ?></td>
					<td><img src="<?= base_url('assets/image/pemerintahan/'.$row['foto']) ?>" alt="foto" style="height: 100px; width: 70px;"></td>
					<td><a href="<?= base_url('organisasi/ubahdata/'.$row['id']) ?>" class="btn btn-block btn-success">Ubah</a></td>
				</tr> 
			<?php endforeach ?>
		</tbody>

	</table>
</div>
</div>
