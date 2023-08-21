<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="section-body">
      <div class="row justify-content-center">
        <!-- Menambahkan class justify-content-center untuk mengatur card berada di tengah -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user" style="margin-top: 30px;"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Data UMKM</h4>
              </div>
              <div class="card-body">
                <?php echo $jumlah; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="fas fa-utensils" style="margin-top: 30px;"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Kategori(Makanan)</h4>
              </div>
              <div class="card-body">
                <?php echo $jumlah_makanan; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="fas fa-briefcase" style="margin-top: 30px;"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Kategori(Non Makanan)</h4>
              </div>
              <div class="card-body">
                <?php echo $jumlah_non_makanan; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="display: flex; justify-content: center; align-items: center;">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card" style="height: 800px;">
              <div class="card-header">
                <h4>Kecamatan</h4>
              </div>
              <div class="card-body">
                <div class="statistic-details mt-sm-4">
                  <div class="statistic-details-item">
                    <canvas id="jumlah_per_kecamatan" width="500" height="500"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card" style="height: 800px;">
              <div class="card-header">
                <h4>Kategori Produk</h4>
              </div>
              <div class="card-body">
                <div class="statistic-details mt-sm-4">
                  <div class="statistic-details-item">
                    <canvas id="jumlah_makanan_nonmakanan" width="500" height="500"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?= $this->endSection() ?>
  <?= $this->section('scripts') ?>
  <script src="<?= base_url('chartjs/Chart.bundle.min.js') ?>"></script>
  <script>
    var jumlah_per_kecamatan = document.getElementById('jumlah_per_kecamatan');
    var data_jumlah_per_kecamatan = [];
    var label_jumlah_per_kecamatan = [];

    <?php foreach ($jumlah_per_kecamatan as $value): ?>
      data_jumlah_per_kecamatan.push(<?= $value['jumlah'] ?>);
      label_jumlah_per_kecamatan.push('<?= $value['kecamatan'] ?>');
    <?php endforeach ?>

    var data_jumlah_per_kecamatan = {
      datasets: [{
        data: data_jumlah_per_kecamatan,
        backgroundColor: [
          'rgba(255, 99, 132, 0.8)',
          'rgba(54, 162, 235, 0.8)',
          'rgba(255, 206, 86, 0.8)',
          'rgba(75, 192, 192, 0.8)',
          'rgba(153, 102, 255, 0.8)',
          'rgba(255, 159, 64, 0.8)',
          'rgba(255, 0, 0, 0.8)',
          'rgba(0, 255, 0, 0.8)',
          'rgba(0, 0, 255, 0.8)',
          'rgba(255, 0, 255, 0.8)',
          'rgba(255, 255, 0, 0.8)',
          'rgba(0, 255, 255, 0.8)',
          'rgba(128, 128, 128, 0.8)',
          'rgba(128, 0, 0, 0.8)',
          'rgba(0, 128, 0, 0.8)',
          'rgba(0, 0, 128, 0.8)',
          'rgba(128, 0, 128, 0.8)',
          'rgba(128, 128, 0, 0.8)',
          'rgba(0, 128, 128, 0.8)',
          'rgba(192, 192, 192, 0.8)'
        ],
      }],
      labels: label_jumlah_per_kecamatan,
    }

    var chart_jumlah_per_kecamatan = new Chart(jumlah_per_kecamatan, {
      type: 'doughnut',
      data: data_jumlah_per_kecamatan
    });

    var jumlah_makanan_nonmakanan = document.getElementById('jumlah_makanan_nonmakanan');
    var data_jumlah_makanan_nonmakanan = [];
    var label_jumlah_makanan_nonmakanan = [];

    <?php foreach ($jumlah_makanan_nonmakanan as $value): ?>
      data_jumlah_makanan_nonmakanan.push(<?= $value['jumlah_makanan'] ?>);
      label_jumlah_makanan_nonmakanan.push(<?= $value['jumlah_non_makanan'] ?>);
    <?php endforeach ?>

    var data_jumlah_makanan_nonmakanan = {
      datasets: [{
        data: data_jumlah_makanan_nonmakanan.concat(label_jumlah_makanan_nonmakanan),
        backgroundColor: ['rgba(255, 99, 132, 0.8)', 'rgba(54, 162, 235, 0.8)'],
      }],
      labels: ["Makanan", "Non Makanan"],
    };

    var chart_jumlah_makanan_nonmakanan = new Chart(jumlah_makanan_nonmakanan, {
      type: 'bar',
      data: data_jumlah_makanan_nonmakanan,
      options: {
        legend: {
          display: false
        }
      }
    });


  </script>
  <?= $this->endSection() ?>