
<?php


	if( isset( $_GET[ 'id' ] )	){
		
		
		
		
	echo '

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
        
        
        
        
        
        
        
        
        
        
	</head>
    
    

	<body>
    
    
    
    
    	<div id="cssmenu">
                <ul>
                   <li><a href="../index.html">Home</a></li>
                </ul>
    	</div>
        
        
        
        
        <h1 style="padding:15px; color:#414141; background-color:#f9f9f9; border: 1px solid #c6c6c6; text-align:left; letter-spacing:0pt; word-spacing:1pt; font-size:30px; font-family:Verdana; line-height:25px; font-style:italic;">Reservation Info</h1>
        
        
        
        <br/>
        <br/>
        
        <div id="info" >
        	
			<p>Your reservation has recorded.<br/>
			    Your Reservation Id is ' .$_GET[ 'id' ] . ' </p>
				
				<br/>
				<br/>
				
			<p>Please pay the fees to the Reservations counter in Bus Station and get your ticket from there</p>
            
        
        </div>
       
        
    
    
    
	</body>
    
    
</html>


	';
	
	
	}
	
	
	
	
?>
