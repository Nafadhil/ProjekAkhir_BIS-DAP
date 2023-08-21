<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>UMKM DATA</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <form action="" method="get">
                    <div class="float-right ml-2">
                        <div class="float-left">
                            <input type="text" name="keyword" class="form-control" style="width:155pt;"
                                placeholder="Search..." value="<?= isset($keyword) ? $keyword : ''; ?>">
                        </div>
                        <div class="float-left ml-2">
                            <button type="submit" class="btn btn-primary" name="tombolcari"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <div class="float-left ml-2">
                    <a href="<?= base_url(); ?>/umkmdata/upload" class="btn btn-primary">Add</a>
                    <a href="<?php echo site_url('viewpdf'); ?>" target="_blank" class="btn btn-primary">View
                        PDF</a>
                    <a href="<?= base_url(); ?>/export" class="btn btn-primary">
                        <i class="fas fa-file-download"></i> Export CSV</a>
                </div>
                <div class="card-body table-responsive">
                    <?php if (!empty(session()->getFlashdata('success'))): ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: '<?php echo session()->getFlashdata('success'); ?>',
                            });
                        </script>
                    <?php endif; ?>
                    <table class="table table-striped table-md">
                        <thead>
                            <tr>
                                <th style="background-color: white;">No</th>
                                <th style="background-color: white;">Tanggal</th>
                                <th style="background-color: white;">Nama</th>
                                <th style="background-color: white;">Foto KTP</th>
                                <th style="background-color: white;">Kelamin</th>
                                <th style="background-color: white;">Alamat</th>
                                <th style="background-color: white;">Kecamatan</th>
                                <th style="background-color: white;">Kelurahan</th>
                                <th style="background-color: white;">Kota</th>
                                <th style="background-color: white;">Kode Pos</th>
                                <th style="background-color: white;">Nama Usaha</th>
                                <th style="background-color: white;">Produk1</th>
                                <th style="background-color: white;">Produk2</th>
                                <th style="background-color: white;">Produk3</th>
                                <th style="background-color: white;">Produk4</th>
                                <th style="background-color: white;">Kategori</th>
                                <th style="background-color: white;">Status NIB</th>
                                <th style="background-color: white;">Alasan Tidak Lanjut</th>
                                <th style="background-color: white;">Status Akun Halal</th>
                                <th style="background-color: white;">Status Akun NIB</th>
                                <th style="background-color: white;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1 + (10 * ($currentPage - 1));
                            foreach ($umkmdata as $j):
                                ?>
                                <tr>
                                    <td>
                                        <?= $i++; ?>
                                    </td>
                                    <td>
                                        <?= $j['tanggal']; ?>
                                    </td>
                                    <td>
                                        <?= $j['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $j['fotoktp']; ?>
                                    </td>
                                    <td>
                                        <?= $j['jns_kelamin']; ?>
                                    </td>
                                    <td>
                                        <?= $j['alamat']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kecamatan']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kelurahan']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kota']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kodepos']; ?>
                                    </td>
                                    <td>
                                        <?= $j['namausaha']; ?>
                                    </td>
                                    <td>
                                        <?= $j['produk1']; ?>
                                    </td>
                                    <td>
                                        <?= $j['produk2']; ?>
                                    </td>
                                    <td>
                                        <?= $j['produk3']; ?>
                                    </td>
                                    <td>
                                        <?= $j['produk4']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kategori']; ?>
                                    </td>
                                    <td>
                                        <?= $j['status_nib']; ?>
                                    </td>
                                    <td>
                                        <span style="color: red;">
                                            <?= $j['alasan_tdk_lanjut']; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php
                                        $statusAkunHalal = $j['status_akun_halal'];
                                        if ($statusAkunHalal == 'Proses') {
                                            echo '<span class="btn btn-warning">' . $statusAkunHalal . '</span>';
                                        } elseif ($statusAkunHalal == 'Selesai') {
                                            echo '<span class="btn btn-success">' . $statusAkunHalal . '</span>';
                                        } elseif ($statusAkunHalal == 'Double') {
                                            echo '<span class="btn btn-danger">' . $statusAkunHalal . '</span>';
                                        } elseif ($statusAkunHalal == 'Tidak Bisa Dilanjut') {
                                            echo '<span class="btn btn-danger">' . $statusAkunHalal . '</span>';
                                        } else {
                                            echo $statusAkunHalal;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $statusAkunNIB = $j['status_akun_nib'];
                                        if ($statusAkunNIB == 'Proses') {
                                            echo '<span class="btn btn-warning">' . $statusAkunNIB . '</span>';
                                        } elseif ($statusAkunNIB == 'Selesai') {
                                            echo '<span class="btn btn-success">' . $statusAkunNIB . '</span>';
                                        } elseif ($statusAkunNIB == 'Double') {
                                            echo '<span class="btn btn-danger">' . $statusAkunNIB . '</span>';
                                        } elseif ($statusAkunNIB == 'Tidak Bisa Dilanjut') {
                                            echo '<span class="btn btn-danger">' . $statusAkunNIB . '</span>';
                                        } else {
                                            echo $statusAkunNIB;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="/umkmdata/<?= $j['id'] ?>/edit" class="btn btn-warning btn-sm"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <form action="/umkmdata/<?= $j['id'] ?>" method="post" class="d-inline"
                                            onsubmit="return confirm(`Apakah yakin ingin menghapus?`)">
                                            <input type="hidden" name="_method" value="delete" />
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <?= $pager->links('umkmdata', 'custom_pagination') ?>
        </div>
</div>
</div>
</div>
</section>
</div>
<?= $this->endSection() ?>