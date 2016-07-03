



<?php

/* php code for making the seat reservation	*/


	//if form values are set
	if( isset( $_POST[ 'passenger_name' ] ) && isset( $_POST[ 'passenger_id' ] ) && isset( $_POST[ 'route' ] ) && isset( $_POST[ 'turn' ] ) && isset( $_POST[ 'halt' ] ) ){
		
		$name = $_POST[ 'passenger_name' ];
		$id = $_POST[ 'passenger_id' ];
		$route = $_POST[ 'route' ];
		$turn = $_POST[ 'turn' ];
		$halt = $_POST[ 'halt' ];
		
		$res_id = "";
		$res_id .= $id;
		$res_id .= $route;
		
		
		$day = date( "Y-m-d", time() );
		
		$query = "insert into reservations values('" . $res_id . "', '" . $name . "', '" . $id . "', " . $route . ", '" . $day . "', '" . $turn . "', '" . $halt . "')";
		
		$connection = mysqli_connect( "localhost", "root", "", "sep" );
		
		$result = mysqli_query( $connection, $query );
		
		if( $result == false ){
			echo '<script type="text/javascript">alert( "unsuccessfull, Try again ' . $res_id . '"  );</script>';	
		}
		else{
			echo '<script type="text/javascript">alert( "Your Reservation Id is"' . $res_id . ' );</script>';	
			header( 'Location: ./seat.php?id=' . $res_id );
		}
		
	}
	
	




?>





<!doctype html>
<html>


	<head>
		<meta charset="utf-8">
		<title>Reserve My Seat</title>
        
        <link rel="stylesheet" href="../css/book_a_seat.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../css/basic.css" />
        
    	<link rel="stylesheet" href="../html/menubar_styles.css">
   	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="../html/menubar_script.js"></script>    
        
        
        
        
        
        <! ajax >
        <script type="text/javascript" >
        
		
			function getData( route ){
				
				var xmlhttp;
					
				xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if( xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
						document.getElementById("data").innerHTML = xmlhttp.responseText;
					}
						
				}
				xmlhttp.open("GET", "data.php?route=" + route, true);
        		xmlhttp.send();
								
			}
        
        </script>
        
        
        
        
	</head>
    
    

	<body>
    
    
    
    
    	<div id='cssmenu'>
                <ul>
                   <li><a href='../index.html'>Home</a></li>
                </ul>
    	</div>
        
        
        
        
        <h1 style="padding:15px; color:#414141; background-color:#f9f9f9; border: 1px solid #c6c6c6; text-align:left; letter-spacing:0pt; word-spacing:1pt; font-size:30px; font-family:Verdana; line-height:25px; font-style:italic;">Reserve my Seat</h1>
        
        
        
        <br/>
        <br/>
        <br/>        
    
    
    	<div align="center">
    	
    		<form action="book_a_seat.php" method="POST">
    			Name	    : <input class="txt" type="text" maxlength="50" name="passenger_name"/>	<br/><br/>
            	ID Number   : <input  class="txt" type="text" maxlength="10" name="passenger_id"/>	<br/><br/>
                Route		: <select name="route" id="route"  onchange="getData( this.value );">
                
				<?php
                    $connection = mysqli_connect( "localhost", 'root', '', 'sep' );
        
                    if( mysqli_connect_errno() ){
                        die( "Database err!. " );
                    }
                    else{
                        $query = "select route_no from route";
                        $result = mysqli_query( $connection, $query );
                        
                        
                        while( $row = mysqli_fetch_row( $result ) ){
                        
                                echo '<option value="' . $row[0] . '">' .$row[0] . '</option>';              
                            
                        }
                        
                    }
                
			 ?>
             
             </select>
             
             <br/>
             <br/>
             
             
             <div id="data" >
             
             </div>
             
             
              <br/>
              <br/>
            	<input type="submit" class="btn" value="Reserve" />
        	</form>
        
    	</div>
    
    
	</body>
    
    
</html>




