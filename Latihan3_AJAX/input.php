<?php
    include "cekSession.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Bootstrap Form</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="bootstrap.min.css">
  	<script src="jquery.min.js"></script>
 	<script src="bootstrap.min.js"></script>
	<script> 
		function resetForm()
		{
			//kalau ada tombol reset
			$("#reset").click();

			//kalau tidak ada, hilangkan komentar di bawah ini
	
			/*$("#txtnama").val(""); 
			$("#jenis1").prop("checked", true)
			$("#txtemail").val("");
			$("#txtpesan").val("");*/
		}

		function loadForm()
		{
			$.ajax({
				type:"POST",
				url:"form_input.php",    
				success: function(output){                 
					$("#isiForm").html(output);
					resetForm();
				},
				error: function(){
					$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
				}
			});
		}
		
		function editData(id)
		{
			$.ajax({
				type:"POST",
				url:"form_edit.php",    
				data: "id=" + id,
				success: function(output){                 
					$("#isiForm").html(output);
					resetForm();
				},
				error: function(){
					$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
				}
			});		
		}
		
		function hapusData(id)
		{
			$.ajax({
				type:"POST",
				url:"proses_ajax.php",    
				data: "btndel=Delete&id=" + id,
				success: function(output){                 
					$("#info").html(output);
					loadForm();
					$("#btnview").click();
				},
				error: function(){
					$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
				}
			});		
		}
	</script>
	
</head>
<body onLoad="loadForm()">
	<div class="container">
		<h4 class="text-right"><a href="logout.php" class="text-right"><i class='fas fa-sign-in-alt'></i> Logout</a></h4>
	</div>
	
	<div class="container" id="isiForm">

	</div>
	<br>
	<hr>
	<div class="container">
		<div class="row">
			<label class="control-label text-right" for="txtnama">Cari</label>
			<div class="col-sm-4" class="form-group">          
        		<select id='searchby' class="form-control">
					<option value='nama'>Cari Nama</option>
					<option value='gender'>Cari Jenis Kelamin</option>
					<option value='username'>Cari Email</option>
				</select>
      		</div>
			<div class="col-sm-5" class="form-group">          
        		<input type="text" class="form-control" id="key" placeholder="Masukkan Kata Pencarian" name="key">
      		</div>
			<div class="col-sm-1" class="form-group">    
				<button type="button" id="btncari" name="btncari" class="btn btn-info">Cari</button>
			</div>
		</div>
	</div>
	<BR>
	<div class="container">
		<div class="row" id="info">
			Ini Div INFO
		</div>
	</div>
</body>
</html>