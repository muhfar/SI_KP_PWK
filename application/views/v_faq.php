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

        <title-page>Frequently Asked Question</title-page>

        <!--FAQ-->
        <section class="container-fluid">
            <div class="faq">
                <ques>Apakah dosen pembimbing KP atau kordinator hanya ada 1?</ques>
                <ans>Untuk saat ini dosen kordinator KP hanya Pak Asirin S.T, M.T. Namun kedepannya mahasiswa dapat memilih coordinator KP sesuai dengan keahlian dosen yang ada</ans>
            </div>

            <div class="faq" style="top:65%">
                <ques>Berapa banyak maksimal dalam 1 kelompok Kerja Praktik?</ques>
                <ans>Untuk 1 kelompok maksimal 3 orang perkelompok</ans>
            </div>

            <div class="faq" style="top:85%">
                <ques>Apakah diperbolehkan dalam 1 perusahaan ada 2 kelompok atau lebih?</ques>
                <ans>Tidak dianjurkan, namun jika mendapatkan persetujuan dari perusahaan dan dibidang keahlian yang beda maka dipersilaahkan</ans>
            </div>

            <div class="faq" style="top:110%">
                <ques>Apakah diperbolehkan untuk melaksanakan KP perseorangan atau bukan dalam kelompok?</ques>
                <ans>Jika memang mahasiswa tersebut mampu dan sanggup maka diperbolehkan, namun dari pihak program studi sangatlah tidak menganjurkan untuk melaksanakan KP perseorangan</ans>
            </div>

            <div class="faq" style="left:55%">
                <ques>Apakah diperbolehkan untuk melaukan KP di pemerintahan?</ques>
                <ans>Kalau memang instansi tersebut ada keterkaitan dengan ilmu yang telah dipelajari ataupun bidang keahlian yang berhubungan dengan program studi maka diperbolehkan (missal : PU, BAPPEDA, Bapenas, dsb)</ans>
            </div>

            <div class="faq" style="top:65%; left:55%">
                <ques>Apakah ada ketentuan waktu untuk melaksanakan KP?</ques>
                <ans>Waktu untuk KP dianjurkan dilaksanakan pada liburan semester genap ke ganjil. Dan waktu pelaksanaanya minimal 1 bulan penuh (30 hari) dan maksimal 3 bulan (90 hari)</ans>
            </div>

            <div class="faq" style="top:95%; left:55%">
                <ques>Apakah dosen mempunyai referensi untuk mendaftar KP?</ques>
                <ans>Untuk referensi tempat KP bisa dilihat di Sistem Informasi KP yang ada dibagian Info Instansi</ans>
            </div>

            <div class="faq" style="top:120%; left:55%">
                <ques>Apakah ada format laporan KP yang telah dilaksanakan?</ques>
                <ans>Untuk format laporan bisa dilihat di ruang prodi sebagai contoh.</ans>
            </div>
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