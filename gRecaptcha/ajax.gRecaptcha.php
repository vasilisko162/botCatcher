<?php

$gRecaptchaClassFile = 'gRecaptcha.class';

if (file_exists($gRecaptchaClassFile)) {
  include 'gRecaptcha.class';
  $gRecaptcha = new gRecaptcha();
} else {
  echo 'ERROR. Failed to load gRecaptcha class.';
  die();
}

if (!$_POST['action']) {
  $gRecaptcha->result['log'] = 'Error. No action';
} else {
  if ($_POST['action'] == 'loadConfig') {
    $gRecaptcha->getConfig();
  } else if ($_POST['action'] == 'getGoogleScore' && $_POST['token']) {
    $gRecaptcha->getGoogleScore();
  } else {
    $gRecaptcha->result['log'] = 'No information about from';
  }
}

$gRecaptcha->returnJson();