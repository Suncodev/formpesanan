<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Tiket Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <h1>Form Pemesanan</h1>
	<form action="insert.php" method="$_POST">
    <div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputnama" name="namalengkap" />
        <label for="InputNama">Nama Lengkap</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputidentitas" />
        <label for="InputIdentitas">Nomor Identitas</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputnohp" />
        <label for="InputNoHp">No. HP</label>
      </div>
	  <div class="form-floating mb-3">
      <div class="form-floating">
        <select class="form-select" id="selectkelas" aria-label="Floating label select example">
          <option selected>Pilih kelas</option>
          <option value="1">Ekonomi</option>
          <option value="2">Bisnis</option>
          <option value="3">Eksekutif</option>
        </select>
        <label for="floatingSelect">Kelas Penumpang</label>
      </div>
	</div>
	<div class="form-floating mb-3">
        <input type="date" class="form-control" id="inputjadwal" />
        <label for="InputJadwal">Jadwal Keberangkatan</label>
      </div>
	  <div class="form-floating mb-3">
        <input type="text" class="form-control input-group-sm" id="inputnolansia" />
        <label for="InputLansia">Jumlah Penumpang</label>
		<small id="helpjumlah" class="form-text text-muted">Bukan lansia (Usia < 60)</small>
		</div>
      </div>
	  <div class="form-floating mb-3">
        <input type="text" class="form-control input-group-sm" id="inputlansia" />
        <label for="InputLansia">Jumlah Penumpang</label>
		<small id="helpjumlah" class="form-text text-muted">Usia 60 ke atas</small>
		</div>
		<div class="row g-2">
			<div class="col-md">
			  <div class="form-floating">
				<input type="text" class="form-control" id="inputharga">
				<label for="InputHarga">HARGA TIKET</label>
			  </div>
			</div>
			<div class="col-md">
			  <div class="form-floating">
				<div class="form-floating">
					<input type="text" class="form-control" id="InputBayar">
					<label for="InputBayar">TOTAL BAYAR</label>
				  </div>
			  </div>
			</div>
		  </div>
    </form>
	<br>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="checkbox" id="defaultCheck1">
		<label class="form-check-label" for="defaultCheck1">
		  Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
		</label>
		<div class="container text-center"> <br>
		<button class="btn btn-primary" type="submit">Hitung Total Bayar</button>
		<button class="btn btn-primary" type="submit">Pesan Tiket Bus</button>
		<button class="btn btn-primary" type="reset">Cancel Pesanan</button>
			</div>
		  </div>
  </body>
</html>
