<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link href='<?php echo base_url('assets/css/dropzone.css'); ?>' type='text/css' rel='stylesheet'>
    	<script src='<?php echo base_url("assets/js/dropzone.js") ?>' type='text/javascript'></script>

		<style>
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
		    .submitBtn{
		      position: absolute;
			  left: 469px;
			  top: 528px;
		    }
		</style>
    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('_header_login');?>

        <!--FORM UPLOAD LAPORAN-->
        <title-page>Form Upload<br>Laporan Kerja Praktik</title-page>
        <div class="form">
            <label>Laporan : </label>
            <div class='form_upload'>
			  <!-- Dropzone -->
		      <form action="<?= base_url('c_upload_laporan/fileUpload') ?>" enctype="multipart/form-data" class="dropzone" id="fileUpload">   	
		      	<p class="dz-message text-center">Tekan atau Tarik Kesini!</p>
		      	<!-- <input type="button" name="Cancel" value="Cancel"> -->
		      </form> 
		    </div>
            
            <div align="center">
            	<button type="button" class="submitBtn" id="submit">Upload</button>
            </div>
            
        </div>


	
        <!--FOOTER-->
        <?php $this->load->view('_footer');?>
	
	<script>
		$(document).ready(function(){


		Dropzone.options.fileUpload = {
		  autoProcessQueue: false,
		  acceptedFiles: 'application/pdf',
		  maxFiles: 1,
		  maxFilesize: 10,
		  addRemoveLinks: true,
		  init: function() {
		  	var submitBtn = document.querySelector(#submit);
				    
				   

		  	this.on("complete", function(file) { 
		    	this.removeAllFiles();
		    	alert("complete");
		    });
		    // this.on("success", function(file) { 
		    // 	alert("Added file."); 
		    // });
		    this.on("error", function(file) { 
		    	alert("File error"); 
		    	this.removeFile(file);
		    });

		    this.on("maxfilesexceeded", function(file) { 
		    	alert("maxfilesexceeded file."); 
		    	this.removeFile(file);
		    });		    
		  }
		  
		  
		};
});
    </script>



    </body>
</html>
