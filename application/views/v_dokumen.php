<div class="col-md-6">
<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Upload Dokumen</div>
	</div>
	<div class="box-body">
		<?= form_open_multipart('dokumen/upload'); ?>
		<div class="form-group">
			<input type="text" class="form-control" name="nm_file" placeholder="Ubah Nama file">
		</div>
		<div class="form-group">
			<input type="file" name="fdokumen" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-info pull-right" value="Upload">
		</div>
		<?= form_close(); ?>
	</div>
</div>
</div>
<div class="col-md-12">
<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">List Dokumen</div>
	</div>	
	<div class="box-body">
		<table class="table" id="example1">
			<thead>
				<tr>
					<th width="5%">No</th>
					<th width="60%">Nama File</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; foreach ($dokumen as $row): ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row['nm_file'] ?></td>
					<td><?= tanggal_indo($row['tanggal']) ?></td>
					<td>
						<div class="btn-group">
							<a href="<?= base_url('dokumen/hapusdata/'.$row['id']) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Delete</a>
						</div>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
</div>