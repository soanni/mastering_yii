<?php
if(!defined('APPLICATION_ENV'))
{
    $env_value = getenv('APPLICATION_ENV');
    if($env_value != false)
    {
        define('APPLICATION_ENV',$env_value);
    }else{
        define('APPLICATION_ENV','prod');
    }
}
$env = require(__DIR__ . '/../config/env.php');

defined('YII_DEBUG') or define('YII_DEBUG', $env['debug']);
defined('YII_ENV') or define('YII_ENV', APLLICATION_ENV);

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
