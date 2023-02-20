<?php 
session_start();
include ('hasLogin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pasien</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/icon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
include ('nav.php');
?>
	<div class="judul">
  		<h1>DAFTAR PASIEN</h1>
	</div>

	<div style="margin-left: 5%;">
			<a class="tambah btn btn-lg" href="#"> <span class="tombol">TAMBAH DATA</span> </a> 
	</div>
	<div class="box">
  		<table>
  			<thead>
  				<tr>
  					<th>Nama Pasien</th>
  					<th>Penyakit</th>
  					<th>Obat</th>
  				</tr>
  			</thead>
  			<tbody id="disPasien">
  				
  			</tbody>
  		</table>
	</div>

	<!-- Awal Modal Tambah Data-->
	<div class="modal fade" id="ins_dat_pasien" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialong" role="document">
			<div class="modal-content" style="background-color: #99ccff;">
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
					<h3 class="modal-title" id="myModalLabel">TAMBAH DATA PASIEN</h3>
				</div>
				<div class="modal-body form-horizontal">
					<div class="row form-group" id="Gnama_pasien">
            			<label class="control-label col-sm-3" for="nama_pasien">Nama Pasien :</label>
            			<div class="col-sm-9">
                			<input type="text" class="form-control" id="nama_pasien" placeholder=" Masukkan Nama Pasien" name="nama_pasien">
            			</div>
        			</div>
					<div class="row form-group" id="Gpenyakit">
            			<label class="control-label col-sm-3" for="penyakit">Penyakit :</label>
            			<div class="col-sm-9">
                			<input type="text" class="form-control" id="penyakit" placeholder=" Masukkan Penyakit yang Diderita" name="penyakit">
            			</div>
        			</div>
					<div class="row form-group" id="Gobat">
            			<label class="control-label col-sm-3" for="obat">Obat :</label>
            			<div class="col-sm-9">
                			<input type="text" class="form-control" id="obat" placeholder=" Masukkan Nama Obat " name="obat">
            			</div>
        			</div>
				</div>
				<div class="modal-footer">
                	<button type="button" class="tombol btn btn-info btn-block" onclick="tambahData()"><span class="glyphicon glyphicon-floppy-save" ></span> SIMPAN</button>
            	</div>
			</div>
		</div>
	</div>
	<!-- Akhir Modal Tambah Data-->

	<!-- Awal Modal Edit Data-->
	<div class="modal fade" id="ed-dat_pasien" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialong" role="document">
			<div class="modal-content" style="background-color: #99ccff;">
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
					<h3 class="modal-title" id="myModalLabel">UPDATE DATA PASIEN</h3>
				</div>
				<div class="modal-body form-horizontal">
					<div class="row form-group" id="Gnama_pasien">
            			<label class="control-label col-sm-3" for="up-nama_pasien">NAMA PASIEN :</label>
            			<div class="col-sm-9">
                			<input type="text" class="form-control" id="up-nama_pasien" placeholder=" Masukkan Nama Pasien" name="up-nama_pasien">
            			</div>
        			</div>
				</div>
				<div class="modal-body form-horizontal">
					<div class="row form-group" id="Gpenyakit">
            			<label class="control-label col-sm-3" for="up-penyakit">PENYAKIT :</label>
            			<div class="col-sm-9">
                			<input type="text" class="form-control" id="up-masalah" placeholder=" Masukkan Jenis Penyakit" name="up-penyakit">
            			</div>
        			</div>
				</div>
				<div class="modal-body form-horizontal">
					<div class="row form-group" id="Gobat">
            			<label class="control-label col-sm-3" for="up-obat">OBAT :</label>
            			<div class="col-sm-9">
                			<input type="text" class="form-control" id="up-obat" placeholder=" Masukkan Nama Obat" name="up-obat">
            			</div>
        			</div>
				</div>
				<div class="modal-footer">
                	<button type="button" class="tombol btn btn-info btn-block" onclick="UpPasien()"><span class="glyphicon glyphicon-floppy-save" ></span> SIMPAN</button>
                	<input type="hidden" id="hidden_masalah_id">
            	</div>
			</div>
		</div>
	</div>
	<!-- Akhir Modal Edit Data-->
	
	<script>

		$(document).ready(function(){

			$('#disPasien').load("disPasien.php");

			if("<?php echo $_SESSION['status'];?>" != "admin"){
           $(".edit").hide();
       }

			$(document).on('click','.tambah',function(){
				$("#ins_dat_pasien").modal("show");
			});
			$(document).on('click','.edit',function(e){
        var id = $(this).attr("id");
        $("#hidden_masalah_id").val(id);
        $.post("api/dat-masalah.php",{
          id:id
        },
          function (data,status) {
            var mslh = JSON.parse(data);
            $("#up-kodeM").val(mslh.kodeM);
            $("#up-masalah").val(mslh.masalah); 
          }
        );
        $("#ed-dat_pasien").modal("show");
			});
		});

		function UpPasien(){
			var nama_pasien = $('#up-nama_pasien').val();
			var penyakit = $('#up-penyakit').val();
			var obat = $('#up-obat').val();
			var id = $("#hidden_masalah_id").val(); 
			$.post("up-pasien.php", {
				nama_pasien: nama_pasien, penyakit: penyakit, obat: obat,
			}, function (data, status) {
				$("#ed-dat_pasien").modal("hide");
				$("#up-nama_pasien").val("");
				$("#up-obat").val("");
				$("#penyakit").val("");
				$('#disPasien').load("disPasien.php");
      });
    }

		function tambahData() {
			var nama_pasien = $('#nama_pasien').val();
			var penyakit = $('#penyakit').val();
			var obat = $('#obat').val();
		$.post("ins-pasien.php", {
			nama_pasien: nama_pasien, penyakit: penyakit, obat: obat,
		}, function (data, status) {
			$("#ins-pasien").modal("hide");
			$("#nama_pasien").val("");
			$("#penyakit").val("");
			$("#obat").val("");
			$('#disPassien').load("disPasien.php");
		});
		}
	</script>
</body>
</html>
