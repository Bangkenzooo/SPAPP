<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

    <?php $this->load->view("admin/_partials/navbar.php") ?>

    <div class="container-fluid">
        <div class="row">

            <?php $this->load->view("admin/_partials/sidebar.php") ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Transaksi</h1>
                </div>
                <a href="<?= base_url() ?>index.php/admin/pembayaran/create" class="btn btn-primary">Add</a>
                <br>
                <br>

                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>id_pembayaran</th>
                        <th>id_petugas</th>
                        <th>tgl_pembayaran</th>
                        <th>bulan</th>
                        <th>tahun</th>
                        <th>Id_spp</th>
                        <th>jumlah_bayar</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    foreach ($pembayaran as $DataTransaksi) :
                    ?>
                    <tr>
                        <td><?= $DataTransaksi['id_pembayaran'] ?></td>
                        <td><?= $DataTransaksi['id_petugas'] ?></td>
                        <td><?= $DataTransaksi['tgl_bayar'] ?></td>
                        <td><?= $DataTransaksi['bulan_dibayar'] ?></td>
                        <td><?= $DataTransaksi['tahun_dibayar'] ?></td>
                        <td><?= $DataTransaksi['id_spp'] ?></td>
                        <td><?= $DataTransaksi['jumlah_bayar'] ?></td>
                        <td>
                            <a href="<?= base_url() ?>index.php/admin/pembayaran/delete?id_pembayaran=<?= $DataTransaksi['id_pembayaran'] ?>" class="btn btn-danger">Hapus</a>
                            <a href="" class="btn btn-warning">Ubah</a>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </table>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
