<header class="site-header">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .nav {
            position: fixed;
            background-color: rgb(255, 255, 255); 
            list-style-type: none;
            text-align: center;
            margin: 0;
            padding: 0;
            height : 50px;
            left: 650px;
            top: 15px;
            overflow: hidden; }
            .nav li {
                float: left;
                font-family: Poppins;
                font-style: normal;
                font-size: 19 px;
                padding: 20px; }
            .nav li a {
                display: block;
                color: rgb(7, 0, 70);
                text-align: center;
                padding: 10px 16px; 
                text-decoration: none; }
            .nav li a:hover {
                background-color: antiquewhite; }
        .container-fluid {
            max-width: 1600px;
            background-color: white; }
    </style>

    <div class="container-fluid" style="background-color: rgb(255, 255, 255)">
        <div class="site-logo" style="background-color: rgb(255, 255, 255); width: 100%;
            padding :0 5rem 0 5rem !important">

            <a href="#"><img src="<?php echo base_url('assets/images/logo_itera.png')?>" 
                style="margin : 10;height: 70px; width: 58px; "></a>
                
        </div>

        <ul class="nav" style="padding :0 5rem 0 5rem !important">
            <li><a href="#">HOME</a></li>
            <li><a href="#">UPLOAD</a></li>
            <li><a href="#">FAQ</a></li>
            <li ><a href="#">SIGN OUT</a></li>
        </ul>
    </div>
</header>