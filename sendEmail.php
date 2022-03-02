
<?php
include_once 'phpMailer/libs/PHPMailer-master/src/PHPMailer.php';
include_once 'phpMailer/libs/PHPMailer-master/src/SMTP.php';
include_once 'phpMailer/libs/PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];

        $mess = " Name: " .$name ." Email: " . $email . " Message: " . $message;

        $mail = new PHPMailer();
        $mail->CharSet = "utf-8";
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = "thienlonghj";
        $mail->Password = "!$!!@*92Aatgm";
        $mail->SMTPSecure = "ssl";
        $mail->Host = "ssl://smtp.gmail.com";
        $mail->Port = "465";
        $mail->From = "thienlonghj@gmail.com";
        $mail->FromName = "My Website";
        $mail->addAddress('tranvuongdouble@gmail.com', 'Hello');
        $mail->Subject = "My website message";
        $mail->isHTML(true);
        $mail->Body = "You received a new message" . $mess . " ";

        if ($mail->Send()) {
            echo json_encode(array(
                "error" => false,
                "message" => "Send successfully !"
            ));
            header('Refresh: 5; url= index.html');
        }
        else {
            echo json_encode(array(
                "error" => true,
                "message" => "Send failed !"
            ));
            header('Refresh: 5; url= index.html');
        }

    


?>