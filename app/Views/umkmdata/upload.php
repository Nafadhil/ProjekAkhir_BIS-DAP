<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>NEW UMKM DATA</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>NEW UMKM DATA</h4>
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
                        <form method="post" action="<?= base_url(); ?>/umkmdata/save" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal<span class="required">*</span></label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="<?= old('tanggal'); ?>" style="height: 50px;">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama<span class="required">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?= old('nama'); ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="fotoktp" class="form-label">Foto KTP<span class="required">*</span></label>
                                <input type="text" class="form-control" id="fotoktp" name="fotoktp"
                                    value="<?= old('fotoktp'); ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="jns_kelamin" class="form-label">Kelamin<span class="required">*</span></label>
                                <select class="form-control" id="jns_kelamin" name="jns_kelamin" value="<?= old('jns_kelamin'); ?>">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat<span class="required">*</span></label>
                                <input type="text" class="form-control" id="alamat"
                                    name="alamat" <?= old('alamat'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan<span class="required">*</span></label>
                                <input type="text" class="form-control" id="kecamatan"
                                    name="kecamatan"<?= old('kecamatan'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">Kelurahan<span class="required">*</span></label>
                                <input type="text" class="form-control" id="kelurahan"
                                    name="kelurahan"<?= old('kelurahan'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota<span class="required">*</span></label>
                                <input type="text" class="form-control" id="kota"
                                    name="kota"<?= old('kota'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kodepos" class="form-label">Kode Pos<span class="required">*</span></label>
                                <input type="number" class="form-control" id="kodepos"
                                    name="kodepos"<?= old('kodepos'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">Nama Usaha<span class="required">*</span></label>
                                <input type="text" class="form-control" id="namausaha"
                                    name="namausaha"<?= old('namausaha'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk1" class="form-label">Produk1<span class="required">*</span></label>
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
                                <label for="kategori" class="form-label">Kategori<span class="required">*</span></label>
                                <select class="form-control" id="kategori" name="kategori"
                                    value="<?= old('kategori'); ?>">
                                    <option value="Makanan">Makanan</option>
                                    <option value="Non Makanan">Non Makanan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status_nib" class="form-label">Status NIB<span class="required">*</span></label>
                                <select class="form-control" id="status_nib" name="status_nib"
                                    value="<?= old('status_nib'); ?>">
                                    <option value="BELUM">Belum</option>
                                    <option value="SUDAH">Sudah</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alasan_tdk_lanjut" class="form-label">Alasan Tidak Lanjut</label>
                                <input type="text" class="form-control" id="alasan_tdk_lanjut"
                                    name="alasan_tdk_lanjut"<?= old('alasan_tdk_lanjut'); ?> style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="status_akun_halal" class="form-label">Status Akun Halal</label>
                                <select class="form-control" id="status_akun_halal" name="status_akun_halal"
                                    value="<?= old('status_akun_halal'); ?>">
                                    <option value="Proses">Proses</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Double">Double</option>
                                    <option value="Tidak Bisa Dilanjut">Tidak Bisa Dilanjut</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status_akun_nib" class="form-label">Status Akun NIB</label>
                                <select class="form-control" id="status_akun_nib" name="status_akun_nib"
                                    value="<?= old('status_akun_nib'); ?>">
                                    <option value="Proses">Proses</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Double">Double</option>
                                    <option value="Tidak Bisa Dilanjut">Tidak Bisa Dilanjut</option>
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