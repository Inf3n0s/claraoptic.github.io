<?php 

if(isset($_POST['submit'])){
    $name =$_POST['form_name'];
    $phone =$_POST['form_phone'];
    $mailFrom = $_POST['form_email'];
    $subject = $_POST['form_subject'];
    $message = $_POST['form_message'];

    $mailTo = "alexandru.scanteie08@yahoo.ro";
    $headers = "De la : ".$mailFrom;

    $txt = "Ai primit un email de la ".$name.".\n\n".$message;

    mail($mailTo ,$subject, $txt , $headers);
    header("Location: index.html?mailsend");
}