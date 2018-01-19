# aliyun-sms
阿里云短信服务PHP SDK（2017/11/19）
根据SDK轻量版改编
[阿里云sdk下载](https://help.aliyun.com/document_detail/55359.html?spm=5176.doc55451.6.580.sNhAJ2)


# LICENSE
MIT


# 例
```
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
```