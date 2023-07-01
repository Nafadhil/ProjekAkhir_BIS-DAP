<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Job List</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="float-right ml-2">
                    <form action="" method="get">
                        <div class="float-left">
                            <input type="text" name="keyword" class="form-control" style="width:155pt;"
                                placeholder="Search...">
                        </div>
                        <div class="float-left ml-2">
                            <button type="submit" class="btn btn-primary" name="tombolcari"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="float-left ml-2">
                    <a href="<?= base_url(); ?>/job/upload" class="btn btn-primary">Add</a>
                    <a href="<?php echo site_url('viewpdf'); ?>" target="_blank" class="btn btn-primary">View
                        PDF</a>
                    <a href="<?= base_url(); ?>/export" class="btn btn-primary">
                        <i class="fas fa-file-download"></i> Export CSV</a>
                </div>
                <div class="card-body table-responsive">
                    <?php if (!empty(session()->getFlashdata('success'))): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Kelamin</th>
                                <th>Alamat</th>
                                <th>Kecamatan</th>
                                <th>Produk1</th>
                                <th>Produk2</th>
                                <th>Produk3</th>
                                <th>Produk4</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $i = 1;
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
                                        <?= $j['kelamin']; ?>
                                    </td>
                                    <td>
                                        <?= $j['alamat']; ?>
                                    </td>
                                    <td>
                                        <?= $j['kecamatan']; ?>
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
                                        <a href="/job/<?= $j['id'] ?>/edit" class="btn btn-warning btn-sm"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <form action="/job/<?= $j['id'] ?>" method="post" class="d-inline"
                                            onsubmit="return confirm(`Are you sure?`)">
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