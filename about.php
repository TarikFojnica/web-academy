<?php
session_start();

include_once 'includes/dbconnect.php';

if(isset($_POST['btn-signup']))
{
    $uname = mysql_real_escape_string($_POST['uname']);
    $email = mysql_real_escape_string($_POST['email']);
    $upass = md5(mysql_real_escape_string($_POST['pass']));
    
    if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
    {
        ?>
        <script>alert('successfully registered ');</script>
        <?php
    }
    else
    {
        ?>
        <script>alert('error while registering you...');</script>
        <?php
    }
}
?>

<?php include 'includes/header.php';?>


    	<div class="about-page">
            <div class="page-content">
                <div class="units-container">
                    <div class="units-row">
                        <div class="unit-65">
                            <article>
                                <h1>About WebAcademy</h1>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel placerat nunc. Fusce felis magna, scelerisque in mauris eget, malesuada vulputate lectus. Etiam convallis est vitae fermentum tincidunt. Sed in quam purus. Morbi tincidunt diam vitae iaculis pulvinar. Nam bibendum aliquet tellus, sit amet condimentum lacus bibendum sit amet. Integer ut tellus nulla. Donec tristique rhoncus ligula vel feugiat. Sed a metus pretium, rutrum velit quis, auctor metus. Quisque rutrum turpis at tellus ullamcorper, ut porta neque dapibus.</p>

                                <p>Ut semper euismod lacinia. Quisque ut bibendum nibh. Ut fringilla odio quis erat vulputate dictum ac vitae metus. Nunc vitae felis dapibus, pellentesque quam id, mattis leo. Aliquam a sodales dolor. Fusce vitae dui eu dolor efficitur dapibus. In a urna sed nisi facilisis convallis. Aliquam nunc ex, elementum in dolor a, facilisis bibendum mauris. Morbi et fringilla augue, ac ultricies urna. Etiam tincidunt nunc non justo maximus, eu viverra orci sollicitudin. Aliquam et congue odio.</p>

                                <p>Sed fermentum maximus ex nec pulvinar. Etiam sit amet neque eu arcu dignissim condimentum non eu ex. Etiam aliquet ligula a sem aliquam, in laoreet ante tincidunt. Aliquam vitae sodales nunc. Suspendisse elit purus, faucibus sed rhoncus et, commodo nec urna. Maecenas non purus vulputate, tincidunt mi in, volutpat ex. Nunc ut odio non leo rutrum consectetur et vel mauris. Fusce sed congue turpis. Cras vestibulum auctor dui, ac convallis tellus volutpat eu. Morbi eu est non quam accumsan maximus non vitae massa. Suspendisse in ante mauris. Duis id diam in ex feugiat dapibus in nec tortor.</p>

                                <p>Vivamus vel erat sollicitudin, finibus massa vel, luctus dolor. Phasellus in est elit. Duis quis leo at sem placerat aliquet at aliquam odio. Vestibulum in pretium libero, sit amet iaculis mauris. Curabitur non tellus tempus, sodales lacus in, blandit nibh. Nulla volutpat tortor eget ipsum tempor tempus. Aenean quis vehicula neque, commodo feugiat erat.</p>

                                <p>Nulla tincidunt tempor ligula, eget mollis neque ornare sit amet. Vivamus in suscipit libero, et dapibus diam. Etiam id turpis magna. Pellentesque sodales libero quis nunc molestie lacinia. Duis nec scelerisque dui. Pellentesque scelerisque odio nunc. Mauris pulvinar urna eu ex dignissim, sit amet accumsan erat bibendum. Praesent sed diam posuere, gravida nulla non, dapibus mi. Aenean posuere libero quis porttitor bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus fringilla justo non ligula maximus, a vestibulum ipsum congue. Etiam dui lectus, tristique sit amet venenatis sed, egestas auctor quam. In ultricies lectus leo, sed pretium nibh viverra sed. Donec tristique nisl diam, id cursus risus dictum in. Phasellus ac tempor sem. Nullam ac lectus eget nunc eleifend ultrices nec sed metus.</p>

                                <address>
                                    <strong>HashingSpace Corporation</strong><br>
                                    5042 Wilshire Blvd #26900 <br>
                                    Los Angeles, CA, 90036<br>
                                    Main: 844-HASHING <br>
                                    Fax: 877.482.9585
                                </address>
                            </article>
                        </div>

                        <div class="unit-35">
                            <div class="sidebar-form">
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


                                <p>Already a member? <a href="login.php">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--page content-->
    </div><!--main-->

    <?php include 'includes/footer.php';?>
