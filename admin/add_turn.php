<?php
	
	
	session_start();	
	if( !isset( $_SESSION[ 'id' ] ) ){
		header( "Location: log_to_use.html" );
	}
	
	
	
	if( isset($_POST[ 'turn_id' ]) && isset($_POST[ 'bus_no' ]) && isset($_POST[ 'route_no' ]) && isset($_POST[ 'start' ]) && isset($_POST[ 'end' ]) && isset( $_POST[ 'state' ] ) ){
	
	
		$turn_id = $_POST[ 'turn_id' ];
		$bus_no = $_POST[ 'bus_no' ];
		$route_no = $_POST[ 'route_no' ];
		$start_time = $_POST[ 'start' ];
		$end_time = $_POST[ 'end' ];
		$state = $_POST[ 'state' ];
		
		
		
		$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
		
		if( mysqli_connect_errno() ){
			die( "Database err!. " );
		}
		else{
			$query = "select * from bus_route where turn_id='" . $turn_id . "'";
			$result = mysqli_query( $connection, $query );
			$row = mysqli_fetch_row( $result );
			
			if( $row == NULL ){
				$query = "insert into bus_route values('" . $turn_id . "', '" . $bus_no. "', '" . $route_no . "', '" . $start_time . "', '" . $end_time . "', '" . $state . "')";
				$result = mysqli_query( $connection, $query );
				
				if( $result == true ){
					echo "Turn Added!";
				}
				else{
					echo "Err. Try again!";
				}
				
			}
			else{
				echo "This Turn is already in the system!";
			}
			
			
			
			
			
		}
	
	
		
	}
	
	
	
	
?>



<!doctype html>
<html>

    <head>
    <meta charset="utf-8">
	<title>Add Turn</title>

	
    <link rel="stylesheet" type="text/css" href="../css/basic.css" />
        
    	<link rel="stylesheet" href="../html/menubar_styles.css">
   	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="../html/menubar_script.js"></script>
	

	
    







</head>

<body background="../images/fog-roads_00365977.jpg">

	
    <div id='cssmenu'>
                <ul>
                   <li><a href='../index.html'>Home</a></li>
                </ul>
    	</div>


	<div id="add" >
    
    
    	<h2 class="pgeTitle" >Add a Turn</h2>
        
        <form method="post" action="add_turn.php"  >
        	Turn Id	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 : <input type="text" name="turn_id" class="txt" />  <br/><br/>
            
            Bus Number &nbsp;&nbsp;  :
            
            <?php
            $connection = mysqli_connect( "localhost", 'root', '', 'sep' );
	
				if( mysqli_connect_errno() ){
					die( "Database err!. " );
				}
				else{
					$query = "select bus_no from bus";
					$result = mysqli_query( $connection, $query );
				
					echo "<select name='bus_no' class='selct'	>";
						
						
					while( $row = mysqli_fetch_row( $result ) ){
						$str = "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
						echo $str;
					}
						
					
					echo "</select>";
					
					
				}
            ?>
            <br/><br/>
            
        	Route Number :
            <?php
            $connection = mysqli_connect( "localhost", 'root', '', 'sep' );
	
				if( mysqli_connect_errno() ){
					die( "Database err!. " );
				}
				else{
					$query = "select route_no from route";
					$result = mysqli_query( $connection, $query );
				
					echo "<select name='route_no' class='selct'	>";
						
						
					while( $row = mysqli_fetch_row( $result ) ){
						$str = "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
						echo $str;
					}
						
					
					echo "</select>";
					
					
				}
            ?>
            <br/><br/>
            
            Start Time	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input class="txt" type="time" name="start" /> <br/><br/>
            End Time	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input class="txt" type="time" name="end" /> <br/><br/>
            
            State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp&nbsp;&nbsp;&nbsp;&nbsp; : 
            <select name="state" >
            	<option selected value="1" > Available </option>
                <option value="0" > Not-Available</option>
            </select>
            <br/><br/><br/>
            
            
            <input class="btn" type="submit" value="add" />
        </form>
    </div>   
    

</body>
</html>



