<?php
	include "koneksi.php";
	
	if (isset($_POST['btnkirim'])) {
		$nidn = $_POST['nidn'];
		$nama = $_POST['nama'];
		$tmpLahir = $_POST['tmpLahir'];
		$tglLahir = $_POST['tglLahir'];
		$telepon = $_POST['telepon'];
		$pendidikan = $_POST['pendidikan'];
		$jenis = $_POST['jenis'];
		
		$skill = $_POST['isian'];
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$golongan = $_POST['golongan'];
		$pangkat = $_POST['pangkat'];
		$pengalaman = $_POST['pengalaman'];
		$gajiPokok = $_POST['gajiPokok'];

		if($golongan == '3A' || $golongan == '3B'){
			$total_gaji = $gajiPokok + 500000;
		}
		else if($golongan == '3C'){
			$total_gaji = $gajiPokok + 750000;
		}
		else if($golongan == '4A' || $golongan == '4B'){
			$total_gaji = $gajiPokok + 1000000;
		}
		else if($golongan == '4C'){
			$total_gaji = $gajiPokok + 1500000;
		}
		  
		if($pangkat == 'AA'){
			$total_gaji += 375000;
		}
		else if($pangkat == 'L'){
			$total_gaji += 750000;
		}
		else if($pangkat == 'LK'){
			$total_gaji += 1500000;
		}
		else if($pangkat == 'GB'){
			$total_gaji += 7500000;
		}

		$mysqli = "INSERT INTO tabel_dosen (nidn, nama, tmpLahir, tglLahir, telepon, pendidikan, gender, spesialisasi, username, pass, golongan, pangkat, pengalaman, gajiPokok, total_gaji) VALUES ('$nidn', '$nama', '$tmpLahir', '$tglLahir', '$telepon', '$pendidikan', '$jenis', '$skill', '$username', '$password', '$golongan', '$pangkat', '$pengalaman', '$gajiPokok', '$total_gaji')";
		$result = mysqli_query($conn, $mysqli);
		
		if ($result) {
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-success">
				<div class="panel-heading">Hasil Penginputan Data</div>
				<div class="panel-body">Data Berhasil Dimasukkan ke Database</div>
			</div>
		</div>
			</div>
			<?php
		}
		else
		{
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-danger">
				<div class="panel-heading">Hasil Penginputan Data</div>
				<div class="panel-body">Data Gagal Dimasukkan ke Database</div>
			</div>
		</div>
			</div>
			<?php
		}
	}
	
	if (isset($_POST['btnupdate']))
	{
		$no = $_POST['txtno'];
		$nidn = $_POST['nidn'];
		$nama = $_POST['nama'];
		$tmpLahir = $_POST['tmpLahir'];
		$tglLahir = $_POST['tglLahir'];
		$telepon = $_POST['telepon'];
		$pendidikan = $_POST['pendidikan'];
		$jenis = $_POST['jenis'];
		
		$skill = $_POST['isian'];
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$golongan = $_POST['golongan'];
		$pangkat = $_POST['pangkat'];
		$pengalaman = $_POST['pengalaman'];
		$gajiPokok = $_POST['gajiPokok'];

		if($golongan == '3A' || $golongan == '3B'){
			$total_gaji = $gajiPokok + 500000;
		}
		else if($golongan == '3C'){
			$total_gaji = $gajiPokok + 750000;
		}
		else if($golongan == '4A' || $golongan == '4B'){
			$total_gaji = $gajiPokok + 1000000;
		}
		else if($golongan == '4C'){
			$total_gaji = $gajiPokok + 1500000;
		}
		  
		if($pangkat == 'AA'){
			$total_gaji += 375000;
		}
		else if($pangkat == 'L'){
			$total_gaji += 750000;
		}
		else if($pangkat == 'LK'){
			$total_gaji += 1500000;
		}
		else if($pangkat == 'GB'){
			$total_gaji += 7500000;
		}

		$queryUpdate = "UPDATE tabel_dosen SET nidn='$nidn', nama='$nama', tmpLahir='$tmpLahir', tglLahir='$tglLahir', telepon='$telepon', pendidikan='$pendidikan', gender='$jenis', spesialisasi='$skill', username='$username', pass='$password', golongan='$golongan', pangkat='$pangkat', pengalaman='$pengalaman', gajiPokok='$gajiPokok', total_gaji='$total_gaji' WHERE id_dosen='$no'";
		$resultUpdate = mysqli_query($conn, $queryUpdate);

		if ($resultUpdate) {
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-success">
				<div class="panel-heading">Hasil Edit Data</div>
				<div class="panel-body">Data Berhasil Diedit</div>
			</div>
		</div>
			</div>
			<?php
		}
		else
		{
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-danger">
				<div class="panel-heading">Hasil Edit Data</div>
				<div class="panel-body">Data Gagal Diedit</div>
			</div>
		</div>
			</div>
			<?php
		}
	}
	
	if (isset($_POST['btndel']))
	{
		$no = $_POST['id'];
		$insertdb = mysqli_query($conn, "DELETE FROM tabel_dosen WHERE id_dosen='$no'");
		if ($insertdb)
		{
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-success">
				<div class="panel-heading">Hasil Hapus Data</div>
				<div class="panel-body">Data Berhasil Dihapus</div>
			</div>
		</div>
			</div>
			<?php
		}
		else
		{
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-danger">
				<div class="panel-heading">Hasil Hapus Data</div>
				<div class="panel-body">Data Gagal Dihapus</div>
			</div>
		</div>
			</div>
			<?php
		}
	}
?>
