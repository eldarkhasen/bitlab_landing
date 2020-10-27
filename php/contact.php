<?php
if(!$_POST) exit;

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name = $_POST['name'];
$course = $_POST['course'];
$phone = $_POST['phone'];
$success = "<div id='contact-success'></div>";
$error = "<div id='contact-error'></div>";

$token = "964999990:AAEtU6Y4jUoE_fFLS4xwgttjYhDNX2tLrY8";
$chat_id = "-1001301828738";

// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";
//$address = "example@example.net";
$address = "request@bitlab.kz";
// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."
// Example, $e_subject = '$name . ' has contacted you via Your Website.';
$e_subject = 'Вам пришла заявка от ' . $name . '.';
// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.
$e_body = "Вам пришла заявка от $name. На курс: .$course. Номер контакта." . PHP_EOL . PHP_EOL;
$e_content = "\"$phone\"" . PHP_EOL . PHP_EOL;
$e_reply = "Вы можете связаться с $name";
$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );
$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
$sendEmail = mail($address, $e_subject, $msg, $headers);
/*
$arr = array(
	"Имя: "=>$name,
	"Телефон: "=>$comments,
	"Курс: "=>$course
);
$txt .=urlencode("<b>НОВАЯ ЗАЯВКА!!!</b>\n");
foreach($arr as $key => $value) {
  $txt .= urlencode("<b>".$key."</b> ".$value."\n");
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
*/
if ($sendEmail) {
	echo $success;
} else {
  	echo $error;
}
?>