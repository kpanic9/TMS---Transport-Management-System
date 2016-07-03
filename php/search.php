<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search Results</title>
    </head>
    
    <body>
    
    	<?php
			$start = $_POST[ "start" ];
			$end = $_POST[ "end" ];
		?>
    
    
    	<h2 style="padding:15px; color:#414141; background-color:#f9f9f9; border: 1px solid #c6c6c6; text-align:left; letter-spacing:0pt; word-spacing:1pt; font-size:40px; font-family:Verdana; line-height:25px; font-style:italic;" align="center">Routes for Goto from <?php echo $start ?> to <?php echo $end ?></h2>
    	
        <div align="center">
        <?php
			
			
			
			$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
			
						if( mysqli_connect_errno() ){
							die( "Database err!. " );
						}
						else{
							$query = "select route_no from route_halt where halt in (select halt from route_halt where route_no in (select route_no from route_halt where halt='" . $start . "')) and halt='" . $end . "'";
							$result = mysqli_query( $connection, $query );
						
								
							echo '<table>';
							while( $row = mysqli_fetch_row( $result ) ){
								$connection2 = mysqli_connect( "localhost", 'root', '', 'sep' );
								$query2 = "select * from bus_route where state='1' and route no=" . $row[0] . "";
								$result2 = mysqli_query( $connection2, $query2 );
								echo $row[0];
								echo "<br/>";
								echo '<tr>';
								if( $result2 != NULL ){
									while( $row2 = mysqli_fetch_row( $result2 ) ){
										echo "<td>" . $row2[0] . "</td><td>" . $row2[1] . "</td>";
									}
								}
								echo '</tr>';
								echo "<br/><br/>";
							}
							echo '</table>';
						}
			
		
		?>
        </div>
        
    </body>
</html>


