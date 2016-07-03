<?php
	
	
	
	
	
	$username = $_POST[ "user_name" ];
	$passwd = $_POST[ "passwd" ];
	
	
	
	
	$connection = mysqli_connect( "localhost", "root", "", "sep" );
	
	if( mysqli_connect_errno() ){
		die( "Connection failed" );
	}
	else{
		$query = "select passwd from user where user_name='" . $username . "'";
		$result = mysqli_query( $connection, $query );
		
		$data = mysqli_fetch_row( $result );
		
		if ( $passwd == $data[ 0 ] ){
			//curl_exec( "index.html" );
			print "Login successfull";
			//header( "Location : localhost:8080/index.html" );
			echo "<script>window.location = 'http://127.0.0.1:8080/SEP/index.html' </script>";
		}
		else{
			die("Login err");
		}
		
		//var_dump( $data );
		
		mysqli_close( $connection );
	}



?>