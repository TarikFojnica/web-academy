<?php
session_start();
include_once 'includes/dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: login.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<?php include 'includes/header.php';?>


        <div class="courses-page">
            <div class="page-content">
                <div class="units-container">
                <h1>Courses</h1>
                    <div class="units-row">
                        <div class="unit-33">
                            <div class="element">
                                <a href="course.html">
                                    <img src="images/course-1.jpg">

                                    <div class="details">
                                        <h2>HTML & CSS Foundamentals</h2>
                                        <h5>240 min</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="unit-33">
                            <div class="element">
                                <a href="course.html">
                                    <img src="images/course-2.jpg">

                                    <div class="details">
                                        <h2>PHP & MySql</h2>
                                        <h5>420 min</h5>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="unit-33">
                            <div class="element">
                                <a href="course.html">
                                    <img src="images/course-3.jpg">

                                    <div class="details">
                                        <h2>Wordpress Foundamentals</h2>
                                        <h5>240 min</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div> <!-- units-row-->


                    <div class="units-row">
                        <div class="unit-33">
                            <div class="element">
                                <a href="course.html">
                                    <img src="images/course-4.jpg">

                                    <div class="details">
                                        <h2>Javascript foundamentals</h2>
                                        <h5>300 min</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="unit-33">
                            <div class="element">
                                <a href="course.html">
                                    <img src="images/course-5.jpg">

                                    <div class="details">
                                        <h2>jQuery foundamentals</h2>
                                        <h5>250 min</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="unit-33">
                            <div class="element">
                                <a href="course.html">
                                    <img src="images/course-6.jpg">

                                    <div class="details">
                                        <h2>Angular foundamentals</h2>
                                        <h5>400 min</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!--units row-->


                    <div class="units-row">
                        <div class="unit-33">
                            <div class="element">
                                <a href="course.html">
                                    <img src="images/course-4.jpg">

                                    <div class="details">
                                        <h2>Javascript foundamentals</h2>
                                        <h5>300 min</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="unit-33">
                            <div class="element">
                                <a href="course.html">
                                    <img src="images/course-5.jpg">

                                    <div class="details">
                                        <h2>jQuery foundamentals</h2>
                                        <h5>250 min</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="unit-33">
                            <div class="element">
                                <a href="course.html">
                                    <img src="images/course-6.jpg">

                                    <div class="details">
                                        <h2>Angular foundamentals</h2>
                                        <h5>400 min</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!--units row-->
                </div>
            </div>
        </div><!--page content-->
    </div><!--main-->

    <?php include 'includes/footer.php';?>
