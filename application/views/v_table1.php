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
					<th>Jumlah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $total1=0;$total2=0;$total3=0; foreach ($penduduk as $row): ?>

				<tr>
					<td><?= $row['desa_kelurahan'] ?></td>
					<td><?= rupiah($row['laki_laki']) ?></td>
					<td><?= rupiah($row['perempuan']) ?></td>
					<td><?= rupiah($row['total'])?></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-success" href="<?= base_url('statistik/table1/lihatdata/'.$row['id']) ?>">Edit</a>
							<a onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger" href="<?= base_url('statistik/table1/hapusdata/'.$row['id']) ?>">Hapus</a>
						</div>
					</td>
				</tr>
				<?php $total1 += $row['laki_laki'] ?><?php $total2 += $row['perempuan'] ?><?php $total3 += $row['total'] ?>
			<?php endforeach ?>
		</tbody>
		<tfoot>
			<tr>
				<th >Kecmatan</th>
				<th><?= rupiah($total1) ?></th>
				<th><?= rupiah($total2) ?></th>
				<th><?= rupiah($total3) ?></th>
				<th></th>
			</tr>
		</tfoot>
	</table>
</div>
</div>

<!-- BAR CHART -->
<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title">Bar Chart</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<div class="chart">
			<canvas id="myBarChart" style="height:230px"></canvas>
		</div>
	</div>
	<!-- /.box-body -->
</div>
<?php foreach ($penduduk as $data) {
	$desa[] = $data['desa_kelurahan'];
	$laki_laki[] =(float) $data['laki_laki'];
	$perempuan[] =(float) $data['perempuan'];
} ?>

<!-- ChartJS -->
<script src="<?= base_url('assets/backend') ?>/bower_components/chart.js/Chart.min.js"></script>
<script>
	
	// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: <?= json_encode($desa) ?>,
    datasets: [{
      label: "Laki-laki",
         backgroundColor: "#E50D0D",
      borderColor: "#E50D0D",
      data: <?= json_encode($laki_laki) ?>,
    },{
      label: "Perempuan",
      backgroundColor: "#CF0BC8",
      borderColor: "#CF0BC8",
      data: <?= json_encode($perempuan) ?>,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 14
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 70000,
          maxTicksLimit: 100
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: true
    }
  }
});
</script>