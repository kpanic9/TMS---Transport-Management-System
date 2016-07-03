<?php
	
	
	session_start();	
	if( !isset( $_SESSION[ 'id' ] ) ){
		header( "Location: log_to_use.html" );
	}
	
	
	echo '



<!doctype html>
<html>

    <head>
    <meta charset="utf-8">
	<title>View Reservations</title>

	
    <link rel="stylesheet" type="text/css" href="../css/basic.css" />
        
    	<link rel="stylesheet" href="../html/menubar_styles.css">
   	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="../html/menubar_script.js"></script>
	

	
    
		






</head>

<body background="../images/fog-roads_00365977.jpg">

	
    <div id="cssmenu">
                <ul>
                   <li><a href="../index.html">Home</a></li>
                </ul>
    	</div>


	<div id="add" align="center" >
    
    
    	<h2 class="pgeTitle" >View Reservations</h2>
        
        	
            
            <br/>
            <br/>
		';
            
            $day = $_GET[ 'day' ];
            $connection = mysqli_connect( "localhost", "root", '', "sep" );
	
				if( mysqli_connect_errno() ){
					die( "Database err!. " );
				}
				else{
					$query = "select * from reservations where day='" . $day . "'";
					$result = mysqli_query( $connection, $query );
				
			
					echo '<table border="2" cellpadding="5" cellspacing="5">
								<tr> <th>Reservation Id</th> <th>Name</th><th>Id</th><th>Route</th>
										<th>Time</th><th>Destination</th>								</tr>';
			
					while( $row = mysqli_fetch_row( $result ) ){
			
							echo '<tr> <td style="color:white">' . $row[0]  . '  </td> <td>'. $row[1]  .'  </td><td>'. $row[2]  .'  </td><td>'. $row[3]  .'  </td><td>'. $row[5]  .'  </td><td>'. $row[6]  .'  </td></tr>';
				
					}
	
	
					echo '</table>';
	
	
					
				}
				
				
            
    echo '
            
    </div>  
	
	
    

</body>
</html>

	';
	
	
	
	
	
	
?>
