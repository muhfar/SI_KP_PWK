<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header_admin');?>

        <title-page>Persebaran Kerja Praktik Mahasiswa</title-page>
        <script type="text/javascript">
            //load package
            google.load('visualization', '1', {packages: ['corechart']});
        </script>
        <!--Grafik persebaran KP-->
        <div class="grafik-admin">
            <br>
            <p>Grafik Persebaran Kerja Praktik Mahasiswa Perencanaan Wilayah dan Kota</p>
            <div id="visualization" style=height:100%;width:100%></div>           
        </div>


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
                        var options = {
                            pieHole: 0.4,
                        };
                        new google.visualization.PieChart(document.getElementById('visualization')).
                        draw(data, options);
                    }
        
                    google.setOnLoadCallback(drawVisualization);
                </script>
            <?php
            }else{
                echo "Tidak ada data di database. '.$num_results'";
            } ?>  
        <!--FOOTER-->
        <script>
            function showDiv() {
                document.getElementById('SaveBtn').style.display = "block";
            }
            
        </script>
        
    </body>
</html>