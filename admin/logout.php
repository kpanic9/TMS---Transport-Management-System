
<?php 

	session_start();
	session_destroy();
	
	echo '
	
			<!doctype html>
			<html>
			
				<head>
				
				<meta charset="utf-8">
				<title>Untitled Document</title>
				
				</head>
				
				<body>
					<h2 style="padding:15px; color:#414141; background-color:#f9f9f9; border: 1px solid #c6c6c6; text-align:left; letter-spacing:0pt; word-spacing:1pt; font-size:40px; font-family:Verdana; line-height:25px; font-style:italic;">You have Logged out</h2>
				</body>
				
				
			</html>
	
	
			';


