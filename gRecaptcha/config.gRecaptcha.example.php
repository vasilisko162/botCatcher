<?php
$gRecaptchaConfig = array(
  'urlGoogleApiJs'      => 'https=>//www.google.com/recaptcha/api.js',
  'urlGoogleSiteVerify' => 'https=>//www.google.com/recaptcha/api/siteverify',
  'reCAPTCHA_siteKey'   => 'add-your-google-site-key',
  'reCAPTCHA_secret'    => 'add-your-google-secret',

  'minScore' => '0.5',

  'timerTime'            => '10',       // Seconds
  'timerType'            => '1',        // 1 - start timer ONE time / 2 - start timer every time when page refresh
  'timerRepeatIteration' => '2',        // TODO

  'LogType'       => 'file',            // file - save into file / db - save into DataBase
  'LogDir'        => '../log/',         // Log file directory
  'logFilePrefix' => 'gRecaptcha_log_'  // Log file name prefix
);
?>