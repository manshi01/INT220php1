<?php
$to_email = "manshibharti9546@gmail.com";
$subject = "Comfirmatory Email via PHP";
$body = "Hi, this is test email send by PHP in 2022";
$headers = "From : jointeamrkt@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email sent successfully to $to_email <br>";
} else {
    echo "Email sending failed <br>";
}
