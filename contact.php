<?php

if($_POST["contact_submit_btn"]) {
    $recipient="damianpasko92@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["contact_name"];
    $senderEmail=$_POST["contact_email"];
    $message=$_POST["contact_message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
