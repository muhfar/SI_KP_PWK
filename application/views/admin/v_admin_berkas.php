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

        <!-- SESSION -->
        <?php $level = $this->session->userdata('level');

        if($level == ""){
            echo "<script>alert('Silahkan login terlebih dahulu!');
            window.location.href='".base_url()."c_login';</script>";
        }elseif($level == "mhs"){
            echo "<script>alert('Akun tidak dapat mengakses!');
                window.location.href='".base_url()."';</script>";
        }else{
            // echo "<script>alert('Silahkan mengunggah')</script>";
        }

        ?>

        <!-- <title-page>Berkas KP</title-page> -->
        <div class="title-page-admin text-center">
            <h1>Berkas Laporan Kerja Praktik</h1>
        </div>

        <!--Search Bar-->
        <div class="searchbar text-center">
            <form action="<?php echo site_url('admin/c_admin_berkas/cari');?>" method="post">
                <div class="form-group">
                    <input class="search" type="text" placeholder="Search..." name="cari">
                    <button class="btn btn-menu" type="submit" style="margin-top:3.5%">Cari</button>
                </div>
            </form>
        </div>

        <table class="paleBlueRows" style="margin-top:5%; margin-left:50px">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Laporan</th>
                    <th>Surat  </th>
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
                                echo $row->id_berkas;
                            echo "</td>";
                            echo "<td>";
                                echo '<a href="/SI_KP_PWK/upload/laporan/'.$row->laporan.'"> '.$row->laporan.'';
                            echo "</td>";
                            echo "<td>";
                                echo '<a href="/SI_KP_PWK/upload/surat/'.$row->surat.'"> '.$row->surat.'';
                            echo "</td>";
                        echo "</tr>";
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER-->
        <?php $this->load->view('_footer');?>

    </body>
</html>