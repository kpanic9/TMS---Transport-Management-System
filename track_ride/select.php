<?php

	
	
	if( 	isset( $_POST[ 'Route' ]  )		){
		
		
		$con = mysqli_connect( "localhost", "root", "", "sep" );
		
		$qry = "select * from tracking_info where route_no=" . $_POST[ 'Route' ];
		
		$res = mysqli_query( $con, $qry );
		
		
		$center = mysqli_fetch_row( $res );
		
		
		echo '
		
		
		<script>

			function init(){
				var mapDiv = document.getElementById( "map" );
				var mapOptions = { center: new google.maps.LatLng( ' . $center[1] . ' , ' . $center[2] . '),
						   zoom: 15,
						   mapTypeId: "roadmap"
				};
				var map = new google.maps.Map( mapDiv, mapOptions );

				var marker = new google.maps.Marker(
						{
							position: new google.maps.LatLng(  ' . $center[1] . ' , ' . $center[2] . '),
							map: map,
							title: "Details"
						}
					);
				
				';
				
				$i = 0;
				
				while( $rr = mysqli_fetch_row( $res ) ){
					
					$i++;
					echo 'var marker' . $i . ' = new google.maps.Marker(
						{
							position: new google.maps.LatLng( ' . $rr[1] . ', ' . $rr[2] . '),
							map: map,
							title: "Details"
						}
					);
					
					';
					
					
					
				}
				
				
				
				
				echo '
			

				var infoWindow = new google.maps.InfoWindow({
							content: "Im here!"
						});

				google.maps.event.addListener( marker, "click", function(){
										infoWindow.open( map, marker );
									       }
				);


			}

			window.onload = init;		

		</script>
		
		
		';
		
		
	}
	






?>










<html>

	<head>
    	<title>Select Rout to track Rides</title>
        
        
        <link rel="stylesheet" type="text/css" href="../css/basic.css">
        <link rel="stylesheet" href="../html/menubar_styles.css">
   	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="../html/menubar_script.js"></script> 
        
        
        
        
        
        
        
        
        
        
        
        		
		<style>
		#map{
			height:580px;
			width:100%;
		}
		</style>


		<script type="text/javascript"  src="http://maps.google.com/maps/api/js">
		</script>

		
        
        
        
        
        
        
        
        
        
        
        
    </head>
    
    
    <body>
    
    	<div id='cssmenu'>
                <ul>
                   <li><a href='control_panel.php'>Admin Panel</a></li>
                </ul>
    	</div>    
        
        
        
    	<h1 class="pgeTitle" >Select the Route</h1>
    	
        
        
        
        
        <div align="center">	
            
            <form method="post" action="select.php" >
            	Route:
                <?php 

					$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
		
					if( mysqli_connect_errno() ){
						die( "Database err!. " );
					}
					else{
						$query = "select route_no from route";
						$result = mysqli_query( $connection, $query );
					
						echo '<select name="Route"	>';
							
							
						while( $row = mysqli_fetch_row( $result ) ){
							$str = '<option value="' . $row[0] . '">' . $row[0] . '</option>';
							echo $str;
						}
							
						
						echo '</select>';
						
						
					}
            
				?>
                <br/>
                <br/>
                <br/>
                <input type="submit" value="Track" />
            </form>
    
    	</div>
        
        
        
        
        <!google map>
        <div id="map">


		</div>
        
        
        
        
        
        
        
        
        
        
        
        
        
       
        
        
        
	
    	
        
    
    </body>



</html>
  
    	