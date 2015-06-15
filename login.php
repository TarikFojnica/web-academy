<?php
session_start();
include_once 'includes/dbconnect.php';

if(isset($_SESSION['user'])!="")
{
    header("Location: courses.php");
}

if(isset($_POST['btn-login']))
{
    $email = mysql_real_escape_string($_POST['email']);
    $upass = mysql_real_escape_string($_POST['pass']);
    $res=mysql_query("SELECT * FROM users WHERE email='$email'");
    $row=mysql_fetch_array($res);
    
    if($row['password']==md5($upass))
    {
        $_SESSION['user'] = $row['user_id'];
        header("Location: courses.php");
    }
    else
    {
        ?>
        <script>alert('wrong details');</script>
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
                                <h2>Please Sign In To Access the Protected Materials</h2>
                                <form method="post" action="" class="forms">

                                    <label>
                                        Email <span class="req"></span>
                                        <input type="text" class="width-100" name="email" placeholder="Your Email" required />
                                    </label>

                                    <label>
                                        Password <span class="req"></span>
                                        <input type="password" class="width-100" name="pass" placeholder="Your Password" required />
                                    </label>

                                     <button type="submit" class="btn" name="btn-login">Sign In</button>
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
