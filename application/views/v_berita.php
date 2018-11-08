<!--input berita -->
<div class="box box-primary">
	<!-- header -->
	<div class="box-header text-center">
		<button type="button" class="img-thumbnail" data-toggle="modal" data-target="#modal-info">
			Tambahkan gambar
		</button>
	</div>
	<!-- end header -->
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
			<input type="file" name="gambar" class="form-control" >
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
	<div class="box-header"></div>
</div>