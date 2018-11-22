<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Data Penduduk</div>
	</div>
	<div class="box-body">
		<div class="col-md-6">
			<?= form_open('table1/tambah'); ?>
			<div class="form-gorup">
				<label for="Desa">Desa/kelurahan</label>
				<input type="text" class="form-control" name="desa_kelurahan">
			</div>
			<div class="form-gorup">
				<label for="Desa">Laki-laki</label>
				<input type="number" class="form-control" name="laki_laki">
			</div>
			<div class="form-gorup">
				<label for="Desa">Perempuan</label>
				<input type="number" class="form-control" name="perempuan">
			</div>
			<br>
			<div class="form-gorup">
					<input type="submit" class="btn btn-primary pull-right" value="Tambah">

			</div>
			<?= form_close(); ?>
		</div>		
	</div>
</div>

<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Data Penduduk</div>
	</div>
	<div class="box-body">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Desa/kelurahan</th>
					<th>Laki-Laki</th>
					<th>Perempuan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($penduduk as $row): ?>
					
					<tr>
						<td><?= $row['desa_kelurahan'] ?></td>
						<td><?= $row['laki_laki'] ?></td>
						<td><?= $row['perempuan'] ?></td>
						<td>
							<div class="btn-group">
								<a class="btn btn-success" href="<?= base_url('statistik/table1/lihatdata/'.$row['id']) ?>">Edit</a>
								<a class="btn btn-danger" href="<?= base_url('statistik/table1/hapusdata'.$row['id']) ?>">Hapus</a>
							</div>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>