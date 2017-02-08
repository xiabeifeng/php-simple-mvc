<?php
/**
 * 加载控制器文件
 * @param string $action 控制器类名
 */
function loadControllerFile($action)
{
    $action = ucfirst($action);
    $filePath = './controller/' . $action . '.php';
    if (file_exists($filePath)) {
        include_once $filePath;
    }
}
