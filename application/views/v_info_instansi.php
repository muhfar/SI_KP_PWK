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

    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header');?>

        <title-page>Info Instansi</title-page>

        <!--LIST INSTANSI-->
        <section class="container-fluid">
            <a href="#"><div class="instansi">
                <icon-instansi></icon-instansi>
                <title-instansi>Perusahaan A</title-instansi>
            </div><a>

            <a href="#"><div class="instansi" 
                style="left:367px">
                <icon-instansi></icon-instansi>
                <title-instansi>Perusahaan B</title-instansi>
            </div><a>

            <a href="#"><div class="instansi"
                style="left:686px">
                <icon-instansi></icon-instansi>
                <title-instansi>Perusahaan C</title-instansi>
            </div><a>

            <a href="#"><div class="instansi"
                style="left:1005px">
                <icon-instansi></icon-instansi>
                <title-instansi>Perusahaan D</title-instansi>
            </div><a>

            <a href="#"><div class="instansi" style="top:544px">
                <icon-instansi></icon-instansi>
                <title-instansi>Perusahaan E</title-instansi>
            </div><a>

            <a href="#"><div class="instansi"
                 style="left:367px; top:544px">
                <icon-instansi></icon-instansi>
                <title-instansi>Perusahaan F</title-instansi>
            </div><a>

            <a href="#"><div class="instansi"
                style="left:686px; top:544px">
                <icon-instansi></icon-instansi>
                <title-instansi>Perusahaan G</title-instansi>
            </div><a>

            <a href="#"><div class="instansi"
                style="left:1005px; top:544px">
                <icon-instansi></icon-instansi>
                <title-instansi>Perusahaan H</title-instansi>
            </div><a>
        </section>

        <!--FOOTER-->
        <!--<?php $this->load->view('_footer');?>-->
    </body>
</html>