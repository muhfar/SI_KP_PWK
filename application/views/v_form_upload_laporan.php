<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('_header_login');?>

        <!--FORM UPLOAD LAPORAN-->
        <title-page>Form Upload<br>Laporan Kerja Praktik</title-page>
        <div class="form">
            <label>Laporan : </label>
            <rect></rect> 
            <a href="#"><tombol>
                <p>Upload</p>
            </tombol></a>
            
        </div>

        <!--FOOTER-->
        <!--<?php $this->load->view('_footer');?>-->
    </body>
</html>