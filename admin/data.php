<?php


		


	$day = $_GET[ 'day' ];
	
	
	$connection = mysqli_connect( "localhost", "root", "", "sep" );
	
	$query = "select * from reservations where day='" . $day . "'";
	$result = mysqli_query( $connection, $query );
	
			
	echo '<table>
			<tr> <th>Reservation Id</th> <th>Name</th><th>Id</th><th>Route</th>
					<th>Time</th><th>Destination</th>								</tr>';
			
			while( $row = mysqli_fetch_row( $result ) ){
			
				echo '<tr> <td>'. $row[0]  . '  </td> <td>'. $row[1]  .'  </td><td>'. $row[2]  .'  </td><td>'. $row[3]  .'  </td><td>'. $row[5]  .'  </td><td>'. $row[6]  .'  </td></tr>';
				
			}
	
	
	echo '</table>';
	
	

?>
