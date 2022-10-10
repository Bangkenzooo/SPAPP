<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

<div class="container">
<form action="<?= base_url() ?>index.php/admin/pembayaran/store" method="POST">
  <div class="mb-3">
	<br><br>

  <h3>Form Transaksi</h3>
  <br>
  <br>
    <!-- <label for="exampleInputEmail1" class="form-label">id pembayaran</label>
    <input name="id_pembayaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">id petugas </label>
    <input name="id_petugas" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">tgl_bayar</label>
    <input name="tgl_bayar" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">bulan bayar</label>
    <input name="bulan_dibayar" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">tahun bayar</label>
    <input name="tahun_dibayar" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">id spp</label>
    <input name="id_spp" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">jumlah bayar</label>
    <input name="jumlah_bayar" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>





<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
