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
    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header');?>

        <title-page>Jadwal Seminar Kerja Praktik</title-page>

        <!--Search Bar-->
        
        <div class="searchbar" style = "top:250px">
            <div class="search">
                <input type="text" placeholder="Search...">
            </div>
        </div>

        <!--JADWAL SEMINAR-->
        <!--ini masih belum selesaiiii-->
        <table class="paleBlueRows" style="margin-top:300px; margin-left:50px">
            <thead>
                <tr>
                    <th>Waktu</th>
                    <th>Ruangan</th>
                    <th>Keahlian</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($query->result() as $row) {
                        echo "<tr>";
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

        <!--FOOTER-->
        <?php $this->load->view('_footer');?>

    </body>
</html>