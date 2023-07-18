<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PDF</title>
    <link rel="icon" href="/template2/dist/assets/img/rhn.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dee2e6;
            padding: 8px;
        }

        th {
            background-color: #f8f9fa;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>


<body>
    <div class="container mt-5">
        <h1 style="text-align: center; font-size: 40px;">RUMAH HALAL NUSANTARA</h1>
        <h1 style="text-align: center; font-size: 40px;">Data UMKM di Kota Depok</h1>
        <hr style="horizontal-line; border-top: 1px"><br><br>
        <div class="d-flex flex-row-reverse bd-highlight">
            <table class="table table-striped table-hover mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Foto KTP</th>
                        <th>Kelamin</th>
                        <th>Alamat</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Kota</th>
                        <th>Kode Pos</th>
                        <th>Nama Usaha</th>
                        <th>Produk1</th>
                        <th>Produk2</th>
                        <th>Produk3</th>
                        <th>Produk4</th>
                        <th>Kategori</th>
                        <th>Status NIB</th>
                        <th>Alasan Tidak Lanjut</th>
                        <th>Status Akun Halal</th>
                        <th>Status Akun NIB</th>
                    </tr>
                </thead>
                <tbody>
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
                                <?= $j['alasan_tdk_lanjut']; ?>
                            </td>
                            <td>
                                <?= $j['status_akun_halal']; ?>
                            </td>
                            <td>
                                <?= $j['status_akun_nib']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <br><br>
        <?= $this->include('layouts/footer') ?>
        <script>
            function openPdfInNewTab() {
                var pdfUrl = '<?php echo site_url("/viewwpdf"); ?>';
                window.open(pdfUrl, '_blank');
            }
        </script>
    </div>
</body>

</html>