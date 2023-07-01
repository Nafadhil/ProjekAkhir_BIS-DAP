<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>NEW JOB</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>NEW JOB</h4>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsivey">
                        <?php if (!empty(session()->getFlashdata('error'))): ?>
                            <div class="alert alert-danger" role="alert">
                                <h4>Periksa Entrian Form</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="<?= base_url(); ?>/job/save" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="<?= old('tanggal'); ?>" style="height: 50px;">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?= old('nama'); ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kelamin" class="form-label">Kelamin</label>
                                <select class="form-control" id="kelamin" name="kelamin" value="<?= old('kelamin'); ?>">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat"
                                    name="alamat" <?= old('alamat'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan"
                                    name="kecamatan"<?= old('kecamatan'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk1" class="form-label">Produk1</label>
                                <input type="text" class="form-control" id="produk1"
                                    name="produk1"<?= old('produk1'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk2" class="form-label">Produk2</label>
                                <input type="text" class="form-control" id="produk2"
                                    name="produk2" <?= old('produk2'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk3" class="form-label">Produk3</label>
                                <input type="text" class="form-control" id="produk3"
                                    name="produk3"<?= old('produk3'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk4" class="form-label">Produk4</label>
                                <input type="text" class="form-control" id="produk4"
                                    name="produk4"<?= old('produk4'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-control" id="kategori" name="kategori"
                                    value="<?= old('kategori'); ?>">
                                    <option value="Makanan">Makanan</option>
                                    <option value="Non Makanan">Non Makanan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-info" value="Upload" />
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