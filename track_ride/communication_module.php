<?php
	
	/* This module is executed by the android app
		
		functionality: write the latitude, longtute and info to the 
		location_info table
		
		*/
		
		
	//if values are sent		&& isset( $_GET[ 'number' ] )
	if( isset( $_GET[ 'latitude' ] ) && isset( $_GET[ 'longtude' ] ) && isset( $_GET[ 'route' ] )  ){
		
		//initializing variables by sent values
		$lat = isset( $_GET[ 'latitude' ] );
		$lon = isset( $_GET[ 'longtude' ] );
		$route = isset( $_GET[ 'route' ] );
		//$num = isset( $_GET[ 'number' ] );
		
		
		//creating connection to database
		$connection = mysqli_connect( 'localhost', 'root', '', 'sep' );
		
		//if connection is not successfull
		if( mysqli_connect_errno() ){
			die();
		}
		else{
			$query = "insert into location_info values(" . $route . ", " . $lat . ", " . $lon . ")";
			
			$result = mysqli_query( $connection, $query );
			
		}
		
		
		
		
		
	}
		
	
	
	

?>


