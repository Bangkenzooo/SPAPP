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
                    <h1 class="h2">SISWA</h1>

                </div>
                <a href="<?= base_url() ?>index.php/admin/siswa/create" class=" btn btn-primary">add</a>
                <br>
                <br>

                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>No_telepon</th>
                        <th>Id_spp</th>
                        <th>Id_Login</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    foreach ($siswa as $DataSiswa) :
                    ?>
                    <tr>
                        <td><?= $DataSiswa['nisn'] ?></td>
                        <td><?= $DataSiswa['nis'] ?></td>
                        <td><?= $DataSiswa['nama'] ?></td>
                        <td><?= $DataSiswa['nama_kelas'] ?></td>
                        <td><?= $DataSiswa['alamat'] ?></td>
                        <td><?= $DataSiswa['no_telp'] ?></td>
                        <td><?= $DataSiswa['id_spp'] ?></td>
                        <td><?= $DataSiswa['id_login'] ?></td>
                        <td>
                            <img src="<?= $DataSiswa['image'] ?>" style="width: 50%;" alt="">
                        </td>
                        <td> <a href="<?= base_url() ?>index.php/admin/siswa/delete?nisn=<?= $DataSiswa['nisn'] ?>" class="btn btn-danger">Hapus</a>
                            <a href="" class="btn btn-warning">Ubah</a>
                        </td>

                        <!-- <td><a href="" class="btn btn-danger">Hapus</a>
                            <a href="" class="btn btn-warning">Detail</a>
                            <a href="" class="btn btn-primary">Ubah</a>
                        </td> -->
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
