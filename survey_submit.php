<?php
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require ("PHPMailer-master/src/Exception.php");

$message = '<html><body> <p>Survey Form data.</p>';
$message .= '<label>Email : </label>' . $_POST['email'] .
    '<br>';
$message .= '<label>What type of implants did you have? : </label>' . $_POST['implants'] .
    '<br>';

if(isset($_POST['symptoms'])) {
    $message .= '<label>What type of implants did you have? : </label>'. '<br>';;
    foreach ($_POST['symptoms'] as $key => $value) {
        $message .= ($key + 1) . '.' . $value . '<br>';
    }

}

$message .= '</body></html>';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->Debugoutput = 'html';
$mail->Host = "smtpout.secureserver.net";
$mail->Port = 587; // or 587
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth =
$mail->Username = 'darby@thelemonaidgroup.com';
$mail->Password = 'darby123';
$mail->SetFrom('darby@thelemonaidgroup.com', 'darby@thelemonaidgroup.com');
$mail->Subject = "Survey Form Data"; //your subject here
$address = "Shahzaibalihassan@gmail.com";
$mail->AddAddress($address);
$mail->MsgHTML($message);
if (!$mail->send()) {
    echo 'failed';
}
else {
    echo 'success';
}

?>