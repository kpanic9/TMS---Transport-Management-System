<?php

	session_start();
	
	
	if( isset( $_SESSION[ 'id' ] ) ){
		echo '
				
<html>

<head>
    	<title>Admin Panel TMS</title>
        
		
		<link rel="stylesheet" href="../html/menubar_styles.css">
   	    	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        	<script src="../html/menubar_script.js"></script>
			
			
	<style type="text/css">
    /* Derived from http://www.devinrolsen.com/pure-css-horizontal-menu/ */
    
    #pagebody { position: inherit !important; width: 100%; } /* DO NOT EDIT */
    #pagebody-inner { position: inherit !important; width: 100%; } /* DO NOT EDIT */
    
    #alpha, #beta, #gamma, #delta {
        display: inline; /* DO NOT EDIT */
        position: inherit !important; /* DO NOT EDIT */
        float: left; /* DO NOT EDIT */
        min-height: 1px; /* DO NOT EDIT */
    }
    
    #centernav {
      width: 900px; /* if you want your nav centered, set this to the width of your container, if you don"t want it centered, change this number to 100% */
      margin-left: auto ;
      margin-right: auto ;
    }
    
    #dropnav 
    {height:25px; background:#999;} /* Changes the height and bg color of the main menu */
    
    #dropnav ul
    {margin:0px; padding:0px;}
    
    #dropnav ul li
    {display:inline; float:left; list-style:none; margin-left:15px; position:relative; height:25px; width: 150px;} /* only edit the last 2 items - sets the width of the main menu */
    
    #dropnav li a
    {color:#FFF; text-decoration:none;} /* Changes the link color of items on the main menu */
    
    #dropnav li a:hover
    {
        color: #900;
        text-decoration: none;
        font-style: oblique;
        font-weight: bold;
    }/* Changes the hover color of items on the main menu */
    
    #dropnav li ul
    {margin:0px; padding:0px; display:none; position:absolute; left:0px; z-index: 99; top:25px; background-color:#CCC;} /* Only edit the last 2 items - set the top margin and background color of the submenus */
    
    #dropnav li:hover ul
    {display:block; width:150px;} /* sets the width of the submenus */
    
    #dropnav li li
    {list-style:none; display:list-item;} /* DO NOT EDIT */
    
    #dropnav li li a
    {color:#000; text-decoration:none;} /* Changes the link color of items in the submenu */
    
    #dropnav li li a:hover
    {color:#900; text-decoration:none;} /* Changes the hover color of items in the submenu */
    
    li#main  {padding-top: 2px;} /* Sets the padding of items in the main menu */
    
    </style>

</head>

<body background="../images/fog-roads_00365977.jpg">
	
	<div id="cssmenu">
                <ul>
                   <li><a href="control_panel.php">Admin Panel</a></li>
				   <li><a href="logout.php">Logout</a></li>
                </ul>
    	</div>
		
	<h2 style="padding:15px; color:#414141; background-color:#f9f9f9; border: 1px solid #c6c6c6; text-align:left; letter-spacing:0pt; word-spacing:1pt; font-size:40px; font-family:Verdana; line-height:25px; font-style:italic;">Admin Panel TMS</h2>

    <div id="centernav">
    <div id="dropnav">
        <ul>

            

            <li id="main">
            <a href="#">Busses</a>
                <ul id="subnav">
                  <li><a href="add_bus.php">Add a Bus</a></li>
                  <li><a href="rmv_bus.php">Remove a Bus</a></li>
              </ul>            
          </li>

            <li id="main">
            <a href="#">Routes</a>
                <ul id="subnav">
                      <li><a href="add_route.php">Add a route</a></li>
                      <li><a href="rmv_route.php">Remove a Route</a></li>
                </ul>            
            </li>
			
			

            <li id="main">
            <a href="#">Turns</a>

                <ul id="subnav">
                      <li><a href="add_turn.php">Add a Turn</a></li>
                      <li><a href="rmv_turn.php">Remove a Turn</a></li>
                      <li><a href="change_turn_state.php">Change Turn State</a></li>
                </ul>            
            </li>
			
			<li id="main">
            <a href="#">Reservations</a>
                <ul id="subnav">
                      <li><a href="get_reservations.php">Vier Reservations</a></li>
                </ul>            
            </li>

        </ul>    
    </div>
</div>


</body>

</html>





			';
	}
	else{
		header( "Location: log_to_use.html" );
	}



?>



