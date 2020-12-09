<?php
$field_name = $_POST['name'];
$field_subject = "Message From HOMIHELP Web User";
$field_email = $_POST['email'];
$field_message = $_POST['comments'];



$mail_to = 'hello@homihelp.com';
$subject = 'Message/Enquiry :: '.$field_subject;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'index.php';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message failed. Please try after sometime.');
        window.location = 'index.php';
    </script>
<?php
}
?>