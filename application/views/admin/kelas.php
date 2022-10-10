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
                    <h1 class="h2">Kelas</h1>
                </div>
                <a href="<?= base_url() ?>index.php/admin/kelas/create" class=" btn btn-primary">add</a>
                <br>
                <br>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>KELAS</th>
                        <th>ID KELAS</th>
                        <th>AKSI</th>
                    </tr>
                    <?php
                    foreach ($kelas as $DataKelas) :
                    ?>
                    <tr>
                        <td><?= $DataKelas['nama_kelas'] ?></td>
                        <td><?= $DataKelas['id_kk'] ?></td>
                        <td>
                            <a href="<?= base_url() ?>index.php/admin/kelas/delete?id_kelas=<?= $DataKelas['id_kelas'] ?>" class="btn btn-danger">Hapus</a>
                            <a href="<?= base_url() ?>index.php/admin/kelas/edit?id_kelas=<?= $DataKelas['id_kelas'] ?>" class="btn btn-warning">Ubah</a>
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
