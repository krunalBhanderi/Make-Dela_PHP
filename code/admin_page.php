<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
	<?php
	session_start();
	include("db.php");
	$_SESSION["id"]=1000;
	$_SESSION["name"]="admin";

	$sql="select * from user";
	$result=$connect->query($sql);
	
			
		?>
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1></strong>Admin Page</h1>
                                                   </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3><center> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp <?php echo("Admin"); ?></h3>
                            		
                        		</div>
                        		                            </div>
						
                            
									<div class="form-bottom">
			                    <form role="form" action="index.php" method="post" class="login-form">
			                    
								<button  type="submit" class="btn">Display Ads</button><br>
								</form>
								<br>
								<form role="form" action="index.php" method="post" class="login-form">
			                    
								<button type="submit" class="btn">Manage Ads
								</button><br>
								</form>
								<br>
								<form role="form" action="view_user3.php" method="post" class="login-form">
			                    
								<button type="submit" class="btn">View User
								</button><br>
								</form>
								<br>
								<form role="form" action="view_user4.php" method="post" class="login-form">
			                    
								<button type="submit" class="btn">Manage User
								</button><br>
								</form>
								<br>
								
								<form role="form" action="logout.php" method="post" class="login-form">
			                    
								<button type="submit" class="btn">Logout</button><br>
								
							    </form>
			                    
		                    </div>
								
								
									
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
		
		<?php
		
	
	?>
		
		
			


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>	
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>