<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>JOB EDIT</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>JOB EDIT</h4>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsivey">
                        <form method="post" action="<?= base_url(); ?>/job/update/<?= $job['id'] ?>"
                            enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="datetime-local" class="form-control" id="tanggal" name="tanggal"
                                    value="<?= $job['tanggal'] ?>" style="height: 50px;">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?= $job['nama'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kelamin" class="form-label">Kelamin</label>
                                <select class="form-control" id="kelamin" name="kelamin" value="<?= $job['kelamin'] ?>">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="<?= $job['alamat'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                    value="<?= $job['kecamatan'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk1" class="form-label">Produk 1</label>
                                <input type="text" class="form-control" id="produk1" name="produk1"
                                    value="<?= $job['produk1'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk2" class="form-label">Produk 2</label>
                                <input type="text" class="form-control" id="produk2" name="produk2"
                                    value="<?= $job['produk2'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk3" class="form-label">Produk 3</label>
                                <input type="text" class="form-control" id="produk3" name="produk3"
                                    value="<?= $job['produk3'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk4" class="form-label">Produk 4</label>
                                <input type="text" class="form-control" id="produk4" name="produk4"
                                    value="<?= $job['produk4'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-control" id="kategori" name="kategori"
                                    value="<?= $job['kategori'] ?>">
                                    <option value="Makanan">Makanan</option>
                                    <option value="Non Makanan">Non Makanan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-info" value="Edit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>
</div>
<?= $this->endSection() ?>