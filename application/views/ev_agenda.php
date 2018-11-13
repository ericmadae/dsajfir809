<div class="col-md-8">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Agenda</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="form-horizontal">
      <?= form_open('agenda/ubahdata/'.$info['id']); ?>
      <div class="box-body">
        <div class="form-group">
          <label for="Judul" class="col-sm-2 control-label">Nama Agenda</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" id="Judul" placeholder="Judul" name="nm_agenda" value="<?= $info['nm_agenda'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="Tanggal" class="col-sm-2 control-label">Tanggal</label>

          <div class="col-sm-10">
            <input type="date" class="form-control" id="Tanggal" placeholder="Tanggal" name="tanggal" value="<?= $info['tanggal'] ?>">
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?= base_url('agenda') ?>" class="btn btn-primary">Kembali</a>
        <button type="submit" class="btn btn-success pull-right">Ubah</button>
      </div>
      <!-- /.box-footer -->
      <?= form_close();?>
    </div>
  </div>
  <!-- /.box -->
</div>
<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <div class="box-title">Daftar Agenda</div>
    </div>
    <div class="box-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1; foreach ($agenda as $row): ?>
            <tr>
              <td><?= $i++ ?></td>
              <td width="60%"><?= $row['nm_agenda']; ?></td>
              <td width="20%"><?= tanggal_indo($row['tanggal']) ?></td>
              <td width="15%">
                <div class="btn-group pull-right">
                  <a href="<?= base_url('agenda/lihatdata/'.$row['id']) ?>" class="btn btn-success">Ubah</a>
                  <a href="<?= base_url('agenda/hapusdata/'.$row['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                </div>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>