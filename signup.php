<?php include 'includes/header.php';?>


    	<div class="signup-page">
            <div class="page-content">
                <div class="units-container">
                    <div class="units-row">
                        <div class="unit-60 unit-push-20">
                           <div class="element">
                                <h2>Sign Up For Free</h2>
                                <form method="post" action="" class="forms">
                                     <label>
                                        Your name <span class="req"></span>
                                        <input type="text" name="user-name" class="width-100"  />
                                    </label>

                                    <label>
                                        Email <span class="req"></span>
                                        <input type="email" name="user-email" class="width-100"  />
                                    </label>

                                    <label>
                                        Password <span class="req"></span>
                                        <input type="password" name="user-passowrd" class="width-100"  />
                                    </label>

                                    <label>
                                        Confirm the password <span class="req"></span>
                                        <input type="password" name="user-passowrd" class="width-100"  />
                                    </label>

                                     <input type="submit" class="btn" value="Register" />
                                </form>
                                <p>Already a member? <a href="#">Login</a></p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--page content-->
    </div><!--main-->
    <?php include 'includes/footer.php';?>
