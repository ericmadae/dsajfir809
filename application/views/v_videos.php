<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Videos</div>

	</div>
	<div class="box-header with-border">
		<?= form_open_multipart('videos/tambah') ?>
		<div class="form-horizontal">
			<div class="form-group col-sm-5">
				<label for="Judul" class="col-sm-4 control-label">Tambahkan Video</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="Judul" placeholder="Judul" name="judul">
				</div>
			</div>
			<div class="form-group col-sm-4">
				<div class="col-sm-12">
					<input type="file" class="form-control" placeholder="Video" name="fvideo" required>
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
	<table class="table table-bordered table-striped" id="example1">
		<thead>
			<tr>
				<th>No</th>
				<th>Video</th>
				<th>Judul</th>
				<th>tanggal</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>No</th>
				<th>Video</th>
				<th>Judul</th>
				<th>tanggal</th>
				<th>aksi</th>
			</tr>
		</tfoot>
		<tbody>
			<?php $i=1; foreach ($videos as $row): ?>
				<tr>
					<td><?= $i++; ?></td>
					<td width="7%" style="font-size: 24px">
						<?php if ($row['video'] != null): ?>
						<i class="glyphicon glyphicon-film"></i>
						<?php endif ?></td>
					<td width="50%"><?= $row['judul'] ?></td>
					<td width="20%"><?= tanggal_indo($row['tanggal']) ?></td>
					<td >
						<div class="btn-group">
						<a href="<?= base_url('videos/lihatdata/'.$row['id']) ?>" class="btn btn-info">Lihat</a>
						<a href="<?= base_url('videos/hapusdata/'.$row['id']) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">delete</a>
					</div>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
		
	</div>
	<div class="box-footer">
	</div>