<?php
	include "koneksi.php";
	$id = $_POST['id'];
	
	$querydata = mysqli_query($conn, "SELECT * FROM tabel_dosen WHERE id_dosen='$id'");
	$data = mysqli_fetch_array($querydata);
?>
<script>
	$(document).ready(function(){
		$("#btnupdate").click(function(){
		// ambil value data dari form
		var no  = $("#txtno").val();
		var nidn  = $("#nidn").val();
		var nama  = $("#nama").val(); 
		var tmpLahir  = $("#tmpLahir").val(); 
		var tglLahir  = $("#tglLahir").val(); 
	   	var telepon  = $("#telepon").val(); 
	   	var pendidikan  = $("#pendidikan").val();
	   	var jenis = $('input:radio[name=jenis]:checked').val();

	   	var isian = "";
	   	if ($('#skill1').is(":checked")) {
		   isian += $('#skill1').val() + ",";
		}
		if ($('#skill2').is(":checked")) {
			isian += $('#skill2').val() + ",";
		}
		if ($('#skill3').is(":checked")) {
			isian += $('#skill3').val() + ",";
		}
		if ($('#skill4').is(":checked")) {
			isian += $('#skill4').val() + ",";
		}

	   	var username  = $("#username").val();
	   	var password  = $("#password").val();
	   	var golongan  = $("#golongan").val();
	   	var pangkat  = $("#pangkat").val();
	   	var pengalaman  = $("#pengalaman").val();
	   	var gajiPokok  = $("#gajiPokok").val(); 
		
		// kirim dengan metode POST ke proses.php 
		$.ajax({
			cache: false,
			type:"POST",
			url:"proses_ajax.php",    
			data: "btnupdate=Update&txtno=" + no + "&nidn="+nidn + "&nama="+nama + "&tmpLahir="+tmpLahir + "&tglLahir="+tglLahir + "&telepon="+telepon + "&pendidikan="+pendidikan + "&jenis="+jenis + "&isian="+isian + "&username="+username + "&password="+password + "&golongan="+golongan + "&pangkat="+pangkat + "&pengalaman="+pengalaman + "&gajiPokok=" + gajiPokok,
			success: function(output){                 
				$("#info").html(output);
				loadForm();
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
	});
</script>

<h2>Form Data Dosen</h2>
        <form method="post">
            <div class="form-group">
                <label>NIDN :</label>
                <input type="text" name="nidn" id="nidn" class="form-control" placeholder="Masukkan NIDN" value="<?=$data['nidn']?>">
            </div>

            <div class="form-group">
                <label>Nama :</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" value="<?=$data['nama']?>">
            </div>

            <div class="form-group">
                <label>Tempat Lahir :</label>
                <input type="text" name="tmpLahir" id="tmpLahir" class="form-control" placeholder="Makassar" value="<?=$data['tmpLahir']?>">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir :</label>
                <input type="date" name="tglLahir" id="tglLahir" class="form-control" value="<?=$data['tglLahir']?>">
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Telepon :</label>
                <input type="tel" name="telepon" id="telepon" pattern="^\d{4}-\d{4}-\d{4}$" class="form-control" placeholder="xxxx-xxxx-xxxx" value="<?=$data['telepon']?>">
            </div>

            <div class="form-group">
                <label>Pendidikan Terakhir :</label>
                <select class="form-control" name="pendidikan"  id="pendidikan">
				<option value='S2' <?php if($data['pendidikan'] == "S2") echo "selected";?>>S2</option>
                    <option value='S3' <?php if ($data['pendidikan'] == "S3") echo "selected"; ?>>S3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis Kelamin :</label><br>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="jenis" id="jenis1" class="form-check-input" value="L" <?php if ($data['gender'] == "L") echo "checked"; ?>> Pria
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="jenis" id="jenis2" class="form-check-input" value="P" <?php if ($data['gender'] == "P") echo "checked"; ?>> Wanita
                    </label>
                </div>
            </div>

            <!--Spesialisasi-->
            <div class="form-group">
                <label class="font-weight-bold">Spesialisasi :</label><br>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="skill1" id="skill1" class="form-check-input" value="Programming" <?php if (preg_match("/Programming/", $data['spesialisasi'])) echo "checked"; ?>> Programming
                        </label>
                    </div>
            
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="skill2" id="skill2" class="form-check-input" value="Networking" <?php if (preg_match("/Networking/", $data['spesialisasi'])) echo "checked"; ?>> Networking
                        </label>
                    </div>
            
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="skill3" id="skill3" class="form-check-input" value="Database" <?php if (preg_match("/Database/", $data['spesialisasi'])) echo "checked"; ?>> Database
                        </label>
                    </div>

                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="skill4" id="skill4" class="form-check-input" value="Analyst" <?php if (preg_match("/Analyst/", $data['spesialisasi'])) echo "checked"; ?>> Analyst
                        </label>
                    </div>
            </div>

            <!--Username-->
            <div class="form-group">
                <label class="font-weight-bold">Username :</label>
                <div class="input-group-append">
                    <input type="email" class="form-control" name="username" id="username" placeholder="Masukkan Email" value="<?=$data['username']?>">
                    <span class="input-group-text">@example.com</span>
                </div>
            </div>

            <div class="form-group">
                <label>Password  :</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="********" value="<?=$data['pass']?>">
            </div>

            <!--Golongan-->
            <div class="form-group">
                <label>Golongan :</label>
                <select class="form-control" name="golongan" id="golongan">
					<option value='3A' <?php if($data['golongan'] == "3A") echo "selected";?>>3A</option>
                    <option value='3B' <?php if($data['golongan'] == "3B") echo "selected";?>>3B</option>
                    <option value='3C' <?php if($data['golongan'] == "3C") echo "selected";?>>3C</option>
                    <option value='4A' <?php if($data['golongan'] == "4A") echo "selected";?>>4A</option>
                    <option value='4B' <?php if($data['golongan'] == "4B") echo "selected";?>>4B</option>
                    <option value='4C' <?php if($data['golongan'] == "4C") echo "selected";?>>4C</option>
                </select>
            </div>

            <!--Pangkat-->
            <div class="form-group">
                <label>Golongan :</label>
                <select class="form-control" name="pangkat"  id="pangkat">
					<option value='AA' <?php if($data['pangkat'] == "AA") echo "selected";?>>AA</option>
                    <option value='L' <?php if($data['pangkat'] == "L") echo "selected";?>>L</option>
                    <option value='LK' <?php if($data['pangkat'] == "LK") echo "selected";?>>LK</option>
                    <option value='GB' <?php if($data['pangkat'] == "GB") echo "selected";?>>GB</option>
                </select>
            </div>

            <div class="form-group">
                <label>Pengalaman Kerja :</label>
                <textarea class="form-control" name="pengalaman" id="pengalaman" rows="5" placeholder="Pengalaman"><?=$data['pengalaman']?></textarea>
            </div>

            <div class="form-group">
                <label>Gaji Pokok :</label>
                <input type="text" name="gajiPokok" id="gajiPokok" class="form-control" placeholder="1000000" value="<?=$data['gajiPokok']?>">
            </div>

			<button type="button" id="btnupdate" name="btnupdate" class="btn btn-primary"><i class='far fa-edit'></i> Update</button>
        </form>
		<input type="hidden" id="txtno" value="<?=$id?>">