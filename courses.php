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
                                <a href='https://www.youtube.com/embed/bfqBUDk99Tc?autoplay=1&autohide=1&border=0&egm=0&showinfo=0'
                                id="video1"
                                data-type="iframe"
                                data-options="width: 638, height: 360">
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
                                <a href='https://www.youtube.com/embed/bfqBUDk99Tc?autoplay=1&autohide=1&border=0&egm=0&showinfo=0'
                                    id="video2"
                                    data-type="iframe"
                                    data-options="width: 638, height: 360">

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
                                <a href='https://www.youtube.com/embed/bfqBUDk99Tc?autoplay=1&autohide=1&border=0&egm=0&showinfo=0'
                                    id="video3"
                                    data-type="iframe"
                                    data-options="width: 638, height: 360">
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
                                <a href='https://www.youtube.com/embed/bfqBUDk99Tc?autoplay=1&autohide=1&border=0&egm=0&showinfo=0'
                                    id="video4"
                                    data-type="iframe"
                                    data-options="width: 638, height: 360">
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
                                <a href='https://www.youtube.com/embed/bfqBUDk99Tc?autoplay=1&autohide=1&border=0&egm=0&showinfo=0'
                                    id="video5"
                                    data-type="iframe"
                                    data-options="width: 638, height: 360">
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
                                <a href='https://www.youtube.com/embed/bfqBUDk99Tc?autoplay=1&autohide=1&border=0&egm=0&showinfo=0'
                                    id="video6"
                                    data-type="iframe"
                                    data-options="width: 638, height: 360">
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
                                <a href='https://www.youtube.com/embed/bfqBUDk99Tc?autoplay=1&autohide=1&border=0&egm=0&showinfo=0'
                                    id="video7"
                                    data-type="iframe"
                                    data-options="width: 638, height: 360">
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
                                <a href='https://www.youtube.com/embed/bfqBUDk99Tc?autoplay=1&autohide=1&border=0&egm=0&showinfo=0'
                                    id="video8"
                                    data-type="iframe"
                                    data-options="width: 638, height: 360">
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
                                <a href='https://www.youtube.com/embed/bfqBUDk99Tc?autoplay=1&autohide=1&border=0&egm=0&showinfo=0'
                                    id="video9"
                                    data-type="iframe"
                                    data-options="width: 638, height: 360">
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
