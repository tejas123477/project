<?php
include("connection.php");
$email = $_POST['email'];
$pass = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
ini_set('SMTP', 'shekharsaxena.co.in');
$sql = "SELECT * FROM userinfo where email = '$email' and password = '$pass'";
$res = mysqli_query($con,$sql);

if(mysqli_num_rows($res) > 0)
{
    $otp = rand(1000,5000);
    $mes = "Your otp is " . $otp;
    $sql = "INSERT INTO otp (email,otp) VALUES ('$email','$otp')";
    if(mysqli_query($con,$sql)){}
    require 'PHPMailerAutoload.php';
    require 'credentials.php';
    $mail = new PHPMailer;

    $mail->SMTPDebug = 0;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'shekharsaxena.co.in';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    error_reporting(0);
    $mail->setFrom(EMAIL, 'Tejas Rai');
    $mail->addAddress($email, $fname . " " . $lname);     // Add a recipient
    $mail->addReplyTo(EMAIL);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'URGENT & IMPORTANT || OTP VERIFICATION';
    $mail->Body    = 'Your OTP for verification is ' . $otp;
    $mail->AltBody = 'Your OTP for verification is ' . $otp;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'OTP has been sent to your entered Email!!';
        echo '
        <form method = "post" action = "otpVerify.php">
        <div class="form-group m-3">
        <label for="exampleInputEmail1" class="input">Enter OTP</label><br>
        <input type="text" name="otp" id="" require>
        </div>
    
    
        
    
        <div class="form-group m-3">
        <input type="submit" value="GET Verified">
        </div>
        </form>';

    }
    
}
    else
    {
        echo "Incorrect Password!!";
    }
?>