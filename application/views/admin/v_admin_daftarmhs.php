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

        <title-page>Daftar Mahasiswa Kerja Praktik</title-page>

        <!--JADWAL SEMINAR-->
        <!--ini masih belum selesaiiii-->
        <table class="paleBlueRows" style="margin-top:200px; margin-left:50px">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Instansi</th>
                    <th>Alamat Instansi</th>
                    <th>Tanggal KP Mulai</th>
                    <th>Tanggal KP Selesai</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($query->result() as $row) {
                        echo "<tr>";
                            echo "<td>";
                                echo $row->nama_depan; echo ' ';
                                echo $row->nama_belakang;
                            echo "</td>";
                            echo "<td>";
                                echo $row->NIM;
                            echo "</td>";
                            echo "<td>";
                                echo $row->instansi_nama;
                            echo "</td>";
                            echo "<td>";
                                echo $row->instansi_alamat;
                            echo "</td>";
                            echo "<td>";
                                echo $row->instansi_mulai;
                            echo "</td>";
                            echo "<td>";
                                echo $row->instansi_selesai;
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <!--FOOTER-->
        <?php $this->load->view('_footer');?>

    </body>
</html>