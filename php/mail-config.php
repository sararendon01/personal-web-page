<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "d07d7713374005701cb884a4f5407685-f135b0f1-435c86f1";
$mailgunDomain = "https://app.mailgun.com/app/sending/domains/sandboxc04df62775e6430b9778a171918071bb.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6LeaBOwUAAAAALVI_i6xPV8gOjVQkQOv_tjR2IRH';
$secret = '6LeaBOwUAAAAANkmc7bZWOBzJh3oZ_E2CYuHx8bv';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "sararendon29@gmail.com" => "Sara Rendon"];
$MAIL_RECIPIENT = ["sararendon29@gmail.com"];