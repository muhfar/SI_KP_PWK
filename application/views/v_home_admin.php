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
        <?php $this->load->view('_header_admin');?>

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
                <title-icon>Daftar<br>Mahasiswa</title-icon>
            </div></a>

            <a href="#"><div class="menu" style="left: 403px">
                <icon></icon>
                <title-icon>Penyebaran KP<br>Mahasiswa</title-icon>
            </div></a>

            <a href="#"><div class="menu" style="left: 697px">
                <icon></icon>
                <title-icon>Berkas<br>Laporan KP</title-icon>
            </div></a>

            <a href="#"><div class="menu" style="left: 1000px">
                <icon></icon>
                <title-icon>Jadwal<br>Seminar KP</title-icon>
            </div></a>
        </section>
    </body>
</html>