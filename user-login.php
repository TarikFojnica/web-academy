<?php include 'includes/header.php';?>

<?php 
   if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
        $email = $_POST ['email'];
        $name  = $_POST ['name'];

   } 
?>

    	<div class="about-page">
            <div class="page-content">
                <div class="units-container">
                    <div class="units-row">
                        <h1>Welcome <?php echo $name;?>, you're succesfully signed in.</h1>  
                    </div>
                </div>
            </div>
        </div><!--page content-->
    </div><!--main-->

    <?php include 'includes/footer.php';?>
