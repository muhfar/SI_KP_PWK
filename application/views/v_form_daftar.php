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
        
    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header');?>


        <title-page>Form Pendaftaran Kerja Praktik</title-page>
        
        <!--FORM PENDAFTARAN-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>    
        <br>
        <br>
        <form action="c_form_daftar/insert" style = "border : 0" method="POST">
            <label for="instansi-nama" style="margin-left:135px">
                <b type="normal">Nama Instansi </b>
            </label>
            <input type="text" style="padding-left:20px; padding-right:20px; margin-left:120px; width:500px" name="nama" id ="nama" required>

            <br><br>

            <label for="instansi-alamat" style="margin-left:135px">
                <b type="normal">Alamat Instansi </b>
            </label>
            <input type="text" style="padding-left:20px; padding-right:20px; margin-left:110px; width:500px" name="instansi-alamat" id ="instansi-alamat" required>
            <br>
            <br>
            <label for="tanggal-kp-akhir" style="margin-left:135px">
                <b type="normal">Provinsi</b>
            </label>
            <select  style="margin-left:135px" name="provinsi" id="provinsi" onchange="tampilkan()">
                    <option value="" disabled selected>--Pilih--</option>
                    <option value="aceh">Aceh</option>
                    <option value="Sumut">Sumatera Utara</option>
                    <option value="sumbar">Sumatera Barat</option>
                    <option value="Riau">Riau</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Sumsel">Sumatera Selatan</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Lampung">Lampung</option>
                    <option value="BaBel">Kep. Bangka Belitung</option>
                    <option value="kepRiau">Kepulauan Riau</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Jabar">Jawa Barat</option>
                    <option value="Banten">Banten</option>
                    <option value="Jateng">Jawa Tengah</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Jatim">Jawa Timur</option>
                    <option value="Kalbar">Kalimantan Barat</option>
                    <option value="Kalteng">Kalimantan Tengah</option>
                    <option value="Kalsel">Kalimantan Selatan</option>
                    <option value="Kaltim">Kalimantan Timur</option>
                    <option value="Kaltra">Kalimantan Utara</option>
                    <option value="Bali">Bali</option>
                    <option value="NTT">Nusa Tenggara Timur</option>
                    <option value="NTB">Nusa Tenggara Barat</option>
                    <option value="Sulut">Sulawesi Utara</option>
                    <option value="Sulteng">Sulawesi Tengah</option>
                    <option value="Sulsel">Sulawesi Selatan</option>
                    <option value="Sultengg">Sulawesi Tenggara</option>
                    <option value="Sulbar">Sulawesi Barat</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Papua">Papua</option>
                    <option value="Papua Barat">Papua Barat</option>
            </select>
            <br><br>

            <label for="instansi-notlpn" style="margin-left:135px">
                <b type="normal">No. Telepon Instansi </b>
            </label>
            <input type="text" style="padding-left:20px; padding-right:20px; margin-left:70px; width:500px" name="instansi-notlpn" id = "instansi-notlpn" required>

            <br><br>

            <label for="tanggal-kp-mulai" style="margin-left:135px">
                <b type="normal">Tanggal Mulai </b>
            </label>
            <input type="date" style="padding-left:20px; padding-right:20px; margin-left:0px; width:200px" name="tanggal-kp-mulai" id = "tanggal-kp-mulai"required>

            <br><br>

            <label for="tanggal-kp-akhir" style="margin-left:135px">
                <b type="normal" >Tanggal Selesai </b>
            </label>
            <input type="date" style="padding-right:20px; margin-left:100px; width:200px" name="tanggal-kp-selesai" id = "tanggal-kp-selesai" required>
            
            <br><br>
            <br>
            <button type="submit" sytle="margin-left:500px">
                <b type="submit" id="submit">Daftar</b>
            </button>
        
        </form>
        
        <script>
        
        </script>
    </body>
</html>