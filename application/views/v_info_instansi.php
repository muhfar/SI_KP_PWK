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

        <title-page>Info Instansi</title-page>

        <!--LIST INSTANSI-->
        <section class="container-fluid">
            <?php $left = 2;
                $top = 30;
                $count = 1;

                foreach ($query->result() as $row){
                   echo '<a href="'.$row->link_perusahaan.'"><div class="instansi" 
                        style="left: '.$left.'%;top: '.$top.'%   ">
                        <icon-instansi><img src="'.$row->image.'" style="height:163px; width:226px; "></icon-instansi>
                        <title-instansi >'.$row->nama_perusahaan.'</title-instansi>
                        <title-instansi style=top:100%>'.$row->keahlian.'</title-instansi>  
                    </div><a>';
                    $left += 25;
                    if($count == 4){
                        $top += 40;
                        $left = 2;
                    }
                    $count++;
                    
                }
            ?>
        </section>

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
        <!--<?php $this->load->view('_footer');?>-->
    </body>
</html>