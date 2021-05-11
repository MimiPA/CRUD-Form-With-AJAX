<div class="table-responsive">
			<h2>List Data Dosen</h2>
<table class="table table-striped ">
	<thead>
		<tr>
			<th>ID_Dosen</th>
            <th>NIDN</th>
			<th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Telepon</th>
            <th>Pendidikan</th>
            <th>Jenis Kelamin</th>
            <th>Spesialisasi</th>
            <th>Username</th>
        	<th>Password</th>
            <th>Golongan</th>
            <th>Pangkat</th>
            <th>Pengalaman</th>
            <th>Gaji Pokok</th>
            <th>Total Gaji</th>
		</tr>
	</thead>
	<tbody>
<?php
	include "koneksi.php";
	
	$queryanggota = mysqli_query($conn, "SELECT * FROM tabel_dosen");
	while ($anggota = mysqli_fetch_array($queryanggota))
	{
?>
	<tr>
		<td><?=$anggota['id_dosen']?></td>
		<td><?=$anggota['nidn']?></td>
		<td><?=$anggota['nama']?></td>
		<td><?=$anggota['tmpLahir']?></td>
		<td><?=$anggota['tglLahir']?></td>
		<td><?=$anggota['telepon']?></td>
		<td><?=$anggota['pendidikan']?></td>
		<td><?=$anggota['gender']?></td>
		<td><?=$anggota['spesialisasi']?></td>
		<td><?=$anggota['username']?></td>
		<td><?=$anggota['pass']?></td>
		<td><?=$anggota['golongan']?></td>
		<td><?=$anggota['pangkat']?></td>
		<td><?=$anggota['pengalaman']?></td>
		<td><?=$anggota['gajiPokok']?></td>
		<td><?=$anggota['total_gaji']?></td>

		<td><button type="button" id="btnedit" name="btnedit" class="btn btn-info" onClick="editData('<?=$anggota['id_dosen']?>')">Edit</button></td>
		<td><button type="button" id="btnhapus" name="btnhapus" class="btn btn-warning" onClick="hapusData('<?=$anggota['id_dosen']?>')">Hapus</button></td>
	</tr>
<?php
	}
?>
	</tbody>
</table>
</div>