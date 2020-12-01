<?php


$recipient = "mrepte700@gmail.com";

$subject = "Subscribe";

$location = "index.html?true";

$sender = $recipient;

# MAIL BODY
$body = "Email: ".$_REQUEST['email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender") or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>