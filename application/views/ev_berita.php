<!--input berita -->
<div class="box box-primary">
	<div class="box-header text-center">
		<?php if (isset($edit['gambar'])): ?>
			<div class="img-thumbnail">
				<img src="<?= base_url('assets/image/berita/'.$edit['gambar']) ?>" alt="foto berita">				
			</div>
	</div>		
		<?php endif ?>
	<div class="box-body">
		<!-- form input berita -->
		<?= form_open_multipart('berita/perbaruiBerita') ?>
		<div class="form-group">
			<input type="text" name="id" value="<?= $edit['id'] ?>" hidden>
			<label for="judul">Judul Berita</label>
			<input type="text" name="judul_berita" class="form-control" value="<?= $edit['judul_berita'] ?>" required>
		</div>
		<div class="form-group">
			<label for="texteditor">Isi Berita</label>
			<textarea name="isi_berita" id="texteditor" class="form-control" required> <?= $edit['isi_berita'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="gambar">Gambaar</label>
			<input type="file" name="gambar" class="form-control">
			<input type="text" name="nm_gambar" value="<?= $edit['gambar'] ?>"  hidden>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-info" value="Publikasikan">
			<a href="<?= base_url('berita') ?>" class="btn btn-warning">Kembali</a>
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
		<table class="table table-bordered table-hover table-striped" id="example1" style="font-family: serif; font-size: 12px">
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
						<td width="5%"><?= $i++ ?></td>
						<td ><img src="<?= base_url('assets/image/berita/'.$row['gambar']) ?>" style="height: 100px; width: 100px" alt="foto berita"></td>
						<td width="20%"><b><?= substr($row['judul_berita'], 0, 10); if (strlen($row['judul_berita'])>10) {
						echo '<br><br> baca selengkapnya....';	
						} ?></b></td>
						<td width="60%"><?= substr($row['isi_berita'], 0, 100); if (strlen($row['isi_berita'])>50) {
						echo '<br><br> baca selengkapnya....';	
						} ?></td>
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