<?php

return [
//    'class' => 'yii\db\Connection',
//    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
//    'username' => 'root',
//    'password' => '',
//    'charset' => 'utf8',
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:/' . __DIR__ . '/../../../runtime/db.sqlite',
    'charset' => 'utf8'
];