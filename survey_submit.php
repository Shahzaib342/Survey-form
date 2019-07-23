<?php
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require("PHPMailer-master/src/Exception.php");

$message = '<html><body> <p>Survey Form data.</p>';

if (isset($_POST)) {
    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            $message .= '<label>' . $key . ' : ' . ' </label>' . '<br>';
            foreach ($value as $index => $val) {
                $message .= ($index + 1) . ' . ' . $val . '<br>';
            }
        } else {
            $message .= '<label>';
            $message .= $key . '</label>' . ' : ' . $value .
                '<br>';
        }
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
} else {
    echo 'success';
}

?>