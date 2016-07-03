<?php
	
	
	session_start();	
	if( !isset( $_SESSION[ 'id' ] ) ){
		header( "Location: log_to_use.html" );
	}
	
	
	
	if( isset($_POST[ 'route_no' ]) && isset( $_POST[ 'start' ]) && isset( $_POST[ 'destination' ]) ){
		
		$route_no = $_POST[ 'route_no' ];
		$start = $_POST[ 'start' ];
		$end = $_POST[ 'destination' ];
	
	
		$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
	
		if( mysqli_connect_errno() ){
			die( "Database err!. " );
		}
		else{
			$query = "select * from route where route_no='" . $route_no . "'";
			$result = mysqli_query( $connection, $query );
			$row = mysqli_fetch_row( $result );
			
			if( $row == NULL ){
				$query = "insert into route values('" . $route_no . "', '" . $start . "', '" . $end . "')";
				$result = mysqli_query( $connection, $query );
				
				if( $result == true ){
					echo "Route Added!";
				}
				else{
					echo "Err. Try again!";
				}
				
			}
			else{
				echo "This route is already in the system!";
				echo "<a href='control_panel.html'> Control Panel </a>";
			}
			
			
			
			
			
		}
	
	
	}
	
		
	
	
	
	
?>





<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Add Bus</title>
        
        
        <link rel="stylesheet" type="text/css" href="../css/basic.css">
        <link rel="stylesheet" href="../html/menubar_styles.css">
   	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="../html/menubar_script.js"></script>  
        
        
        
        
        
    </head>

<body background="../images/fog-roads_00365977.jpg">

	<div id='cssmenu'>
                <ul>
                   <li><a href='control_panel.php'>Admin Panel</a></li>
                </ul>
    </div>
	<h2 class="pgeTitle">Add a Route</h2>

<div id="add" align="center" >
    	
        <br/><br/>
        <form class="form" method="post" action="add_route.php"  >
        	Route Number :<input class="txt" type="text" name="route_no" />  <br/><br/>
            Start&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		 :<input class="txt" type="text" name="start" /> <br/><br/>
            Destination&nbsp&nbsp	&nbsp&nbsp :<input class="txt" type="text" name="destination" /> <br/><br/>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="add" class="btn" />
        </form>
    </div>   
    

</body>
</html>











