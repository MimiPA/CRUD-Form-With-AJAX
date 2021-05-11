<script>
	$(document).ready(function(){
	$("#btnkirim").click(function(){
	   // ambil value data dari form
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
			data: "btnkirim=Kirim&nidn="+nidn + "&nama="+nama + "&tmpLahir="+tmpLahir + "&tglLahir="+tglLahir + "&telepon="+telepon + "&pendidikan="+pendidikan + "&jenis="+jenis + "&isian="+isian + "&username="+username + "&password="+password + "&golongan="+golongan + "&pangkat="+pangkat + "&pengalaman="+pengalaman + "&gajiPokok=" + gajiPokok,
			success: function(output){                 
				$("#info").html(output);
				resetForm();
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
	
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

		alert('aa' + no);
		
		// kirim dengan metode POST ke proses.php 
		$.ajax({
			cache: false,
			type:"POST",
			url:"proses_ajax.php",    
			data: "btnupdate=Update&txtno=" + no + "&nidn="+nidn + "&nama="+nama + "&tmpLahir="+tmpLahir + "&tglLahir="+tglLahir + "&telepon="+telepon + "&pendidikan="+pendidikan + "&jenis="+jenis + "&isian="+isian + "&username="+username + "&password="+password + "&golongan="+golongan + "&pangkat="+pangkat + "&pengalaman="+pengalaman + "&gajiPokok=" + gajiPokok,
			success: function(output){                 
				$("#info").html(output);
				resetForm();
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
	
	$("#btnview").click(function(){
		// kirim dengan metode POST ke view.php 
		$.ajax({
			cache: false,
			type:"POST",
			url:"view.php",    
			success: function(output){                 
				$("#info").html(output);
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
	
	$("#btncari").click(function(){
		key = $("#key").val();
		searchby = $("#searchby").val();
		// kirim dengan metode POST ke view.php 
		$.ajax({
			cache: false,
			type:"POST",
			url:"cari.php", 
			data: "key=" + key + "&searchby=" + searchby,
			success: function(output){                 
				$("#info").html(output);
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
});
</script>


<h2>Form Data Dosen</h2>
	<div class="container">
        <form method="post">
            <div class="form-group">
                <label>NIDN :</label>
                <input type="text" name="nidn" id="nidn" class="form-control" placeholder="Masukkan NIDN" required/>
            </div>

            <div class="form-group">
                <label>Nama :</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required/>
            </div>

            <div class="form-group">
                <label>Tempat Lahir :</label>
                <input type="text" name="tmpLahir" id="tmpLahir" class="form-control" placeholder="Makassar" required/>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir :</label>
                <input type="date" name="tglLahir" id="tglLahir" class="form-control" required/>
            </div>

            <div class="form-group">
                <label>Telepon :</label>
                <input type="tel" name="telepon" id="telepon" pattern="^\d{4}-\d{4}-\d{4}$" class="form-control" placeholder="xxxx-xxxx-xxxx" required/>
            </div>

            <div class="form-group">
                <label>Pendidikan Terakhir :</label>
                <select class="form-control" name="pendidikan"  id="pendidikan">
                    <option>S2</option>
                    <option>S3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis Kelamin :</label><br>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="jenis" id="jenis1" class="form-check-input" value="L"> Pria
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="jenis" id="jenis2" class="form-check-input" value="P"> Wanita
                    </label>
                </div>
            </div>

            <!--Spesialisasi-->
            <div class="form-group">
                <label class="font-weight-bold">Spesialisasi :</label><br>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="skill1" id="skill1" class="form-check-input" value="Programming" >Programming
                        </label>
                    </div>
            
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="skill2" id="skill2" class="form-check-input" value="Networking" >Networking
                        </label>
                    </div>
            
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="skill3" id="skill3" class="form-check-input" value="Database" >Database
                        </label>
                    </div>

                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="skill4" id="skill4" class="form-check-input" value="Analyst" >Analyst
                        </label>
                    </div>
            </div>

            <!--Username-->
            <div class="form-group">
                <label class="font-weight-bold">Username :</label>
                <div class="input-group-append">
                    <input type="email" class="form-control" name="username" id="username" placeholder="Masukkan Email" required/>
                    <span class="input-group-text">@example.com</span>
                </div>
            </div>

            <div class="form-group">
                <label>Password  :</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="********" required/>
            </div>

            <!--Golongan-->
            <div class="form-group">
                <label>Golongan :</label>
                <select class="form-control" name="golongan" id="golongan">
                    <option>3A</option>
                    <option>3B</option>
                    <option>3C</option>
                    <option>4A</option>
                    <option>4B</option>
                    <option>4C</option>
                </select>
            </div>

            <!--Pangkat-->
            <div class="form-group">
                <label>Golongan :</label>
                <select class="form-control" name="pangkat"  id="pangkat">
                    <option>AA</option>
                    <option>L</option>
                    <option>LK</option>
                    <option>GB</option>
                </select>
            </div>

            <div class="form-group">
                <label>Pengalaman Kerja :</label>
                <textarea class="form-control" name="pengalaman" id="pengalaman" rows="5" placeholder="Pengalaman"></textarea>
            </div>

            <div class="form-group">
                <label>Gaji Pokok :</label>
                <input type="text" name="gajiPokok" id="gajiPokok" class="form-control" placeholder="1000000" required/>
            </div>
			
			<button type="button" id="btnkirim" name="btnkirim" class="btn btn-primary"><i class='fas fa-download'></i> Submit</button>
			<button type="button" id="btnview" name="btnview" class="btn btn-success">Lihat</button>
			<button type="reset"  id='reset' class="btn btn-danger"><i class='fas fa-cut'></i> Reset</button>
        </form>
	</div>