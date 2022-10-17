 <?php
 include("include/config.php");

if(isset($_POST['submit'])){
  
      $name= $_POST['name'];
$PhoneNumber = $_POST['PhoneNumber'];
$branch = $_POST['branch'];
$comments= $_POST['comments'];
$date= $_POST['date'];
$time= $_POST['time'];   

// configure 
// $from = 'Enquiry <care@gobestdentist.com>';
// $send = ['dr.sanamokashi@gmail.com', 'gobestdentist@gmail.com','seniormanager1234@gmail.com', $branch];
// $sendTo =  implode(',',$send);
// $subject = 'Book an Appointment Form';
// $fields = array('name' => 'name', 'PhoneNumber' => 'PhoneNumber', 'branch' => 'branch', 'comments' => 'comments', 'date' => 'date', 'time' => 'time'); // array variable name => Text to appear in email
// $okMessage = 'Thank You';
// $errorMessage = 'There was an error while submitting the form. Please try again later';

// // let's do the sending

// try
// {
//     $emailText = "You have new message from Book an Appointment form website\n=============================\n";

//     foreach ($_POST as $key => $value) {

//         if (isset($fields[$key])) {
//             $emailText .= "$fields[$key]: $value\n";
//         }
//     }

//     mail($sendTo, $subject, $emailText, "From: " . $from);
//     echo "<script>window.location.href='thankyou.php';</script>";
//         //$responseArray = array('type' => 'success', 'message' => $okMessage);
// }
// catch (\Exception $e)
// {
    
//     echo "<script>alert('$errorMessage');</script>";
//     //$responseArray = array('type' => 'danger', 'message' => $errorMessage);
// }

// if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
//     $encoded = json_encode($responseArray);
    
//     header('Content-Type: application/json');
    
//     echo $encoded;
// }
// else {
//     echo $responseArray['message'];
// }
//    } 
$sql=mysqli_query($conn,"INSERT INTO `appointment`(`name`, `phone`, `branch`, `message`, `date`, `time`) VALUES ('$name','$PhoneNumber','$branch','$comments','$date','$time')");
if($sql=1)
			{
			header("location:thankyou.php");
			}
			else{
			echo"<script> alert('Not Submited');window.location.href='index.php';</script>";    
			}
      





}
?>

<?php
	if(isset($_POST['sub2'])){
$PhoneNumber= $_POST['PhoneNumber'];
// configure
$sql=mysqli_query($conn,"INSERT INTO `call_back`( `phone`) VALUES ('$PhoneNumber')");
if($sql=1)
			{
			    echo"submited";
			header("location:thankyou.php");
			}
			else{
			echo"<script> alert('Not Submited');
    window.location.href='index.php';</script>";    
			}
// $from = 'Enquiry <care@gobestdentist.com>'; 
// $send = ['dr.sanamokashi@gmail.com', 'gobestdentist@gmail.com','seniormanager1234@gmail.com'];
// $sendTo =  implode(',',$send);
// $subject = 'POP UP FORM ENQUIRY FROM WEBSITE';
// $fields = array('PhoneNumber' => 'PhoneNumber'); // array variable name => Text to appear in email
// $okMessage = 'thank you! We will respond to you as early as possible. For Quick Confirmation, Call us on 7264889986 and take instant appointment on Call.';
// $errorMessage = 'There was an error while submitting the form. Please try again later';

// try
// {
//     $emailText = "You have new message from contact form\n=============================\n";

//     foreach ($_POST as $key => $value) {

//         if (isset($fields[$key])) {
//             $emailText .= "$fields[$key]: $value\n";
//         }
//     }

//     mail($sendTo, $subject, $emailText, "From: " . $from);
//     echo "<script>window.location.href='thankyou.php';</script>";
    
// }
// catch (\Exception $e)
// {
//     echo "<script>alert('$errorMessage');</script>";
//    // $responseArray = array('type' => 'danger', 'message' => $errorMessage);
// }

// if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
//     $encoded = json_encode($responseArray);
    
//     header('Content-Type: application/json');
    
//     echo $encoded;
// }
// else {
//     echo $responseArray['message'];
// }
}
?>