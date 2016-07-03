<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Time Table</title>
        
        <link rel="shortcut icon" href="images/logo.png"> 
        
        <style type="text/css">
		
			.CSSTable {
				margin:0px;padding:0px;
				width:100%;
				box-shadow: 10px 10px 5px #888888;
				border:1px solid #000000;
				
				-moz-border-radius-bottomleft:0px;
				-webkit-border-bottom-left-radius:0px;
				border-bottom-left-radius:0px;
				
				-moz-border-radius-bottomright:0px;
				-webkit-border-bottom-right-radius:0px;
				border-bottom-right-radius:0px;
				
				-moz-border-radius-topright:0px;
				-webkit-border-top-right-radius:0px;
				border-top-right-radius:0px;
				
				-moz-border-radius-topleft:0px;
				-webkit-border-top-left-radius:0px;
				border-top-left-radius:0px;
			}
			
			.CSSTable table{
				border-collapse: collapse;
					border-spacing: 0;
				width:100%;
				height:100%;
				margin:0px;padding:0px;
			}
			
			.CSSTable tr:last-child td:last-child {
				-moz-border-radius-bottomright:0px;
				-webkit-border-bottom-right-radius:0px;
				border-bottom-right-radius:0px;
			}
			
			.CSSTable table tr:first-child td:first-child {
				-moz-border-radius-topleft:0px;
				-webkit-border-top-left-radius:0px;
				border-top-left-radius:0px;
			}
			
			.CSSTable table tr:first-child td:last-child {
				-moz-border-radius-topright:0px;
				-webkit-border-top-right-radius:0px;
				border-top-right-radius:0px;
			}
			
			.CSSTable tr:last-child td:first-child{
				-moz-border-radius-bottomleft:0px;
				-webkit-border-bottom-left-radius:0px;
				border-bottom-left-radius:0px;
			}
			
			.CSSTable tr:hover td{
				
			}
			
			.CSSTable tr:nth-child(odd){ background-color:#ffaa56; }
			.CSSTable tr:nth-child(even)    { background-color:#ffffff; }
			
			.CSSTable td{
				vertical-align:middle;
				
				
				border:1px solid #000000;
				border-width:0px 1px 1px 0px;
				text-align:left;
				padding:7px;
				font-size:16px;
				font-family:Comic Sans MS;
				font-weight:normal;
				color:#000000;
			}
			
			.CSSTable tr:last-child td{
				border-width:0px 1px 0px 0px;
			}
			
			.CSSTable tr td:last-child{
				border-width:0px 0px 1px 0px;
			}
			
			.CSSTable tr:last-child td:last-child{
				border-width:0px 0px 0px 0px;
			}
			
			.CSSTable tr:first-child td{
					background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
				background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);
			
				background-color:#ff7f00;
				border:0px solid #000000;
				text-align:center;
				border-width:0px 0px 1px 1px;
				font-size:30px;
				font-family:Arial;
				font-weight:bold;
				color:#ffffff;
			}
			
			.CSSTable tr:first-child:hover td{
				background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
				background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);
			
				background-color:#ff7f00;
			}
			
			.CSSTable tr:first-child td:first-child{
				border-width:0px 0px 1px 0px;
			}
			.CSSTable tr:first-child td:last-child{
				border-width:0px 0px 1px 1px;
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
                   <li><a href='../html/book_a_seat.php'>Reserve my Seat</a></li>
                </ul>
    		</div>
        
        	

        	<?php
				echo '<script type="text/javascript">
					tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
					tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
					
					function GetClock(){
						var d=new Date();
						var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
						if(nyear<1000) nyear+=1900;
						var d=new Date();
						var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
						if(nmin<=9) nmin="0"+nmin
						if(nsec<=9) nsec="0"+nsec;
					
						document.getElementById("clockbox").innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
					}
					
					window.onload=function(){
							GetClock();
							setInterval(GetClock,1000);
						}
					
					
					</script>	';
					
			?>
        
        
        
        
        
        <div align="center" id="clockbox" style="margin: 1em 0 0.5em 0;
                                                            color: #343434;
                                                            font-size: 32px;
                                                            line-height: 40px;
                                                            font-weight: normal;
                                                            text-transform: uppercase;
                                                            font-family: 'Orienta', sans-serif;
                                                            letter-spacing: 1px;
                                                            font-style: italic;border:thin">    		
    	</div>
        	
        <br/>
        <br/>
        
        <div align="center" class="CSSTable">
        
        	<?php
				$connection = mysqli_connect( "localhost", 'root', '', 'sep' );
	
				if( mysqli_connect_errno() ){
					die( "Database err!. " );
				}
				else{
					$query = "select turn_id from bus_route";
					$result = mysqli_query( $connection, $query );
					
					echo '<table border="1" cellpadding="5" cellspacing="5">';
					echo "<td> Route No. </td><td> Bus No. </td><td> Start Time </td><td> End Time </td>";
					while( $row = mysqli_fetch_row( $result ) ){
					
							$query2 = "select * from bus_route where turn_id='" . $row[0] . "'";
							$result2 = mysqli_query( $connection, $query2 );
							$row2 = mysqli_fetch_row( $result2 );
							
							echo "<tr>";
						
							echo "<td>" . $row2[2]. " </td><td> " . $row2[1] . " </td><td> " . $row2[3] . "  </td><td> " . $row2[4] . "  </td>";
							echo "</tr>";
						
						
					}
					echo "</table>";
					
				}
			
			?>
        
        
        </div>
        
        
        
    </body>
    
</html>