<?php
session_start();
if(isset($_SESSION['user'])!="")
{
    header("Location: courses.php");
}
include_once 'includes/dbconnect.php';

if(isset($_POST['btn-signup']))
{
    $uname = mysql_real_escape_string($_POST['uname']);
    $email = mysql_real_escape_string($_POST['email']);
    $upass = md5(mysql_real_escape_string($_POST['pass']));
    
    if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
    {
        ?>
        <script>alert('Successfully registered ');</script>
        <?php
    }
    else
    {
        ?>
        <script>alert('Error while registering you...');</script>
        <?php
    }
}
?>

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
                                        <input type="text" class="width-100" name="uname" placeholder="User Name" required />
                                    </label>

                                    <label>
                                        Email <span class="req"></span>
                                        <input type="email" class="width-100" name="email" placeholder="Your Email" required />
                                    </label>

                                    <label>
                                        Password <span class="req"></span>
                                        <input type="password" class="width-100" name="pass" placeholder="Your Password" required />
                                    </label>
                                    
                                     <button type="submit" class="btn" name="btn-signup">Sign Me Up</button>
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
