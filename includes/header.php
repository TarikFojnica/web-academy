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

</head>
<body>
    <div class="main">
    	<header>
	    	<div class="units-container">
	    		<div class="units-row">
	    			<div class="unit-30 logo">
	    				<a href="index.php"><img src="images/logo.png"></a>
	    			</div>

                    <div class="unit-40">
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

	    			<div class="unit-30 nav-container">
	    				<nav class="navbar navbar-right">
						   <ul>
                               
                                <li class="focus"><a data-tools="dropdown" data-target="#login-menu">Login</a>
                                    <div id="login-menu">
                                        <div class="login-menu-element">
                                            <form method="post" action="user-login.php" class="forms">

                                                <label>
                                                    Email <span class="req"></span>
                                                    <input type="email" name="email" class="width-100"  />
                                                </label>

                                                <label>
                                                    Name <span class="req"></span>
                                                    <input type="text" name="name" class="width-100"  />
                                                </label>

                                                 <input type="submit" class="btn btn-blue" value="Login" />
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="focus"><a href="signup.php">Start Learning</a></li>
                                
                            </ul>
						</nav>
	    			</div>
	    		</div>
	    	</div>
	    </header>
