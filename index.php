<?php
/**
 * 项目入口文件
 */

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//网站当前路径
define('SITE_PATH', dirname(__FILE__)."/");
// 定义应用目录
define('APP_PATH',SITE_PATH.'Application/');

//项目相对路径，不可更改
define('SPAPP_PATH',SITE_PATH.'code/');
//项目资源目录，不可更改
define('SPSTATIC',   SITE_PATH.'statics/');
//定义缓存目录
define('RUNTIME_PATH',   SITE_PATH.'data/runtime/');
//静态缓存目录
define('HTML_PATH',   SITE_PATH.'data/runtime/Html');

// 引入ThinkPHP入口文件
require SPAPP_PATH.'Core/ThinkPHP.php';