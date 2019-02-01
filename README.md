# gRecaptcha

## Information
* version: 0.0.1
* date: 01.02.2019

## Description
A service that allows you to screen bots and users on the site. The service is based on "Google reCAPTCHA v3". Information about visitors is recorded in the logs indicating ip.

## Installing
To run the script, you need to have:
* jQuery (`demo/js/jquery-3.1.1.min.js`)
* PHP

#### step 1
Place the folder `gRecaptcha` in the site directory;

#### step 2 
Create a configuration file in folder `gRecaptcha`;

File name: `config.gRecaptcha.json`

File contents:
```json
{
  "urlGoogleApiJs|https://www.google.com/recaptcha/api.js",
  "urlGoogleSiteVerify|https://www.google.com/recaptcha/api/siteverify",
  "reCAPTCHA_siteKey|add-your-google-site-key",
  "reCAPTCHA_secret|add-your-google-secret",
  "minScore": 0.5,
  "LogDir|../log/",
  "logFilePrefix|gRecaptcha_log_"
}
```
Param name  | Param value
----------------|----------------------
|urlGoogleApiJs | Url to Google Api js file. Example: https://www.google.com/recaptcha/api.js|
|urlGoogleSiteVerify| url to Google Site Verify service. Example: https://www.google.com/recaptcha/api/siteverify|
|reCAPTCHA_siteKey| Your Google site key |
|reCAPTCHA_secret| Your Google secret |
|minScore| Сколько минимум очков должен получить от "Гоогле" пользователь, чтобы не считаться ботом. Min: `0.1`. Max: `1.0`. Default: `0.5`| 
|LogDir| Path to the folder where logs will be stored. Example: `../log/` |
|logFilePrefix| Prefix for log file names. Example: `gRecaptcha_log_`|

File for example: `gRecaptcha/config.gRecaptcha.example.json`

#### step  3
Add a connection script to your site template;
```html
<html>
<head>
  ...
  <script type="text/javascript" src="jquery.gRecaptcha.js"></script>
  ...
</head>
<body>
...
```

#### step 4
Call the module in the site template.
```html
<html>
<head>
  ...
  <script type="text/javascript" src="jquery.gRecaptcha.js"></script>
  <script type="text/javascript">
    $(document).gRecaptcha({
      timerTime: 10,
      workDir: '../gRecaptcha/',
      showLog: false
    });
  </script>
  ...
</head>
<body>
...
```
|config param|config value|
----------------|----------------------
|timerTime|The time after which the request will be sent to the Google to get information about the user. Default: `20`|
|workDir|'Address of the folder where the script is located. Default: `../gRecaptcha/`'|
|showLog|Display logs in the console. Default: `false`|

## Example
Folder `demo`