<?php 
include("pages/forms/include.php");
?>

<?php session_start();
	//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
 ?>


	<?php
		
		if(isset($_POST['forget'])){
			
			$email=$_POST['mail'];
			$q=mysqli_query($conn,"select * from login where email='$email'");
			if(mysqli_num_rows($q)>0){
				
				
				$to=$email;
				$sub="Recover Password";
				$otp=rand(10000,99999);
			
			//Create an instance; passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
				//Server settings
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = "vedant.naidu@tectignis.in";                     //SMTP username
				$mail->Password   = 'Vedant@123';                               //SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
				$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom('vedant.naidu@tectignis.in', 'Mailer');
				$mail->addAddress($email, 'Joe User');     //Add a recipient
				//$mail->addAddress('ellen@example.com');               //Name is optional
				//$mail->addReplyTo('info@example.com', 'Information');
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');

				//Attachments
				//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
				//$path=$loc.$name;
				//$mail->addAttachment($path, $name);    //Optional name

				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = 'Reset Password';
				$mail->Body    = 'This is the HTML message body <b>in bold!</b>'.$otp;
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if($mail->send()){
					$q1=mysqli_query($conn,"update login set verify_token='$otp' where email='$email'");
						if($q1){
							$_SESSION['otp']=$otp;
							$_SESSION['email']=$email;
							
							header("location:resetpassword.php");
						}
						else{
							echo"Error";
						}
				
				
				}
				
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
			
					
					
				
				
				
			}
		}
	?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forget Password</title>
  <link rel="stylesheet" href="	https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  
</head>
<body>
<div class="container padding-bottom-3x mb-2 mt-5">
	    <div class="row justify-content-center">
	        <div class="col-lg-8 col-md-10">
	            <div class="forgot">
	                <h2>Forgot your password?</h2>
	                <p>Change your password in three easy steps. This will help you to secure your password!</p>
	                <ol class="list-unstyled">
	                    <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
	                    <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
	                    <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
	                </ol>
	            </div>
	            <form class="card mt-4" method="post">
	                <div class="card-body">
	                    <div class="form-group"> 
                            <label for="email-for-pass">Enter your email address</label> <input class="form-control" type="text" name="mail" id="email-for-pass" required>
                        <small class="form-text text-muted">Enter the email address you used during the registration on BBBootstrap.com. Then we'll email a link to this address.</small> </div>
	                </div>
	                <div class="card-footer">
                         <button class="btn btn-success" name="forget" type="submit" >Get New Password"</button>
                          <button class="btn btn-danger" type="submit">Back to Login</button> </div>
	            </form>
	        </div>
	    </div>
	</div>

    <!--script-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>