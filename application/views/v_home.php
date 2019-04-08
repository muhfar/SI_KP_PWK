<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('_header');?>

        <!--BANNER-->
        <section class="banner" 
            style="background-image: url(<?php echo base_url('assets/images/plano_img.png')?>); background-size: 700px;">
            <h1>Sistem Informasi<br>Kerja Praktik</h1>
            <h2>Program Studi<br>Perencanaan Wilayah dan Kota</h2>
        </section>
        
        <!--MENU-->
        <section class="container-fluid">
            <a href="#"><div class="menu">
                <icon></icon>
                <title-icon>Alur<br>Pendaftaran KP</title-icon>
            </div><a>

            <a href="#"><div class="menu" style="left: 403px">
                <icon></icon>
                <title-icon>Penyebaran KP<br>Mahasiswa</title-icon>
            </div><a>

            <a href="#"><div class="menu" style="left: 697px">
                <icon></icon>
                <title-icon>Info<br>Instansi</title-icon>
            </div><a>

            <a href="#"><div class="menu" style="left: 1000px">
                <icon></icon>
                <title-icon>Jadwal<br>Seminar KP</title-icon>
            </div><a>
        </section>

        <!--POST-->
        <section class="container-fluid">
            <!--ALUR KP-->
            <div class="post">
                <pict-post style="left:72px"></pict-post>    
                <title-post>Alur Pendaftaran<br>Kerja Praktik</title-post>
            </div>

            <!--PENYEBARAN MAHASISWA KP-->    
            <div class="post" style="top:1250px; padding-bottom:50px">
                <title-post style="left:72px; top:1250px">Penyebaran Kerja<br>Praktik Mahasiswa</title-post>
                <pict-post style="left:580px; top:1250px"></pict-post>    
            </div>
        </section>

        <!--FOOTER-->
        <?php $this->load->view('_footer');?>
    </body>
</html>