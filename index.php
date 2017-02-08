<?php
// 设置内容编码
header("Content-type: text/html; charset=utf-8");

// 加载公共函数文件
require_once './functions.php';

// 接收控制器参数和方法参数
$action = $_GET['a'] ? htmlspecialchars($_GET['a']) : 'Index';
$method = $_GET['m'] ? htmlspecialchars($_GET['m']) : 'index';

// 注册自动加载控制器函数
spl_autoload_register('loadControllerFile');

// 执行控制器对应的方法
$action .= 'Controller';
if (class_exists($action)) {
    $obj = new $action;
    $obj->$method();
} else {
    echo $action . ' is not exist!';
}
