<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Generate PDF in Codeigniter from View</h2>
        <div class="d-flex flex-row-reverse bd-highlight">
            <table class="table table-striped table-hover mt-4">
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

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script>
            function openPdfInNewTab() {
                var pdfUrl = '<?php echo site_url("/viewwpdf"); ?>';
                window.open(pdfUrl, '_blank');
            }
        </script>
</body>

</html>