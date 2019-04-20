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
        <label for="fullname" style="margin-left:10%">
            <b type="normal">Nama </b>
        </label>
        <input type="text" style="padding-left:20px; padding-right:20px; margin-left:195px; width:500px" name="fullname" required>

        <br><br>

        <label for="nim" style="margin-left:10%">
            <b type="normal">NIM </b>
		</label>
        <input type="text" style="padding-left:20px; padding-right:20px; margin-left:220px; width:500px" name="nim" required>

        <br><br>

        <label for="alamat" style="margin-left:10%">
            <b type="normal">Alamat </b>
		</label>
        <input type="text" style="padding-left:20px; padding-right:20px; margin-left:185px; width:500px" name="alamat" required>

        <br><br>

        <label for="email" style="margin-left:10%">
            <b type="normal">E-mail </b>
		</label>
        <input type="email" style="padding-left:20px; padding-right:20px; margin-left:195px; width:500px" name="email" required>

        <br><br>

        <label for="notlpn" style="margin-left:10%">
            <b type="normal">No. Telepon </b>
		</label>
        <input type="text" style="padding-left:20px; padding-right:20px; margin-left:145px; width:500px" name="noetlpn" required>

        <br><br>

        <label for="instansi-nama" style="margin-left:10%">
            <b type="normal">Nama Instansi </b>
		</label>
        <input type="text" style="padding-left:20px; padding-right:20px; margin-left:120px; width:500px" name="instansi-nama" required>

        <br><br>

        <label for="instansi-alamat" style="margin-left:10%">
            <b type="normal">Alamat Instansi </b>
		</label>
        <input type="text" style="padding-left:20px; padding-right:20px; margin-left:110px; width:500px" name="instansi-alamat" required>

        <br><br>

        <label for="instansi-notlpn" style="margin-left:10%">
            <b type="normal">No. Telepon Instansi </b>
		</label>
        <input type="text" style="padding-left:20px; padding-right:20px; margin-left:70px; width:500px" name="instansi-notlpn" required>

        <br><br>

        <label for="tanggal-kp-mulai" style="margin-left:10%">
            <b type="normal">Tanggal Kerja Praktik Mulai </b>
        </label>
        <input type="date" style="padding-left:20px; padding-right:20px; margin-left:0px; width:155px" name="tanggal-kp-mulai" required>

        <br><br>

        <label for="tanggal-kp-akhir" style="margin-left:10%">
            <b type="normal">Tanggal Kerja Praktik Akhir </b>
		</label>
        <input type="date" style="padding-left:20px; padding-right:20px; margin-left:3px; width:155px" name="tanggal-kp-Akhir" required>

        <br>
        <br>
        <br>

        <button type="submit" sytle="margin-left:500px">
			<b type="submit">Daftar</b>
		</button>

    </body>
</html>