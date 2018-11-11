<!--input berita -->
<div class="box box-primary">
	<div class="box-body">
		<!-- form input berita -->
		<?= form_open_multipart('berita/beritaBaru') ?>
		<div class="form-group">
			<label for="judul">Judul Berita</label>
			<input type="text" name="judul_berita" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="texteditor">Isi Berita</label>
			<textarea name="isi_berita" id="texteditor" class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<label for="gambar">Gambaar</label>
			<input type="file" name="gambar" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-info" value="Publikasikan">
		</div>
		<?= form_close(); ?>
		<!-- end form -->
	</div>	
</div>
<!-- end input brita -->

<!-- Table Berita -->
<div class="box box-info">
	<div class="box-header">
		<h5>List Berita</h5>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover table-striped" id="example1">
			<thead>
				<th>No</th>
				<th>Gambar</th>
				<th>Judul Berita</th>
				<th>Isi Berita</th>
				<th>Waktu Publish</th>
				<th>Aksi</th>
			</thead>
			<tfoot>
				<th>No</th>
				<th>Gambar</th>
				<th>Judul Berita</th>
				<th>Isi Berita</th>
				<th>Waktu Publish</th>
				<th>Aksi</th>
			</tfoot>
			<tbody>
				<?php $i=1; foreach ($berita as $row): ?>
					<tr>
						<td><?= $i++ ?></td>
						<td><img src="<?= base_url('assets/image/berita/'.$row['gambar']) ?>" style="height: 100px; width: 100px" alt="foto berita"></td>
						<td><?= $row['judul_berita'] ?></td>
						<td><?= $row['isi_berita'] ?></td>
						<td><?= tanggal_indo($row['waktu_publish'], true)?></td>
						<td>
							<div class="btn-group" role="group">
							<a href="<?= base_url('berita/ubahBerita/'.$row['id']) ?>" class="btn btn-success">Ubah</a>
							<a href="<?= base_url('berita/hapusBerita/'.$row['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')">Hapus</a>
							</div>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>