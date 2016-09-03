<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');



require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');


$domain =  $_SERVER['HTTP_HOST'];//��ȡ��ǰ����


if($domain =='www.tatahaoyun.com')
{
    require(__DIR__ . '/config/tatahaoyunconfig.php'); ///����".DOMAITDESC."��������
}



else if($domain =='www.boshizhidao.com')
{
    require(__DIR__ . '/config/boshizhidaoconfig.php'); ///���벩ʿ֪����������
}

else
{
    require(__DIR__ . '/config/boshizhidaoconfig.php'); ///����Ĭ�Ϲ�������
}



define('BASE_PATH',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/");
  
$config = require(__DIR__ . '/config/web.php');

(new yii\web\Application($config))->run();
