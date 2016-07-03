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
	<title>Add Turn</title>

	
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
			
			<form action="Reservations.php" method="get">
            
            Date &nbsp;&nbsp;  :';
            
            
            $connection = mysqli_connect( "localhost", "root", '', "sep" );
	
				if( mysqli_connect_errno() ){
					die( "Database err!. " );
				}
				else{
					$query = "select day from reservations"; // where day=" . date( "Y-m-d", time() );
					$result = mysqli_query( $connection, $query );
				
					echo "<select name='day' class='selct' onchange='getData( this.value);' >";
						
						
					while( $row = mysqli_fetch_row( $result ) ){
						
						$str = "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
						echo $str;
						
					}
						
					
					echo "</select>";
					
					
				}
				
				
				
				echo '<br/>
						<br/>
						<input type="submit" class="btn" value="Show" />';
				
				
				echo '
				</form>
            	';
            
    echo '
            
    </div>  
	
	
	
	<div name="info">
	
	</div> 
    

</body>
</html>

	';
	
	
	
	
	
	
?>
