<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h1 class="mt-3 mb-3">Update Data Vaksin Setiap Desa</h1>
            </center>
            <table class="table table-hover">
                <thead class="table table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Desa</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Jumlah Peserta</th>
                        <th scope="col">Lihat</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($desa as $ds) {
                        if ($i % 2 == 0) { ?>
                            <tr class="table-secondary">
                                <th scope="row"><?= $ds['id']; ?></th>
                                <td><?= $ds['nama_desa']; ?></td>
                                <td><?= $ds['kecamatan']; ?></td>
                                <td><?= $ds['jumlah']; ?></td>
                                <td>
                                    <a href=""><button class="btn btn-success">Lihat Detail</button></a>
                                </td>
                            </tr>
                        <?php
                        } else { ?>
                            <tr class="table-light">
                                <th scope="row"><?= $ds['id']; ?></th>
                                <td><?= $ds['nama_desa']; ?></td>
                                <td><?= $ds['kecamatan']; ?></td>
                                <td><?= $ds['jumlah']; ?></td>
                                <td>
                                    <a href=""><button class="btn btn-success">Lihat Detail</button></a>
                                </td>
                            </tr>
                    <?php
                        }
                    } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>