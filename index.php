<?php
/** +----------------------------------------------------------------------
  * | 前台入口文件
  * +----------------------------------------------------------------------
  * | @Author: zhaojie
 **/

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

//定义ThinkPHP核心文件目录路径
define('THINK_PATH','ThinkPHP/');

//当前目录路径
define('SITE_PATH', getcwd() . '/');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);
// 应用公共目录
define('COMMON_PATH', 'Common/');
// 定义应用目录
define('APP_PATH','Home/');
//应用运行缓存目录
define("RUNTIME_PATH", SITE_PATH . "#runtime/");
//模板存放路径
define('TEMPLATE_PATH', APP_PATH.'Home/View/');

// 引入ThinkPHP入口文件
require THINK_PATH.'ThinkPHP.php';