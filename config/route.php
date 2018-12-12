<?php
// +----------------------------------------------------------------------
// | Created by PhpStorm
// +----------------------------------------------------------------------
// | Date: 2018/12/8
// +----------------------------------------------------------------------
// | Blog: ( http://www.woann.cn )
// +----------------------------------------------------------------------
// | Author: woann <304550409@qq.com>
// +----------------------------------------------------------------------
return [
    'm'             => 'index',     //默认模块
    'c'             => 'index',     //默认控制器
    'a'             => 'init',     //默认操作
    'ext'           => '.html',          //url后缀    例如 .html
    'http'          =>  [           //http路由
        //uri-----请求方法----模块/控制器/方法----------中间件
        '/' => ['GET','Index/Index/index','Test'],
        'ws'    => ['GET','Index/Index/ws']
    ],
    'websocket'     =>  [           //websocket路由
        //uri----模块/控制器/方法
        'ws' => 'Index/WebSocket/index',
    ]
];