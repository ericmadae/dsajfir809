<!--foto profil -->
<div class="col-md-3">
	<div class="box box-primary">
		<div class="box-body box-profile">
			<img class="profile-user-img img-responsive" src="<?= base_url('assets/backend/dist/img/'.$profil->imgprof) ?>" alt="Logo">
			<br>
				<p class="text-center text-bold">Profil Sejarah</p>
				<p class="text-muted text-center text-red">(Kosongkan, jika logo tidak berubah)</p>
			<br>
			<?php echo form_open_multipart('sejarah/aksi_upload');?>
			<div class="input-group input-group-sm">
				<input type="file" name="imgprof" size="20" class="form-control" />
			</div>
			<br>
			<div class="input-group pull-right">
				<input type="submit" class="btn btn-info" value="Ubah" />
			</div>
			<?= form_close(); ?>
		</div>
	</div>
</div>
<!-- end fp -->

<!-- info profil -->
<div class="col-md-9">
	<div class="box box-info">
		<div class="box-body box-profile">
			<?= form_open('sejarah/ubahprof'); ?>
			<div class="form-group">
				<label for="titleprof"><h4>Judul Halaman</h4></label>
				<input type="text" name="title" class="form-control" id="titleprof" value="<?= $profil->title ?>">
			</div>
			<div class="form-group">
				<label for="texteditor"><h4>Isi</h4></label>
				<textarea name="isi" id="texteditor" class="form-control"> <?= $profil->isi ?></textarea>				
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info pull-right">Ubah</button>
				<button type="reset" class="btn btn-secondary ">Setelan awal</button>
			</div>
		</div>
	</div>
</div>
<!-- end profil  -->
