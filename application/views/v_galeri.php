<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Galeri</div>

	</div>
	<div class="box-header with-border">
		<?= form_open_multipart('galeri/tambah') ?>
		<div class="form-horizontal">
			<div class="form-group col-sm-5">
				<label for="Judul" class="col-sm-4 control-label">Tambahkan foto</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="Judul" placeholder="Judul" name="judul">
				</div>
			</div>
			<div class="form-group col-sm-4">
				<div class="col-sm-12">
					<input type="file" class="form-control" placeholder="gambar" name="gambar" required>
				</div>
			</div>
			<div class="form-group col-sm-3">
				<div class="col-sm-10">
					<input type="submit" class="btn btn-primary" value="Tambah">
				</div>
			</div>
		</div>
		<?= form_close(); ?>
	</div>
	<div class="box-body">
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>tanggal</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>tanggal</th>
				<th>aksi</th>
			</tr>
		</tfoot>
		<tbody>
			<?php $i=1; foreach ($galeri as $row): ?>
				<tr>
					<td width="10%" ><img src="<?= base_url('upload/galeri/'.$row['gambar']) ?>" width="100px" height="120px"></td>
					<td width="50%"><?= $row['judul'] ?></td>
					<td width="20%"><?= tanggal_indo($row['tanggal']) ?></td>
					<td >
						<div class="btn-group">
						<a href="<?= base_url('galeri/lihatdata/'.$row['id']) ?>" class="btn btn-success">Ubah</a>
						<a href="<?= base_url('galeri/hapusdata/'.$row['id']) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">delete</a>
					</div>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
		
	</div>
	<div class="box-footer">
	</div>