<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Tambah Pegawai</div>
	</div>
	<?= form_open_multipart('kepegawaian/ubahdata/'.$info['id']); ?>
	<div class="box-body">
		<div class="col-md-3">
			<br>
			<br>
			<div class="row text-center">
				<img src="<?= base_url('assets/image/pemerintahan/'.$info['foto']) ?>" alt="" class="img-thumbnail" style="height: 150px;width: 120px">
			</div>
			<br>
			<div class="row">
				<div class="form-group">
					<input type="file" class="form-control" name="foto">
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<!-- form start -->
			<div class="form-horizontal">
				<div class="box-body">
					<div class="form-group">
						<label for="Nama" class="col-sm-2 control-label">Nama</label>

						<div class="col-sm-10">
							<input type="text" class="form-control" id="Nama" placeholder="Nama" name="nama" value="<?= $info['nama'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="NIP" class="col-sm-2 control-label">NIP</label>

						<div class="col-sm-10">
							<input type="text" class="form-control" id="NIP" placeholder="NIP" name="nip" value="<?= $info['nip'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="NIK" class="col-sm-2 control-label">NIK</label>

						<div class="col-sm-10">
							<input type="text" class="form-control" id="NIK" placeholder="NIK" name="nik" value="<?= $info['nik'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="Jabatan" class="col-sm-2 control-label">Jabatan</label>

						<div class="col-sm-10">
							<input type="text" class="form-control" id="Jabatan" placeholder="Jabatan" name="jabatan" value="<?= $info['jabatan'] ?>">
							<input type="text" name="nm_foto" value="<?= $info['foto'] ?>" hidden>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.box -->
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<a href="<?= base_url('kepegawaian') ?>" class="btn btn-default">Kembali</a>
		<button type="submit" class="btn btn-success pull-right">Ubah</button>
	</div>
	<!-- /.box-footer -->
</div>
<?= form_close(); ?>

<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Data Pegawai</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Foto</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>NIP</th>
					<th>NIK</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Foto</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>NIP</th>
					<th>NIK</th>
					<th>Aksi</th>
				</tr>
			</tfoot>
			<tbody>
			<?php foreach ($pegawai as $row): ?>
				
				<tr>
					<td width="10%"><img src="<?= base_url('assets/image/pemerintahan/'.$row['foto']) ?>" alt="" class="img-thumbnail" style="height: 100px; width: 85px;"></td>
					<td><?= $row['nama'] ?></td>
					<td><?= $row['jabatan'] ?></td>
					<td><?= $row['nip'] ?></td>
					<td><?= $row['nik'] ?></td>
					<td width="15%">
						<div class="btn-group">
							<a href="<?= base_url('kepegawaian/lihatdata/'.$row['id']) ?>" class="btn btn-success">Ubah</a>
							<a onclick="return confirm('Apakah anda yakin?')" href="<?= base_url('kepegawaian/hapusdata/'.$row['id']) ?>" class="btn btn-danger">Hapus</a>
						</div>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>