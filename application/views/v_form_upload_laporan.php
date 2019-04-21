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
		</style>
    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('_header_login');?>

        <!--FORM UPLOAD LAPORAN-->
        <title-page>Form Upload<br>Laporan Kerja Praktik</title-page>
       
            <div class="form_upload">     
                <form action="<?= base_url('c_upload_laporan/fileUpload') ?>" enctype="multipart/form-data" style = "border : 4px dashed rgba(7,0,70,1);"method="POST">		        
    		        <div class="dropzone" id="mydropzone" name="mainFileUploader">
    		            <div class="fallback">
    		                <input name="file" type="file"/>
    		            </div>
    		        </div>
    		    </form>
    		    <div>
    		        <button type="submit" style="color:white" id="submit-all"> upload </button>
    		    </div>
		    </div>
            

        <!--FOOTER-->
        <?php $this->load->view('_footer');?>
	
	<script>
	Dropzone.options.mydropzone = {
            url: "<?php echo base_url('c_upload_laporan/fileUpload'); ?>",
            autoProcessQueue: false,
            maxFiles: 1,
            maxFilesize: 1,
            acceptedFiles: 'application/pdf',

            init: function () {

                var submitButton = document.querySelector("#submit-all");
                var wrapperThis = this;

                submitButton.addEventListener("click", function () {
                    wrapperThis.processQueue();                                      
                });

                this.on("addedfile", function (file) {
 				console.log(file);
                    // Create the remove button
                    var removeButton = Dropzone.createElement("<button class='btn btn-lg dark'>Remove File</button>");

                    // Listen to the click event
                    removeButton.addEventListener("click", function (e) {
                        // Make sure the button click doesn't submit the form:
                        e.preventDefault();
                        e.stopPropagation();


                        // Remove the file preview.
                        wrapperThis.removeFile(file);
                        // If you want to the delete the file on the server as well,
                        // you can do the AJAX request here.
                    });

                    // Add the button to the file preview element.
                    file.previewElement.appendChild(removeButton);
                });

                    this.on("error", function(file) { 
    			    	alert("File error"); 
    			    	this.removeFile(file);
    		    	});

    		    	this.on("success", function(file) { 
       		    		if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0){
       		    			this.removeAllFiles();
       				   		alert("success");	
        		    	}
	       		   	});
            }
        };

			
    </script>



    </body>
</html>
