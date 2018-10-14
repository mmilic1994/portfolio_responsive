<?php

$content = '<p>First name: ' . $_POST['firstName'] . '</p>' .
           '<p>Last name: ' . $_POST['lastName'] . '</p>' .
           '<p>Email: ' . $_POST['email'] . '</p>' .
           '<p>Phone number: ' . $_POST['phone'] . '</p>' .
           '<p>Message: ' . $_POST['message'] . '</p>';

           
           $headers = "MIME-Version: 1.0" . "\r\n";
           $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail('mmilic1994@gmail.com', 'Contact Form', $content, $headers);

header('Location: /thanks.php');