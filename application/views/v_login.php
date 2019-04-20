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

		<div id="id01" style="margin-top:-100px">
			<form class="modalcontent-animate" action="<?php echo base_url('c_login/aksi_login'); ?>" method="POST">
				<div class= "modal">
					<title-page style="left:0; top:140px">Sign In</title-page>
					
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>

					<label for="uname" style="top:50px">
						<b type="normal"> Username </b>
					</label>
					<input type="text" style="padding-left:20px" placeholder="Enter Your Email or Username" name="uname" required>
					
					<br>
					<br>
					
					<label for="pass"> 
						<b type="normal"> Password </b>
					</label>
					<input type="password" style="padding-left:20px" placeholder="Enter Password" name="pass" required>
					
					<br>
					<br>
					<br>
					
					<button type="submit">
						<b type="submit">Sign In</b>
					</button>
				</div>
		</div>
	</body>

</html>>