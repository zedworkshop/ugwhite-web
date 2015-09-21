<?php

email::$services['html-mail'] = function($email) {
   $headers = array(
      'From: ' . $email->from,
      'Reply-To: ' . $email->from,
      'Return-Path: ' . $email->from,
      'Message-ID: <' . time() . '-' . $email->from . '>',
      'X-Mailer: PHP v' . phpversion(),
      // changed:
      'Content-Type: text/html; charset=utf-8',
      'Content-Transfer-Encoding: 8bit',
   );
   ini_set('sendmail_from', $email->from);
   $send = mail($email->to, str::utf8($email->subject), str::utf8($email->body), implode(PHP_EOL, $headers));
   ini_restore('sendmail_from');
   if(!$send) {
      throw new Error('The email could not be sent');
   }
};
