<div class="col-sm-8">
	<div class="box box-primary">
		<div class="box-header with-border">
			<div class="box-title">
				Kotak Masuk
			</div>	
		</div>
		<div class="box-body">
			<div class="container">
				<table width="70%">
					<tr>
						<td width="10%"><b>Dari</b></td>
						<td width="2%"><b>:</b></td>
						<td> <?= $info['nama'] ?></td>
					</tr>
					<tr>
						<td><b>Subjek</b></td>
						<td><b>:</b></td>
						<td> <?= $info['subjek'] ?></td>
					</tr>
					<tr>
						<td><b>Pesan</b></td>
						<td colspan="2"><b>:</b></td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3"><?= $info['pesan'] ?></td>
					</tr>
				</table>
				<br>

			</div>
		</div>
		<?= form_open('kontak/ubahdata/'.$info['id']); ?>
		<div class="box-footer with-border">
			<div class="box-title">
				<h4>balas :</h4>
			</div>
			<div class="form-group">
				<textarea name="balasan" id="texteditor" class="form-control"><?= $info['balasan'] ?></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary pull-right">Post Balasan</button>
			</div>
		</div>
	</div>
</div>

