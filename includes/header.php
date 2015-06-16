<!DOCTYPE html>
<html>
<head>
    <title>Programming School</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="css/kube.css" />
     <link rel="stylesheet" href="css/main.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script src="js/kube.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="./src/js/jquery.requestAnimationFrame.js"></script>
    <script type="text/javascript" src="./src/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="./src/js/ilightbox.packed.js"></script>

    <link rel="stylesheet" type="text/css" href="./src/css/ilightbox.css"/>

</head>
<body>
    <div class="main">
    	<header>
	    	<div class="units-container">
	    		<div class="units-row">
	    			<div class="unit-30 logo">
	    				<a href="index.php"><img src="images/logo.png"></a>
	    			</div>

                    <div class="unit-30">
                         <div class="nav-container">
                            <nav class="navbar">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="courses.php">Courses</a></li>
                                    <li><a href="about.php">About</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

	    			<div class="unit-40 nav-container">
	    				<nav class="navbar navbar-right">
						   <ul>
                                <li class="focus"><a href="register.php">Start Learning</a></li>
                                

                                <?php
                                    if(isset($_SESSION['user'])) {
                                       echo '<li class="focus"><a href="logout.php?logout">Sign Out</a></li>';
                                    }

                                    else {
                                        echo ' <li class="focus"><a href="login.php">Login</a> </li>';
                                    }
                                ?>
                                
                            </ul>
						</nav>
	    			</div>
	    		</div>
	    	</div>
	    </header>
