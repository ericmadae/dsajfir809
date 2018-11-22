<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Data Penduduk</div>
	</div>
	<div class="box-body">
		<div class="col-md-12">
			<?= form_open('statistik/table3/ubahdata'); ?>
			<table class="table table-striped">
				<tr>
					<th>Desa/kelurahan</th>
					<th>Pras s</th>
					<th>KS_I</th>
					<th>KS_II_III</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<td><input type="text" class="form-control" name="desa_kelurahan" value="<?= $info['desa_kelurahan'] ?>"><input type="hidden" class="form-control" name="id" value="<?= $info['id'] ?>"></td>
					<td><input type="number"  class="form-control" name="pra_s" value="<?= $info['pra_s'] ?>"></td>
					<td><input type="number"  class="form-control" name="ks_I" value="<?= $info['ks_I'] ?>"></td>
					<td><input type="number"  class="form-control" name="ks_II_III" value="<?= $info['ks_II_III'] ?>"></td>
					<td><input type="submit"  class="btn btn-success btn-block" name="aksi" value="Ubah"><a href="<?= base_url('statistik/table3') ?>" class="btn btn-block btn-primary">Kembali</a></td>
				</tr>
			</table>
			<?= form_close(); ?>
		</div>		
	</div>
</div>

<div class="box box-primary">
	<div class="box-header with-border">
		<div class="box-title">Kesejahtraan</div>
	</div>
	<div class="box-body">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Desa/kelurahan</th>
					<th>Pras s</th>
					<th>KS_I</th>
					<th>KS_II_III</th>
					<th>Jumlah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $total1=0;$total2=0;$total3=0;$total4=0; foreach ($kesejahtraan as $row): ?>
					<tr>
						<td><?= $row['desa_kelurahan'] ?></td>
						<td><?= $row['pra_s'] ?></td>
						<td><?= $row['ks_I'] ?></td>
						<td><?= $row['ks_II_III']?></td>
						<td><?= $row['jumlah']?></td>
						<td>
							<div class="btn-group">
								<a class="btn btn-success" href="<?= base_url('statistik/table3/lihatdata/'.$row['id']) ?>">Edit</a>
								<a onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger" href="<?= base_url('statistik/table3/hapusdata/'.$row['id']) ?>">Hapus</a>
							</div>
						</td>
					</tr>
					<?php $total1 += $row['pra_s'] ?><?php $total2 += $row['ks_I'] ?><?php $total3 += $row['ks_II_III'] ?><?php $total4 += $row['jumlah'] ?>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th>Kecmatan</th>
					<th><?= $total1 ?></th>
					<th><?= $total2 ?></th>
					<th><?= $total3 ?></th>
					<th><?= $total4 ?></th>
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
foreach ($kesejahtraan as $data) {
	$desa[] = $data['desa_kelurahan'];
	$pra_s[] = (float) $data['pra_s'];
	$ks_I[] = (float) $data['ks_I'];
	$ks_II_III[]= (float) $data['ks_II_III'];
	$jumlah[]= (float) $data['jumlah'];
}
 ?>
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
      label: "PRA S",
         backgroundColor: "#F81F02",
      borderColor: "#F81F02",
      data: <?= json_encode($pra_s) ?>,
    },{
      label: "KS I",
      backgroundColor: "#0FFA03",
      borderColor: "#0FFA03",
      data: <?= json_encode($ks_I) ?>,
    },{
      label: "KS II III",
      backgroundColor: "#FFB607",
      borderColor: "#FFB607",
      data: <?= json_encode($ks_II_III) ?>,
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