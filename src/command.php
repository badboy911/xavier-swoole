<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
if (!defined("APP_PATH")){
    define('APP_PATH', __DIR__ . '/../application/');
}

// 注册命令行指令
\think\Console::addDefaultCommands([
    '\\xavier\\swoole\\command\\Swoole',
]);
