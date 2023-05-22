<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_siswa";

//koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("koneksi gagal");

//memindahkan nilai data form ke variabel 
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

$tambah = mysqli_query($conn, "INSERT INTO tb_siswa VALUES ('', '$nama', '$kelas', '$alamat')")or die("Proses Simpan Gagal") ;

header("location:cetak.php")
 ?>