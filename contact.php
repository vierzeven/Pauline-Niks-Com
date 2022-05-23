<?php
session_start();
$page = 'contact';

require('head.php');
require('menu.php');
?>

<div id="project_title"></div>

<?php
$fullname = '';
$email = '';
$phonenumber = '';
$message = '';
// Check to see if there is any form data from a user returning after being sent back...
if (isset($_GET['fullname']) && !empty($_GET['fullname'])) { $fullname = $_GET['fullname']; };
if (isset($_GET['email']) && !empty($_GET['email'])) { $email = $_GET['email']; };
if (isset($_GET['phonenumber']) && !empty($_GET['phonenumber'])) { $phonenumber = $_GET['phonenumber']; };
if (isset($_GET['message']) && !empty($_GET['message'])) { $message = $_GET['message']; };
?>


<div id="main_content">
    <h3>CONTACT</h3>
    <div id="contactform">
        <form method="post" action="sendmsg.php">
            <label>name<br><input name="fullname" required="required" value="<?php echo $fullname; ?>" /></label><br><br>
            <label>email<br><input type="email" name="email" required="required" value="<?php echo $email; ?>" /></label><br><br>
            <label>phonenumber<br><input type="number" name="phonenumber" value="<?php echo $phonenumber; ?>" /></label><br><br>
            <label>message<br><textarea cols="30" rows="10" name="msg" required="required"><?php echo $message; ?></textarea></label><br><br>
            <?php
            $random1 = rand(0,10);
            $random2 = rand(0,10);
            $_SESSION['captcha'] = $random1 + $random2;
            ?>
            <label>how much is <?php echo $random1; ?> + <?php echo $random2; ?>?<br>
                <input type="number" name="userinput">
            </label><br><br>
            <button style="width:80px;height:40px" type="submit" name="submit_msg">SEND</button><br>
        </form>
    </div>
</div>


<div id="text">
</div>

<?php
include ('footer.html');
?>

</body>

<script src="functions.js"></script>

</html>