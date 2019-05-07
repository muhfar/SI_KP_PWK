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
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header_admin');?>

        <!--BANNER-->
        <section class="banner" 
            style="background-image: url(<?php echo base_url('assets/images/plano_img.png')?>); background-size: 700px;">
            <h1>Sistem Informasi<br>Kerja Praktik</h1>
            <h2>Program Studi<br>Perencanaan Wilayah dan Kota</h2>
        </section>
        
        <!--MENU-->
        <section class="container-fluid">
            <a href="#"><div class="menu">
                <icon><img src="<?php echo base_url('assets/images/ic_daftar.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Daftar<br>Mahasiswa</title-icon>
            </div></a>

            <a href="#"><div class="menu" style="left: 403px">
                <icon><img src="<?php echo base_url('assets/images/ic_penyebaran.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Penyebaran KP<br>Mahasiswa</title-icon>
            </div></a>

            <a href="#"><div class="menu" style="left: 697px">
                <icon><img src="<?php echo base_url('assets/images/ic_daftar.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Laporan<br>Kerja Praktik</title-icon>
            </div></a>

            <a href="#"><div class="menu" style="left: 1000px">
                <icon><img src="<?php echo base_url('assets/images/ic_jadwal.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Jadwal<br>Seminar KP</title-icon>
            </div></a>
        </section>
    </body>
</html>