<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Data Penduduk</div>
	</div>
	<div class="box-body">
		<div class="col-md-12">
			<?= form_open('statistik/table2/ubahdata'); ?>
			<table class="table table-striped">
				<tr>
					<th>Desa/kelurahan</th>
					<th>Luas</th>
					<th>Sawah</th>
					<th>Ladang</th>
					<th>Rumah</th>
					<th>Lainnya</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<td><input type="text" class="form-control" name="desa_kelurahan" value="<?= $info['desa_kelurahan'] ?>"> <input type="hidden" value="<?= $info['id'] ?>" name="id"></td>
					<td><input type="number"  step="0.01" class="form-control" name="luas" value="<?= $info['luas'] ?>"></td>
					<td><input type="number"  step="0.01" class="form-control" name="sawah" value="<?= $info['sawah'] ?>"></td>
					<td><input type="number" step="0.01"  class="form-control" name="ladang" value="<?= $info['ladang'] ?>"></td>
					<td><input type="number"  step="0.01" class="form-control" name="rumah" value="<?= $info['rumah'] ?>"></td>
					<td><input type="number"  step="0.01" class="form-control" name="lainnya" value="<?= $info['lainnya'] ?>"></td>
					<td><input type="submit" step="0.01"  class="btn btn-success btn-block" name="aksi" value="Edit"><a href="<?= base_url('statistik/table2') ?>" class="btn btn-primary btn-block">Kembali</a></td>
				</tr>
			</table>
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
					<th>Luas</th>
					<th>Sawah</th>
					<th>Ladang</th>
					<th>Rumah</th>
					<th>Lainnya</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $total1=0;$total2=0;$total3=0;$total4=0;$total5=0; foreach ($luas_daerah as $row): ?>

				<tr>
					<td><?= $row['desa_kelurahan'] ?></td>
					<td><?= $row['luas'] ?></td>
					<td><?= $row['sawah'] ?></td>
					<td><?= $row['ladang']?></td>
					<td><?= $row['rumah']?></td>
					<td><?= $row['lainnya']?></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-success" href="<?= base_url('statistik/table2/lihatdata/'.$row['id']) ?>">Edit</a>
							<a onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger" href="<?= base_url('statistik/table2/hapusdata/'.$row['id']) ?>">Hapus</a>
						</div>
					</td>
				</tr>
				<?php $total1 += $row['luas'] ?><?php $total2 += $row['sawah'] ?><?php $total3 += $row['ladang'] ?><?php $total4 += $row['rumah'] ?><?php $total5 += $row['lainnya'] ?>
			<?php endforeach ?>
		</tbody>
		<tfoot>
			<tr>
				<th>Kecmatan</th>
				<th><?= $total1 ?></th>
				<th><?= $total2 ?></th>
				<th><?= $total3 ?></th>
				<th><?= $total4 ?></th>
				<th><?= $total5 ?></th>
				<th></th>
			</tr>
		</tfoot>
	</table>
</div>
</div>

<!-- BAR CHART -->
<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title">Chart luas daerah</h3>

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

<?php 
foreach ($luas_daerah as $row) {
	$desa[]= $row['desa_kelurahan'];	
	$luas[]= $row['luas'];	
	$sawah[]= $row['sawah'];	
	$ladang[]= $row['ladang'];	
	$rumah[]= $row['rumah'];	
	$lainnya[]= $row['lainnya'];	
}
?>
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
			label: "Luas",
			backgroundColor: "#F81F02",
			borderColor: "#F81F02",
			data: <?= json_encode($luas) ?>,
		},{
			label: "Sawah",
			backgroundColor: "#0FFA03",
			borderColor: "#0FFA03",
			data: <?= json_encode($sawah) ?>,
		},{
			label: "Ladang",
			backgroundColor: "#FFB607",
			borderColor: "#FFB607",
			data: <?= json_encode($ladang) ?>,
		},{
			label: "Rumah",
			backgroundColor: "#FF0048",
			borderColor: "#FF0048",
			data: <?= json_encode($rumah) ?>,
		},{
			label: "Lainnya",
			backgroundColor: "#F9FC02",
			borderColor: "#F9FC02",
			data: <?= json_encode($lainnya) ?>,
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
					max: 7000,
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