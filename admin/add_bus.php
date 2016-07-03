<?php
	
	session_start();	
	if( !isset( $_SESSION[ 'id' ] ) ){
		header( "Location: log_to_use.html" );
	}
	
	
	if(		isset( $_POST[ 'bus_no' ] ) &&	isset( $_POST[ 'seats' ] )		){
	
		$bus = $_POST[ 'bus_no' ];
		$seats = $_POST[ 'seats' ];
		
		//creating connection to db
		$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
		
		if( mysqli_connect_errno() ){		//if there are connection error
			die( "Database err!. " );
		}
		else{
			//executing query
			$query = "select * from bus where bus_no='" . $bus . "'";
			$result = mysqli_query( $connection, $query );
			$row = mysqli_fetch_row( $result );
			
			
			if( $row == NULL ){
				$query = "insert into bus values('" . $bus . "', '" . $seats . "')";
				$result = mysqli_query( $connection, $query );
				
				if( $result == true ){
					echo "Bus Added!";
				}
				else{
					echo "Err. Try again!";
				}
				
			}
			else{
				echo "This bus is already in the system!";
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
        
        <link type="text/css" rel="stylesheet" href="../css/basic.css">
		<link rel="stylesheet" href="../html/menubar_styles.css">
   	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="../html/menubar_script.js"></script> 
           
           
           
           
        
    
    </head>
    
    <body background="../images/fog-roads_00365977.jpg" >
    
		<div id='cssmenu'>
                <ul>
                   <li><a href='control_panel.php'>Admin Panel</a></li>
                </ul>
    	</div>
        
        
    
    
    <div id="add" >
            <h2 style="padding:15px; color:#414141; background-color:#f9f9f9; border: 1px solid #c6c6c6; text-align:left; letter-spacing:0pt; word-spacing:1pt; font-size:40px; font-family:Verdana; line-height:25px; font-style:italic;">Add a Bus</h2>
            <br/>
            <br/>
            <form class="form" method="post" action="add_bus.php"  >
                Bus Number :<input class="txt" type="text" name="bus_no" />  <br/><br/>
                No of Seats&nbsp&nbsp;&nbsp;&nbsp;:<input  class="txt" type="text" name="seats" /> <br/><br/>
                <input type="submit" value="Add" class="btn"/>
            </form>
        </div>   
        
    
    </body>
</html>

