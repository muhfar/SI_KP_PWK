<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
      
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

        <link href='<?php echo base_url('assets/css/dropzone.css'); ?>' type='text/css' rel='stylesheet'>
    	<script src='<?php echo base_url("assets/js/dropzone.js") ?>' type='text/javascript'></script>

		<script>
			// Add restrictions
			Dropzone.options.fileupload = {
					maxFilesize: 10 // MB
			};
		</script>
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
		</style>
    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header');?>

        <!-- SESSION -->
        <?php $nama = $this->session->userdata('nama');
            if($nama == ""){
                redirect(site_url('c_login'));
                echo "<script>alert('Silahkan Sign In terlebih dahulu!')</script>";
            }
        ?>

        <!--FORM UPLOAD LAPORAN-->
        <title-page>Form Upload<br>Laporan Kerja Praktik</title-page>
       
            <div class="form_upload" style = "left:20%">     
                <form action="<?= base_url('c_upload_laporan/fileUpload') ?>" enctype="multipart/form-data" style = "width:200%; border : 4px dashed rgba(7,0,70,1);"method="POST">		        
    		        <div class="dropzone" id="mydropzone" name="mainFileUploader">
    		            <div class="fallback">
    		                <input name="file" type="file"/>
    		            </div>
    		        </div>
    		    </form>
    		    <div>
    		        <button type="submit" style="color:white; margin-left: 75%; margin-top: 7%" id="submit-all"> Upload </button>
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

    <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 10870272;
        (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
        </script>
        <noscript>
        <a href="https://www.livechatinc.com/chat-with/10870272/" rel="nofollow">Chat with us</a>,
        powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
        </noscript>
    <!-- End of LiveChat code -->

    </body>
</html>
