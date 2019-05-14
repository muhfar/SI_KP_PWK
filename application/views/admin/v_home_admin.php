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

        <!--LOAD HEADER-->
        <?php $this->load->view('header_admin');?>

        <!--BANNER-->
        <section class="banner" 
            style="background-image: url(<?php echo base_url('assets/images/plano_img.png')?>); background-size: 800px ;">
            <h1>Sistem Informasi<br>Kerja Praktik</h1>
            <h2>Program Studi<br>Perencanaan Wilayah dan Kota</h2>
        </section>
        
        <!--MENU-->
        <section class="container-fluid">
            <a href="admin/c_admin_daftarmhs"><div class="menu">
                <icon><img src="<?php echo base_url('assets/images/ic_daftar.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Daftar<br>Mahasiswa</title-icon>
            </div></a>

            <a href="#penyebaran"><div class="menu" style="left: 403px">
                <icon><img src="<?php echo base_url('assets/images/ic_penyebaran.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Penyebaran KP<br>Mahasiswa</title-icon>
            </div></a>

            <a href="admin/c_admin_berkas"><div class="menu" style="left: 697px">
                <icon><img src="<?php echo base_url('assets/images/ic_perusahaan.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Laporan<br>Kerja Praktik</title-icon>
            </div></a>

            <a href="admin/c_admin_jadwal"><div class="menu" style="left: 1000px">
                <icon><img src="<?php echo base_url('assets/images/ic_jadwal.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Jadwal<br>Seminar KP</title-icon>
            </div></a>
        </section>

        <!--POST-->
        <section class="container-fluid" style="margin-bottom:50px">
            <!--PENYEBARAN MAHASISWA KP-->    
            <div class="post" style="top:1250px;">
                <title-post id="penyebaran" style="left:72px;">Penyebaran Kerja<br>Praktik Mahasiswa</title-post>
                <pict-post style="left:580px; ">
                        <p>Grafik Persebaran Kerja Praktik Mahasiswa Perencanaan Wilayah dan Kota</p>
                        <div id="visualization" style=height:90%;width:100%></div>
                </pict-post>    
            </div>
        </section>

        <!--FOOTER-->
        
        <!--FOOTER-->
        <?php $result = $query;
            //get number of rows returned
            $num_results = $result->num_rows();
            if( $num_results > 0){ ?>
                <script type="text/javascript">
                    function drawVisualization() {
                        // Create and populate the data table.
                        var data = google.visualization.arrayToDataTable([
                            ['PL', 'Ratings'],
                            <?php
                                foreach ($result->result_array() as $row) {
                                    extract($row);
                                    echo "['{$nama}', {$jumlah_mhs}],";
                                } 
                            ?>
                        ]);
                        // Create and draw the visualization.
                        new google.visualization.PieChart(document.getElementById('visualization')).
                        draw(data);
                    }
        
                    google.setOnLoadCallback(drawVisualization);
                </script>
            <?php
            }else{
                echo "Tidak ada data di database. '.$num_results'";
            } ?>  
        <script type="text/javascript">
            //load package
            google.load('visualization', '1', {packages: ['corechart']});
        </script>       
    </body>
</html>
