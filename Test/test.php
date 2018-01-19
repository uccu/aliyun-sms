<?php

require_once __DIR__."/../vendor/autoload.php";


use Uccu\AliyunSms\SendSms;

$c = new SendSms;

$c->setAccessKey('###','###');
$c->setParams([
    'PhoneNumbers'=>'###',
    'SignName'=>'###',
    'TemplateCode'=>'###',
    'TemplateParam'=>[
        "code" => '1234'
    ],
]);


echo $c->sendSms();

