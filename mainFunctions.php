<?php

function valid_email($address)
{
  //elegxos ths metavlhths pou periexei to email tou xrhsth
  if (ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $address))
    return true;
  else 
    return false;
}


function mail_utf8($to, $subject = '(No subject)', $message = '', $header = '')
{

	$header_ = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
	$ret=mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $header_ . $header);
	return $ret;
}


?>
