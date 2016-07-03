<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search a Bus</title>
        
        
        
	
        <style type="text/css" >
		
	
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
	
			
		
			#sbmt{
				 cursor:pointer;
				 border-width:0px;
				 border-style:solid;
				 border-color:#000000;
				 -webkit-border-radius: 4px;
				 -moz-border-radius: 4px;
				 border-radius: 4px;
				 text-align:center;
				 width:100px;
				 height:40px;
				 padding-top:undefinedpx;
				 padding-bottom:undefinedpx;
				 font-size:15px;
				 font-family:arial;
				 color:#ffffff;
				 background: -moz-linear-gradient(top, #78b80d 30%, #b9bb9f 100%);
				 background: -webkit-gradient(linear, left top, left bottom, color-stop(30%,#78b80d), color-stop(100%,#b9bb9f));
				 background: -webkit-linear-gradient(top, #78b80d 30%,#b9bb9f 100%);
				 background: -o-linear-gradient(top, #78b80d 30%,#b9bb9f 100%);
				 background: -ms-linear-gradient(top, #78b80d 30%,#b9bb9f 100%);
				 background: linear-gradient(to bottom, #78b80d 30%,#b9bb9f 100%);
				 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#78b80d', endColorstr='#b9bb9f',GradientType=0 );
				 display:inline-block;
			}
				 
				 
				 .PreviewButton:hover{
				 background: -moz-linear-gradient(top, #e85b4c 30%, #000000 100%);
				 background: -webkit-gradient(linear, left top, left bottom, color-stop(30%,#e85b4c), color-stop(100%,#000000));
				 background: -webkit-linear-gradient(top, #e85b4c 30%,#000000 100%);
				 background: -o-linear-gradient(top, #e85b4c 30%,#000000 100%);
				 background: -ms-linear-gradient(top, #e85b4c 30%,#000000 100%);
				 background: linear-gradient(to bottom, #e85b4c 30%,#000000 100%);
				 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e85b4c', endColorstr='#000000',GradientType=0 );
			}
		
			
		
		
		</style>
        <link rel="stylesheet" href="../html/menubar_styles.css">
   	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="../html/menubar_script.js"></script> 
        
        
            
    </head>
    
    
    <body>
    
    	<div id='cssmenu'>
                <ul>
                   <li><a href='../index.html'>Home</a></li>
                </ul>
    	</div>
    
    	
        <div class="container">
        	<div class="header" align="left">
        	<h1 style="padding:15px; color:#414141; background-color:#f9f9f9; border: 1px solid #c6c6c6; text-align:left; letter-spacing:0pt; word-spacing:1pt; font-size:40px; font-family:Verdana; line-height:25px; font-style:italic;">Find a Ride</h1>
            </div>
            
            <br/>
            <br/>
            
            
            <div align="center" >
            
        	<form method="post" action="search.php">
            	From:<select name="start">
                	<?php 

						$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
			
						if( mysqli_connect_errno() ){
							die( "Database err!. " );
						}
						else{
							$query = "select distinct halt from route_halt";
							$result = mysqli_query( $connection, $query );
						
								
							while( $row = mysqli_fetch_row( $result ) ){
								$str = '<option class="opt" value="' . $row[0] . '">' . $row[0] . '</option>';
								echo $str;
							}
						}
					
            
					?>
                </select>
                <br/>
                <br/>
                
               	 To:<select name="end">
                	<?php 

						$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
			
						if( mysqli_connect_errno() ){
							die( "Database err!. " );
						}
						else{
							$query = "select distinct halt from route_halt";
							$result = mysqli_query( $connection, $query );
						
								
							while( $row = mysqli_fetch_row( $result ) ){
								$str = '<option value="' . $row[0] . '">' . $row[0] . '</option>';
								echo $str;
							}
						}
            
					?>
                </select>
                <br/>
                <br/>
                <br/>
                <input class="btn" type="submit"  value="Search" />
                
            </form>
        </div>
        
       
    
    </body>
    
    
    
    
    
    
</html>