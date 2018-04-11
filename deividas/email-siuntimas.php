<?php
// test
// print_r( $_POST )


$elPastas =  $_POST['pastas'];
$klientoVardas=  $_POST['vardas'];
$klientoKlausimas =  $_POST['klausimas'];



include_once('connection.php');
$mySql = "INSERT INTO emailas VALUES('', '$elPastas' , '$klientoVardas', '$klientoKlausimas')";
$result = mysqli_query($connection, $mySql);


// echo $elPastas . $klientoVardas . $klientoKlausimas;




 //Load Composer's autoloader
 require 'libs/PHPMailer-master/PHPMailerAutoload.php';

 $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
 try {
     //Server settings
     $mail->SMTPDebug = 2;                                 // Enable verbose debug output

       // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais

       $mail->SMTPOptions = array(
           'ssl' => array(
           'verify_peer' => false,
           'verify_peer_name' => false,
           'allow_self_signed' => true
           )
       );
       $mail->Host = 'tls://smtp.gmail.com:587';
       $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
       $mail->Port = 465;                                      // TCP port to connect to

       //Server settings
       $mail->SMTPDebug = 0;                                 // Enable verbose debug output
       $mail->isSMTP();                                      // Set mailer to use SMTP

       $mail->SMTPAuth = true;                               // Enable SMTP authentication
       $mail->Username = 'web.321action@gmail.com';                 // SMTP username                            // TCP port to connect to
       $mail->Password = 'deividas777';                 // SMTP username                            // TCP port to connect to

     //Recipients
     $mail->setFrom('web.321action@gmail.com', 'Puslapiu kurejai');
     $mail->addAddress('web.321action@gmail.com', 'Puslapiu kurejai');     // Add a recipient
     // $mail->addAddress('ellen@example.com');               // Name is optional
     $mail->addReplyTo($elPastas, 'Kliento vardas');
     // $mail->addCC('cc@example.com');
     // $mail->addBCC('bcc@example.com');

     //Attachments
     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

     //Content
     $mail->isHTML(true);                                  // Set email format to HTML
     $mail->Subject = $klientoVardas;
     $mail->Body    = $klientoKlausimas;
     $mail->AltBody = $klientoKlausimas;

     $mail->send();
     // $zinute = " Sveikinu, jusu laiskas issiustas";
     // $_SESSION['zinutes'] = $zinute;
     // print_r ($GLOBALS);
     // createDoctor($elPastas, $klientoAntraste)



     echo 'Message has been sent';
        } catch (Exception $e) {
     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }


          header("Location: index.php"); /* Redirect browser */
              exit();
