<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?= $online ?></h3>

        <p>Pengunjung Online</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
      <div class="small-box-footer"><br></div>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?= $total ?></h3>

        <p>Jumlah Pengunjung</p>
      </div>
      <div class="icon">
        <i class="icon ion-ios-people"></i>
      </div>
      <div class="small-box-footer"><br></div>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?= $belumdibaca ?></h3>

        <p>Komentar belum di balas</p>
      </div>
      <div class="icon">
       <i class="icon ion-chatbubble-working"></i>
     </div>
     <a href="<?= base_url('kontak') ?>" class="small-box-footer">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
   </div>
 </div>
</div>


<!-- Bar chart -->
<div class="col-md-6">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Dilihat</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="chart">
        <canvas id="lineChart" style="height: 274px; width: 608px;" width="608" height="274"></canvas>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
</div>

<!-- Bar chart -->
<div class="col-md-6">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Grafik Penilaian</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="chart">
        <canvas id="barChart" style="height: 274px; width: 608px;" width="608" height="274"></canvas>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
</div>
<?php 
  foreach ($pengunjung as $d) {
    $tanggal[] = $d['tanggal'];
    $jml_pengunjung[] =(float) $d['jml_pengunjung'];
  }
  foreach ($penilaian as $d) {
    $penn[] = $d['penilaian'];
    $jumlah[] =$d['jumlah'];
  }
 
 ?>

<!-- ChartJS -->
<script src="<?= base_url('assets/backend') ?>/bower_components/chart.js/Chart.min.js"></script>
<script>
  
  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("lineChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?= json_encode($tanggal) ?>,
    datasets: [{
      label: "dikunjungi",
      fill: false,
      backgroundColor: "#E50D0D",
      borderColor: "#E50D0D",
      data: <?= json_encode($jml_pengunjung) ?>,
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
          max: 100,
          maxTicksLimit: 100
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>

<script type="text/javascript">

// Bar Chart Example
var ctx = document.getElementById("barChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: <?= json_encode($penn) ?>,
    datasets: [{
      label: "Laki-laki",
         backgroundColor: "#07CDDF",
      borderColor: "#07CDDF",
      data: <?= json_encode($jumlah) ?>,
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
          max: 100,
          maxTicksLimit: 100
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>