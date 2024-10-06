<?php
return array(
//*************************************数据库设置*************************************
    'DB_TYPE'               =>  'mysqli',                 // 数据库类型
    'DB_HOST'               =>  'localhost',     // 服务器地址
    'DB_NAME'               =>  '数据库名',     // 数据库名
    'DB_USER'               =>  '用户名',     // 用户名
    'DB_PWD'                =>  '密码',      // 密码
    'DB_PORT'               =>  '3306',     // 端口
    'DB_PREFIX'             =>  'zm_',   // 数据库表前缀
	// URL地址不区分大小写
	'URL_CASE_INSENSITIVE' => true,
	//REWRITE模式
	'URL_MODEL'=>'2',
	'MODULE_ALLOW_LIST'    =>    array('Zhis','App','Index'),
	'DEFAULT_MODULE'       =>    'Index',
	'DEFAULT_FILTER'        =>  'htmlspecialchars', 
	
	

);