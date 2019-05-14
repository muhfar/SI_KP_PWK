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
        <?php $this->load->view('header');?>

        <!--BANNER-->
        <section class="banner" 
            style="background-image: url(<?php echo base_url('assets/images/plano_img.png')?>); background-size: 800px ;">
            <h1>Sistem Informasi<br>Kerja Praktik</h1>
            <h2>Program Studi<br>Perencanaan Wilayah dan Kota</h2>
        </section>
        
        <!--MENU-->
        <section class="container-fluid">
            <a href="#alur"><div class="menu">
                <icon><img src="<?php echo base_url('assets/images/ic_daftar.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Alur<br>Pendaftaran KP</title-icon>
            </div></a>

            <a href="#Penyebaran"><div class="menu" style="left: 403px">
                <icon><img src="<?php echo base_url('assets/images/ic_penyebaran.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Penyebaran KP<br>Mahasiswa</title-icon>
            </div></a>

            <a href="<?php echo base_url('c_info_instansi');?>"><div class="menu" style="left: 697px">
                <icon><img src="<?php echo base_url('assets/images/ic_perusahaan.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Info<br>Instansi</title-icon>
            </div></a>

            <a href="<?php echo base_url('c_jadwal_seminar');?>"><div class="menu" style="left: 1000px">
                <icon><img src="<?php echo base_url('assets/images/ic_jadwal.png')?>" style="width:92px; height:92px;"></icon>
                <title-icon>Jadwal<br>Seminar KP</title-icon>
            </div></a>
        </section>

        <!--POST-->
        <section class="container-fluid" style="margin-bottom:50px">
            <!--ALUR KP-->
            <div class="post">
                <pict-post id="alur" style="left:72px"></pict-post>    
                <title-post >Alur Pendaftaran<br>Kerja Praktik</title-post>
                <div class="download" action="<?php echo base_url('c_home/aksi_download'); ?>">
                    <button type="submit" style="margin-left:-30%;width:200%" onClick="javascript:(function(){window.open('assets/berkas/01.docx');})();javascript:(function(){window.open('assets/berkas/02.docx');})();">
                            <!-- <b style="color: white" >Download File Pendaftaran</b> -->
                            <!-- <a href="views/v_download_file.php">hayoo</a> -->
                            <b style="color: white" >Download File Pendaftaran</b>
                    </button>
                </div>
            </div>

            

            <!--PENYEBARAN MAHASISWA KP-->    
            <div class="post" style="top:1250px;">
                <title-post style="left:72px; top:1250px" id="Penyebaran">Penyebaran Kerja<br>Praktik Mahasiswa</title-post>
                <pict-post style="left:580px; top:1250px;">
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
        <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
            window.__lc = window.__lc || {};
            window.__lc.license = 10870272;
            (function() {
            var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
            })();
            </script>
            <noscript>
            <a href="https://www.livechatinc.com/chat-with/10870272/" rel="nofollow">Chat with us</a>,
            powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
            </noscript>
        <!-- End of LiveChat code -->
    </body>
</html>