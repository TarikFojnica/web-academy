<?php
session_start();
include_once 'includes/dbconnect.php';
?>

<?php include 'includes/header.php';?>

    	<div class="about-page">
            <div class="page-content">
                <div class="units-container">
                    <div class="units-row">
                        <h1>Welcome <?php echo $userRow['username']; ?>, you're succesfully signed in.</h1>  
                    </div>
                </div>
            </div>
        </div><!--page content-->
    </div><!--main-->

    <?php include 'includes/footer.php';?>
