<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Siswa</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="card-header">
		PENDAFTARAN SISWA BARU
	</div>
	<div class="card-body">
		<form method="post" action="simpan_siswa.php">
			<div class="form-group row">
				<label for="nama" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" name="nama" id="nama" class="form-control" class="warning">
					</div>
			</div><br>
			<div class="form-group row">
				<label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
					<div class="col-sm-10">
						<input type="text" name="kelas" id="kelas" class="form-control" class="warning">
					</div>
			</div><br>
			<div class="form-group row">
				<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<input type="text" name="alamat" id="alamat" class="form-control" class="warning">
					</div>
			</div><br>
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
					<span><a href="cetak.php" class="btn btn-danger">Batal</a></span>
				</div>
			</div><br>
		</form>
	</div>												
</body>
</html>