<?php

function sendEmail($email)
{
    $to = $email;
    $subject = "Your eBook is Here - Teliossagi.com";
    $content = "";
    $content .= "<table align='center' style='font-family: Helvetica Neue,sans-serif; color: #303030;'><tr><td>";
    $content .= "<div style='background-image: url(https://teliossagi.com/book-lib.jpg); height: 50px; margin-top: 10rem;'><p style='background: rgba(0, 0, 0, .6); padding: 11px; font-size: 1.5rem; color: #FFF;text-align: center;'>Teliossagi</p></div>";
    $content .= "<div style='text-align: center; margin-bottom: 2rem; background-color: #def6ff; padding: 5rem 3rem;'>";
    $content .= "<p style='font-size: 2rem; font-weight: bold; margin: 0;'>Here's your Download</p>";
    $content .= "</div>";
    $content .= "<div><p style='text-align: center;'>234 (0) 809 453 9393 <br> Lagos, Nigeria</p></div>";
    $content .= "</td></tr></table>";

    $header = "From:zeelz.co@gmail.com \r\n";
    // $header .= "Cc:sales@teliossagi.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $header .= "charset: utf-8\r\n";

    $retval = mail($to, $subject, $content, $header);

    if ($retval == true) {
        header("Location: /?customer=" . $email);
    } else {
        header("Location: /?error=yes");
    }
}
// echo pathinfo('', PATHINFO_FILENAME);

sendEmail('zeelz.co@gmail.com');
