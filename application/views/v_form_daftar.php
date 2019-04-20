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
        <label for="fullname">
            <b type="normal">Nama : </b>
		</label>
        <input type="text" style="padding-left:50px" placeholder="Enter Your Full Name" name="fullname" required>

        <br><br>

        <label for="nim">
            <b type="normal">NIM : </b>
		</label>
        <input type="number" placeholder="   Enter Your NIM" name="nim" required>

        <br><br>

        <label for="alamat">
            <b type="normal">Alamat : </b>
		</label>
        <input type="text" placeholder="   Enter Your Address" name="alamat" required>

        <br><br>

        <label for="email">
            <b type="normal">E-mail : </b>
		</label>
        <input type="email" placeholder="   Enter Your Email" name="email" required>

        <br><br>

        <label for="notlpn">
            <b type="normal">No. Telepon : </b>
		</label>
        <input type="text" placeholder="   Enter Your Phone Number" name="noetlpn" required>

        <br><br>

        <label for="instansi-nama">
            <b type="normal">Nama Instansi : </b>
		</label>
        <input type="text" placeholder=" " name="instansi-nama" required>

        <br><br>

        <label for="instansi-alamat">
            <b type="normal">Alamat Instansi : </b>
		</label>
        <input type="text" placeholder=" " name="instansi-alamat" required>

        <br><br>

        <label for="instansi-notlpn">
            <b type="normal">No. Telepon Instansi : </b>
		</label>
        <input type="text" placeholder="   Enter Your Email or Username" name="instansi-notlpn" required>

        <br><br>

        <label for="tanggal-kp-mulai">
            <b type="normal">Tanggal Kerja Praktik Mulai: </b>
		</label>
        <input type="date" name="tanggal-kp-mulai" required>

        <br><br>

        <label for="tanggal-kp-akhir">
            <b type="normal">Tanggal Kerja Praktik Akhir: </b>
		</label>
        <input type="date" name="tanggal-kp-Akhir" required>

        <br>
        <br>
        <br>

        <button type="submit">
			<b type="signin">Daftar</b>
		</button>

    </body>
</html>