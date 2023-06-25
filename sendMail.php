<?php
$result = false;
if (!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    function GetMessage($mesage)
    {
        $mesage = htmlspecialchars($mesage);
        $mesage = urldecode($mesage);
        $mesage =   trim($mesage);
        return $mesage;
    }
    $full_name =  GetMessage($_POST['full_name']);
    $email =  GetMessage($_POST['email']);
    $message =  GetMessage($_POST['message']);

    $to = "client@wilshiretime.com";
    $subject = "Wilshire Timepieces Submit Form";

    $title = "Full Name: " . $full_name . "\n\nEmail: " . $email . "\n\nMessage: " .  $message . "";
    $title = iconv("utf-8", "windows-1251", $title);
    if (mail($to, $subject, $title, "From: WilshireBot <bot@wilshiretime.com> \r\n")) {
        $result = true;
    }
}

echo json_encode($result);
