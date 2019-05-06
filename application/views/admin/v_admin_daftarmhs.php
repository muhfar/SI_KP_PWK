<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/all.min.css'); ?>">

    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('_header_admin');?>

        <div class="title-page-admin text-center">
            <h1>Daftar Mahasiswa Kerja Praktik</h1>
        </div>
        

        <!--Search Bar-->
        <div class="searchbar text-center">
            <form action="<?php echo site_url('admin/c_admin_daftarmhs/cari');?>" method="post">
                <div class="form-group">
                    <input class="search" type="text" placeholder="Search..." name="cari">
                    <button class="btn btn-menu" type="submit">Cari</button>
                </div>
            </form>
        </div>

        <!--JADWAL SEMINAR-->
        <table class="paleBlueRows" style="margin-top:5%; margin-left:50px">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Instansi</th>
                    <th>Alamat Instansi</th>
                    <th>Tanggal KP Mulai</th>
                    <th>Tanggal KP Selesai</th>
                    <th>Status</th>
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
                            echo "<td>";
                                echo $row->status;
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