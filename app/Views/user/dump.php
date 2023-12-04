<?php
$email = \Config\Services::email();

$email->setFrom($config->fromEmail, $config->fromName);
$email->setTo('dafahanreg@gmail.com');
$email->setSubject('Your email subject');
$email->setMessage('Your email message');

$email->send();
