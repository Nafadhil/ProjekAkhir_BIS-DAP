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
          <div class="card card-statistic-1 text-center">
            <!-- Menambahkan class mx-auto untuk mengatur card berada di tengah -->
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
          <div class="card card-statistic-1 text-center">
            <!-- Menambahkan class mx-auto untuk mengatur card berada di tengah -->
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
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Statistics</h4>
            </div>
            <div class="card-body">
              <div class="statistic-details mt-sm-4">
                <div class="statistic-details-item">
                  <canvas id="thread_kategori" width="200" height="200"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Statistics</h4>
            </div>
            <div class="card-body">
              <div class="statistic-details mt-sm-4">
                <div class="statistic-details-item">
                  <canvas id="tahun_lahir" width="200" height="200"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</section>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="<?= base_url('chartjs/Chart.bundle.min.js') ?>"></script>
<script>
  var thread_kategori = document.getElementById('thread_kategori');
  var data_thread_kategori = [];
  var label_thread_kategori = [];

  <?php foreach ($thread_per_kategori as $value): ?>
    data_thread_kategori.push(<?= $value['jumlah'] ?>);
    label_thread_kategori.push('<?= $value['kecamatan'] ?>');
  <?php endforeach ?>

  var data_thread_per_kategori = {
    datasets: [{
      data: data_thread_kategori,
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
    labels: label_thread_kategori,
  }

  var chart_thread_kategori = new Chart(thread_kategori, {
    type: 'doughnut',
    data: data_thread_per_kategori
  });

  var tahun_lahir = document.getElementById('tahun_lahir');
  var data_tahun_lahir = [];
  var label_tahun_lahir = [];

  <?php foreach ($tahun_lahir_user as $value): ?>
    data_tahun_lahir.push(<?= $value['jumlah_makanan'] ?>);
    label_tahun_lahir.push(<?= $value['jumlah_non_makanan'] ?>);
  <?php endforeach ?>

  var data_user_per_tahun_lahir = {
    datasets: [{
      label: 'Jumlah Makanan',
      data: data_tahun_lahir,
      backgroundColor: 'rgba(255, 99, 132, 0.8)',
    },
    {
      label: 'Jumlah Non-Makanan',
      data: label_tahun_lahir,
      backgroundColor: 'rgba(54, 162, 235, 0.8)',
    }],
    labels: label_tahun_lahir,
  }

  var chart_tahun_lahir = new Chart(tahun_lahir, {
    type: 'bar',
    data: data_user_per_tahun_lahir
  });
</script>
<?= $this->endSection() ?>