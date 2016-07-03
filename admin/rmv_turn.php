<?php

	session_start();	
	if( !isset( $_SESSION[ 'id' ] ) ){
		header( "Location: log_to_use.html" );
	}
	
	
	if( isset( $_POST[ 'turn_id' ] ) ){
		
		$turn_id = $_POST[ 'turn_id' ];
	
	
		$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
		
		if( mysqli_connect_errno() ){
			die( "Database err!. " );
		}
		else{
			$query = "delete from bus_route where turn_id='" . $turn_id . "'";
			$result = mysqli_query( $connection, $query );
			//$row = mysqli_fetch_row( $result );
			
			
				if( $result == true ){
					echo "Bus Removed! <br/>";
					echo "<a href='control_panel.html'> Control Panel </a>";
				}
				else{
					echo "Err. Try again! <br/>";
					echo "<a href='control_panel.html'> Control Panel </a>";
				}
				
			
			
		}
		
	}
		
?>







<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Remove this Turn</title>
        
        
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
    
    	<h2 class="pgeTitle" >Remove a Turn</h2>
        
        <div align="center">
            <form method="post" action="rmv_turn.php"> 
            
                
                <br/>
                <br/>
            
                Bus No: 
                <?php
                $connection = mysqli_connect( "localhost", 'root', '', 'sep' );
        
                    if( mysqli_connect_errno() ){
                        die( "Database err!. " );
                    }
                    else{
                        $query = "select turn_id from bus_route";
                        $result = mysqli_query( $connection, $query );
                    
                        echo "<select name='turn_id'	>";
                            
                            
                        while( $row = mysqli_fetch_row( $result ) ){
                            $str = "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                            echo $str;
                        }
                            
                        
                        echo "</select>";
                        
                        
                    }
                ?>
                <br/>
                <br/>
                <br/>
                <input type="submit" value="Remove Turn" class="btn"/>
                
            </form>
    
    
    </body>
</html>







