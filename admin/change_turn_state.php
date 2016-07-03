<?php

	
	session_start();	
	if( !isset( $_SESSION[ 'id' ] ) ){
		header( "Location: log_to_use.html" );
	}
	
	
	if( isset($_POST[ 'turn_id' ]) && $_POST[ 'state' ] ){
			

		$turn_id = $_POST[ 'turn_id' ];
		$state = $_POST[ 'state' ];
		
	
	
		$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
		
		if( mysqli_connect_errno() ){
			die( "Database err!. " );
		}
		else{
			$query = "update bus_route set state='" . $state . "' where turn_id='" . $turn_id . "'";
			$result = mysqli_query( $connection, $query );
			//$row = mysqli_fetch_row( $result );
			
			
				if( $result == true ){
					echo "Turn Updated successfully! <br/>";
					
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
    <title>Remove this Turn</title>
    
    
    <style type="text/css">
	
		.btn{
			 cursor:pointer;
			 border-width:2px;
			 border-style:solid;
			 border-color:#ada5a5;
			 -webkit-border-radius: 6px;
			 -moz-border-radius: 6px;
			 border-radius: 6px;
			 text-align:center;
			 width:112px;
			 height:40px;
			 padding-top:undefinedpx;
			 padding-bottom:undefinedpx;
			 font-size:15px;
			 font-family:arial;
			 color:#ffffff;
			 background:#d9cfcf;
			 display:inline-block;
			 }.
			 
			 PreviewButton:hover{
			 background:#e85b4c;
		 }
	
	</style>
    
    
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
    
    
    
    <div>
    	<form method="post" action="change_turn_state.php"> 
		
			<h1 style="padding:15px; color:#414141; background-color:#f9f9f9; border: 1px solid #c6c6c6; text-align:left; letter-spacing:0pt; word-spacing:1pt; font-size:40px; font-family:Verdana; line-height:25px; font-style:italic;">Change Turn State</h1>
			<br/>
			<br/>
		
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turn Id&nbsp;&nbsp;&nbsp;  : </pre>
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
						$str = "                     <option value='" . $row[0] . "'>" . $row[0] . "</option>";
						echo $str;
					}
						
					
					echo "</select>";
					
					
				}
            ?>
            <br/>
            <br/>
            
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New State:
            <select name="state">
            	<option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
            <br/>
            <br/>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn" type="submit" value="Set State" />
            
        </form>


</body>
</html>