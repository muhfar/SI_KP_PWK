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

        <title-page>Jadwal Seminar Kerja Praktik</title-page>

        <!--Search Bar-->
        <div class="searchbar" style = "top:250px; left:50%" >
            <div class="search">
                <input type="text" placeholder="Search...">
            </div>
            
        </div>
        <!--Tombol Edit-->
        <div id = "EditBtn" class= "editbtn"  style="top:275px; left:70%;">
            <button type="submit" style="color:white; width:20%; heigth:10% ; right:50px" onclick="showDiv()" id="submit-all"> Edit </button>
        </div>
        <div id = "SaveBtn" class= "editbtn"  style="top:275px; left:70%; display:none;">
            <button type="submit" style="color:white; width:20%; heigth:10% ; right:50px " onClick="window.location.reload()" id="submit-all"> Save </button>
        </div>
        
        <!--JADWAL SEMINAR-->
        <table class="paleBlueRows" style="margin-top:300px; margin-left:50px">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Waktu</th>
                    <th>Ruangan</th>
                    <th>Penguji</th>
                </tr>
            </thead> 
            <tbody>
            <tbody>
                <?php
                    foreach ($query->result() as $row) {
                        echo "<tr>";
                            echo "<td>";
                                echo $row->nama_pengguna;
                            echo "</td>";
                            echo "<td>";
                                echo $row->NIM;
                            echo "</td>";
                            echo "<td>";
                                echo $row->tanggal;
                            echo "</td>";
                            echo "<td>";
                                echo $row->ruang;
                            echo "</td>";
                            echo "<td>";
                                echo $row->keahlian;
                            echo "</td>";
                        echo "</tr>";
                    }

                ?>
            </tbody>
        </table>

        <!--FOOTER-->
        <?php $this->load->view('_footer');?>
        <script>
            function showDiv() {
                document.getElementById('SaveBtn').style.display = "block";
            }
        </script>           
    </body>
</html>