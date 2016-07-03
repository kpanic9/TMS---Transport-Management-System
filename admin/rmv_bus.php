<?php


	if( isset( $_POST[ 'bus_no' ] ) ){

		$bus_no = $_POST[ 'bus_no' ];
	
	
		//create connection to database
		$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
		
		if( mysqli_connect_errno() ){
			die( "Database err!. " );
		}
		else{
			//executing query
			$query = "delete from bus where bus_no='" . $bus_no . "'";
			$result = mysqli_query( $connection, $query );
			//$row = mysqli_fetch_row( $result );
			
			
				if( $result == true ){
					echo "Bus Removed! <br/>";
				}
				else{
					echo "Err. Try again! <br/>";
				}
						
		}
		
	}
		
?>
		 
         
         
         
         
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Remove a Bus</title>
        
        <link rel="stylesheet" href="../css/basic.css" type="text/css" />
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
        
        
        <div align="center"
        <h1 class="pgeTitle" >Remove a Bus</h1>
        </div>
        
        
        <div align="center">
        
            <form method="post" action="rmv_bus.php"> 
            
                
                <br/>
                <br/>
            
                Bus No: 
                <?php
				//creating connection to db
                $connection = mysqli_connect( "localhost", 'root', '', 'sep' );
        
                    if( mysqli_connect_errno() ){
                        die( "Database err!. " );
                    }
                    else{
                        $query = "select bus_no from bus";
                        $result = mysqli_query( $connection, $query );
                    
                        echo "<select name='bus_no'	>";
                            
                            
                        while( $row = mysqli_fetch_row( $result ) ){
                            $str = "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                            echo $str;
                        }
                            
                        
                        echo "</select>";
                        
                        
                    }
                ?>
                <br/>
                <br/><br/>
                <input type="submit" value="Remove Bus" class="btn" />
                
            </form>
    
    
    </body>
    
</html>