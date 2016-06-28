<?php

$fn = trim(strip_tags($_POST["fn"]));
$em = trim(strip_tags($_POST["em"]));
$msg= trim(strip_tags($_POST["msg"]));

$valid = false;
$rec ="jp.nuyens16@gmail.com";

if (!empty($fn) && !empty($em) && !empty($msg)){

    if (preg_match("(multipart\alternative|content-type:|cc:|bcc:|boundary=)", $fn)) {
        die('<div class="error">Sorry but my email server does not like you.</div>');
        
    } else if (preg_match("(multipart\alternative|content-type:|cc:|bcc:|boundary=)", $em)) {
        die('<div class="error">Sorry but my email server does not like you.</div>');
        
    } else if (preg_match("(multipart\alternative|content-type:|cc:|bcc:|boundary=)", $msg)) {
        die('<div class="error">Sorry but my email server does not like you.</div>');
        
    } else {
        $valid=true;
    }
}
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:'.$em;

if($valid) {
    mail($rec,'Visitor from jpdynamic.com', $msg,$headers);
    echo "<p>Thanks for the message. We will contact you as soon as we can.</p>";
    
} else {
    echo "I think something went wrong with your submission. Please try again.";
}

?>
