<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>SI KP PWK : Upload Surat Laporan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Dropzone CSS & JS -->
    <link href='<?php echo base_url('assets/css/dropzone.css'); ?>' type='text/css' rel='stylesheet'>
    <script src='<?php echo base_url("assets/js/dropzone.js") ?>' type='text/javascript'></script>
    
    <!-- Dropzone CDN -->
    <!-- 
    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
    -->

	<style>
		#Upload_tombol {
		opacity: 1;
		position: absolute;
		left: 643px;
		top: 515px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		overflow: visible;
		width: 60px;
		white-space: nowrap;
		text-align: center;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(255,255,255,1);
	}

	.form_upload{
      padding: 5px;
      margin: 0 auto;
      position: absolute;
	  left: 469px;
	  top: 278px;
	  width: 30% ;
      height: 20%;
    }    
    .dz-message{
      text-align: center;
      font-size: 28px;
    }
	</style>
	
</head>

<body>
	

	<div id="form_upload_pendaftaran">
	<!-- <svg class="Rectangle_25">
		<rect id="Rectangle_25" rx="6" ry="6" x="0" y="0" width="474" height="167">
		</rect>
	</svg> -->
	<div id="Form_Upload_Pendaftaran_Kuliah">
		<span>Form Upload<br/>Laporan Kuliah Praktik</span>
	</div>
	<div id="Berkas">
		<span>Laporan</span>
	</div>
	
	<div id="_">
		<span>:</span>
	</div>

    
	<div class='form_upload'>
	  <!-- Dropzone -->
      <form action="<?= base_url('c_upload_laporan/fileUpload') ?>" enctype="multipart/form-data" class="dropzone" id="fileUpload">   	
      	<p class="dz-message text-center">Tekan atau Tarik Kesini!</p>
      	<!-- <input type="button" name="Cancel" value="Cancel"> -->
      </form> 
    </div>

	<svg class="Rectangle_17">
		<rect id="Rectangle_17" rx="21.5" ry="21.5" x="0" y="0" width="176" height="43">
		</rect>
	</svg> 
	<div id="Upload_tombol">
		<span>Upload</span>
	</div>
	

	<script>
		Dropzone.options.fileUpload = {
		  init: function() {
		    this.on("success", function(file) { 
		    	alert("Added file."); 
		    });
		    this.on("error", function(file) { 
		    	alert("File error"); 
		    	this.removeFile(file);
		    });

		    this.on("maxfilesexceeded", function(file) { 
		    	alert("maxfilesexceeded file."); 
		    	this.removeFile(file);
		    });		    
		  },
		  paramName : "file",
		  acceptedFiles: 'application/pdf',
		  maxFiles: 1,
		  maxFilesize: 10,
		  addRemoveLinks: true
		};



	
    </script>

	<?php $this->load->view('_header_login');?>


</body>
</html>
