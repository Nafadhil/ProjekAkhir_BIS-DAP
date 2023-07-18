<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>UMKM DATA EDIT</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>UMKM DATA EDIT</h4>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsivey">
                        <form method="post" action="<?= base_url(); ?>/umkmdata/update/<?= $umkmdata['id'] ?>"
                            enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal<span class="required">*</span></label>
                                <input type="datetime-local" class="form-control" id="tanggal" name="tanggal"
                                    value="<?= date('Y-m-d\TH:i', strtotime($umkmdata['tanggal'])) ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama<span class="required">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?= $umkmdata['nama'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="fotoktp" class="form-label">Foto KTP<span class="required">*</span></label>
                                <input type="text" class="form-control" id="fotoktp" name="fotoktp"
                                    value="<?= $umkmdata['fotoktp'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kelamin" class="form-label">Kelamin<span class="required">*</span></label>
                                <select class="form-control" id="kelamin" name="kelamin">
                                    <option value="Laki-Laki" <?= ($umkmdata['jns_kelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= ($umkmdata['jns_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat<span class="required">*</span></label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="<?= $umkmdata['alamat'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan<span
                                        class="required">*</span></label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                    value="<?= $umkmdata['kecamatan'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">Kelurahan<span
                                        class="required">*</span></label>
                                <input type="text" class="form-control" id="kelurahan" name="kelurahan"
                                    value="<?= $umkmdata['kelurahan'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota<span class="required">*</span></label>
                                <input type="text" class="form-control" id="kota" name="kota"
                                    value="<?= $umkmdata['kota'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kodepos" class="form-label">Kode Pos<span class="required">*</span></label>
                                <input type="number" class="form-control" id="kodepos" name="kodepos"
                                    value="<?= $umkmdata['kodepos'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="namausaha" class="form-label">Nama Usaha<span
                                        class="required">*</span></label>
                                <input type="text" class="form-control" id="namausaha" name="namausaha"
                                    value="<?= $umkmdata['namausaha'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk1" class="form-label">Produk 1<span class="required">*</span></label>
                                <input type="text" class="form-control" id="produk1" name="produk1"
                                    value="<?= $umkmdata['produk1'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk2" class="form-label">Produk 2</label>
                                <input type="text" class="form-control" id="produk2" name="produk2"
                                    value="<?= $umkmdata['produk2'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk3" class="form-label">Produk 3</label>
                                <input type="text" class="form-control" id="produk3" name="produk3"
                                    value="<?= $umkmdata['produk3'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="produk4" class="form-label">Produk 4</label>
                                <input type="text" class="form-control" id="produk4" name="produk4"
                                    value="<?= $umkmdata['produk4'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori<span class="required">*</span></label>
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="Makanan" <?= ($umkmdata['kategori'] == 'Makanan') ? 'selected' : ''; ?>>
                                        Makanan</option>
                                    <option value="Non Makanan" <?= ($umkmdata['kategori'] == 'Non Makanan') ? 'selected' : ''; ?>>Non Makanan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status_nib" class="form-label">Status NIB<span
                                        class="required">*</span></label>
                                <select class="form-control" id="status_nib" name="status_nib">
                                    <option value="BELUM" <?= ($umkmdata['status_nib'] == 'BELUM') ? 'selected' : ''; ?>>
                                        Belum
                                    </option>
                                    <option value="SUDAH" <?= ($umkmdata['status_nib'] == 'SUDAH') ? 'selected' : ''; ?>>
                                        Sudah
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alasan_tdk_lanjut" class="form-label">Alasan Tidak Lanjut</label>
                                <input type="text" class="form-control" id="alasan_tdk_lanjut" name="alasan_tdk_lanjut"
                                    value="<?= $umkmdata['produk3'] ?>" style="height: 100px; vertical-align: top;">
                            </div>
                            <div class="mb-3">
                                <label for="status_akun_halal" class="form-label">Status Akun Halal</label>
                                <select class="form-control" id="status_akun_halal" name="status_akun_halal"
                                    value="<?= old('status_akun_halal'); ?>">
                                    <option value="Proses" <?= ($umkmdata['status_akun_halal'] == 'Proses') ? 'selected' : ''; ?>>
                                        Proses
                                    </option>
                                    <option value="Selesai" <?= ($umkmdata['status_akun_halal'] == 'Selesai') ? 'selected' : ''; ?>>
                                        Selesai
                                    </option>
                                    <option value="Double" <?= ($umkmdata['status_akun_halal'] == 'Double') ? 'selected' : ''; ?>>
                                        Double
                                    </option>
                                    <option value="Tidak Bisa Dilanjut" <?= ($umkmdata['status_akun_halal'] == 'Tidak Bisa Dilanjut') ? 'selected' : ''; ?>>
                                        Tidak Bisa Dilanjut
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status_akun_nib" class="form-label">Status Akun NIB</label>
                                <select class="form-control" id="status_akun_nib" name="status_akun_nib"
                                    value="<?= old('status_akun_nib'); ?>">
                                    <option value="Proses" <?= ($umkmdata['status_akun_nib'] == 'Proses') ? 'selected' : ''; ?>>
                                        Proses
                                    </option>
                                    <option value="Selesai" <?= ($umkmdata['status_akun_nib'] == 'Selesai') ? 'selected' : ''; ?>>
                                        Selesai
                                    </option>
                                    <option value="Double" <?= ($umkmdata['status_akun_nib'] == 'Double') ? 'selected' : ''; ?>>
                                        Double
                                    </option>
                                    <option value="Tidak Bisa Dilanjut" <?= ($umkmdata['status_akun_nib'] == 'Tidak Bisa Dilanjut') ? 'selected' : ''; ?>>
                                        Tidak Bisa Dilanjut
                                    </option>
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