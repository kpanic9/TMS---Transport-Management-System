<!doctype html>




<?php

	session_start();
	
	
	if( 	isset( $_POST[ 'user_name' ] )	&& isset( $_POST[ 'passwd' ] )		){

		$username = strip_tags( $_POST[ 'user_name' ] );
    	$password = strip_tags( $_POST[ 'passwd' ] );
    
    
    	$connection = mysqli_connect( 'localhost', 'root', '', 'sep' );
	
		$query = 'select passwd from user where user_name="' . $username . '"';
		//$result = ;
		$row = mysqli_fetch_row( mysqli_query( $connection, $query ) );
	
	
				
	
	
		if( $password == $row[0] ){
			
			//initializing session
			$_SESSION[ 'username' ] = $username;
			$_SESSION[ 'id' ] = $password;
			
			header( "Location: control_panel.php" );
		}
		else{
			echo "Invalid login";
			header( "Location: admin.php" );
		}
	
	}
	
	



?>




<html>
					<head>
					<meta charset="utf-8">
					<title>Administrator Login</title>
						<link href="css/index.css" rel="stylesheet" type="text/css">
						
						<style type="text/css" >
							
						
							.btn{
								 cursor:pointer;
								 border-width:2px;
								 border-style:solid;
								 border-color:#ada5a5;
								 -webkit-border-radius: 6px;
								 -moz-border-radius: 6px;
								 border-radius: 6px;
								 text-align:center;
								 width:112px;
								 height:40px;
								 padding-top:undefinedpx;
								 padding-bottom:undefinedpx;
								 font-size:15px;
								 font-family:arial;
								 color:#ffffff;
								 background:#d9cfcf;
								 display:inline-block;
								 }.
								 
								 PreviewButton:hover{
								 background:#e85b4c;
							 }
							 
							 
							 
							 .txt{
									 border-width:3px;
									 border-style:solid;
									 border-color:#cacaca;
									 -webkit-border-radius: 3px;
									 -moz-border-radius: 3px;
									 border-radius: 3px;
									 font-size:12px;
									 font-family:arial;
									 color:#2d2e2e;
									 padding-left:5px;
									 width:170px;
									 height:29px;
									 background: -moz-linear-gradient(top, #f4f4f4 30%, #ffffff 100%);
									 background: -webkit-gradient(linear, left top, left bottom, color-stop(30%,#f4f4f4), color-stop(100%,#ffffff));
									 background: -webkit-linear-gradient(top, #f4f4f4 30%,#ffffff 100%);
									 background: -o-linear-gradient(top, #f4f4f4 30%,#ffffff 100%);
									 background: -ms-linear-gradient(top, #f4f4f4 30%,#ffffff 100%);
									 background: linear-gradient(to bottom, #f4f4f4 30%,#ffffff 100%);
									 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#f4f4f4", endColorstr="#ffffff",GradientType=0 );
								}
								
								
								.form{
									font-size:12px;
									 font-family:arial;
									 color:#2d2e2e;				
								}
						
								
							
							
							</style>
						
						
					</head>
					
					<body>
					
					<div  align="center" >
						<h2 style="padding:15px; color:#414141; background-color:#f9f9f9; border: 1px solid #c6c6c6; text-align:left; letter-spacing:0pt; word-spacing:1pt; font-size:40px; font-family:Verdana; line-height:25px; font-style:italic;" align="center">Administrator Login TMS</h2>
						<br/>
						<br/>
						<br/>
						<form class="form" method="post" action="admin.php" >
							Username: <input class="txt" type="username" name="user_name" /> <br/><br/>
							Password: <input class="txt" type="password" name="passwd" /> <br/><br/><br/>
							<input class="btn" type="submit" value="Login" />
						</form>
						
						<br/>
						<br/>
						<p color="red"> If you are not an authorized user to access this page leave this page immediately</p>
						
					</div>
					
					
					
					
					  
							
					</body>
					</html>








