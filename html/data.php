<?php



	$route = $_GET[ 'route' ];
	
	
	$connection = mysqli_connect( "localhost", "root", "", "sep" );
	
	$query = "select start_time from bus_route where route_no=" . $route ;
	$query2 = "select halt from route_halt where route_no=" . $route;
	
	
	$result = mysqli_query( $connection, $query );
	$result2 = mysqli_query( $connection, $query2 );
	
	
	
	
	
	echo '
		Turn        :<select name="turn" >
		';
		
	while( $row1 = mysqli_fetch_row( $result ) ){
		echo '
			<option value="' . $row1[0] . '"> ' . $row1[0] . '</option>';	
			
		echo $row1[0];
	}
	
	echo'	
		</select>
		';
	
	
	
	
	echo '
		<br/>
		<br/>
		Destination :<select name="halt" >
		';
		
	while( $row2 = mysqli_fetch_row( $result2 ) ){
		echo '<option value="' . $row2[0] . '"> ' . $row2[0] . '</option>';	
		echo $row2[0];
	}
	
	echo'	
		</select>
		';

	


?>

