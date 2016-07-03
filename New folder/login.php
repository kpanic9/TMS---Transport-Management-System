<?php

	$username = $_POST[ 'user_name' ];
	$password = $_POST[ 'passwd' ];
	
	$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
	
	if( mysqli_connect_errno() ){
		die( "Database err!. " );
	}
	else{
		$query = "select passwd from user where user_name='" . $username . "'";
		$result = mysqli_query( $connection, $query );
		$row = mysqli_fetch_row( $result );
		
		
		if( $password == NULL ){
			echo " <script> document.location = 'http://localhost:8080/sep/admin.html' </script> ";
		}
		else if( $row[ 0 ] == NULL ){
			echo " <script> document.location = 'http://localhost:8080/sep/admin.html' </script> ";
		}		
		else if( $password == $row[ 0 ] ){
			echo " <script> document.location = 'http://localhost:8080/sep/admin/control_panel.php?flag=1' </script> ";
            
           
           
            
            
            
            
            
            
            
            
            
            
		}
		else{
			echo " <script> document.location = 'http://localhost:8080/sep/admin.html' </script> ";
			
		}
		
		
	}
    
    
?>





<html>

	<head>
    	<title>Administrative Login</title>
    </head>
    
    
    
    
    <body>
    
    	<div>
        
        	<form method="post" action="#">
            
            	Username:<input type="text" name="user_name"> <br/><br/>
                Password:<input type="password" name="passwd" > <br/><br/><br/>
                <input type="submit" value="Login"/>
                
            
            
            </form>
            
        
        
        </div>
    
    
    </body>
    
    
    
</html>




