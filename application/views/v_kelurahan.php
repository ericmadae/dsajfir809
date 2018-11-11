<!-- Form Desa/kelurahan -->
<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Masukan Data Desa/Kelurahan</div>
	</div>
	<div class="box-body">
		<?= form_open('kelurahan/tambah'); ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Keulurahan/Desa</th>
					<th>Jumlah RT</th>
					<th>Jumlah RW</th>
					<th>Status</th>
					<th>Klasifikasi</th>
					<th>Website</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" name="desa_kelurahan" class="form-control" ></td>
					<td><input type="number" name="jml_rt" class="form-control" ></td>
					<td><input type="number" name="jml_rw" class="form-control" ></td>
					<td><input type="text" name="status" class="form-control" ></td>
					<td><input type="text" name="klasifikasi" class="form-control" ></td>
					<td><input type="text" name="web_desa" class="form-control"  ></td>
					<td><input type="submit" value="Tambah" class="btn btn-info" ></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- end Form -->

<!-- table Desa/kelurahan -->
<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Data Desa/Kelurahan</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped" id="example1">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Keulurahan/Desa</th>
					<th>Jumlah RT</th>
					<th>Jumlah RW</th>
					<th>Status</th>
					<th>Klasifikasi</th>
					<th>Website</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Nama Keulurahan/Desa</th>
					<th>Jumlah RT</th>
					<th>Jumlah RW</th>
					<th>Status</th>
					<th>Klasifikasi</th>
					<th>Website</th>
					<th>Aksi</th>
				</tr>
			</tfoot>
			<tbody>
				<?php $i = 1; foreach ($desa as $row): ?>
					<tr>
						<td><?= $i++ ?></td>
						<td><?= $row['desa_kelurahan'] ?></td>
						<td><?= $row['jml_rt'] ?></td>
						<td><?= $row['jml_rw'] ?></td>
						<td><?= $row['status'] ?></td>
						<td><?= $row['klasifikasi'] ?></td>
						<td><?= $row['web_desa'] ?></td>
						<td>
							<div class="btn-group">
								<a href="<?= base_url('kelurahan/lihatdata/'.$row['id']) ?>" class="btn btn-success">Ubah</a>
								<a href="<?= base_url('kelurahan/hapusdata/'.$row['id']) ?>" class="btn btn-danger">Hapus</a>
							</div>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>	
		</table>
	</div>
</div>