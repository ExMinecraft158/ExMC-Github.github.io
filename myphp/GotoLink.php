<?php
// 获取参数link的值
$link = $_GET['link'];

// 检查链接是否为空或未设置
if (empty($link)) {
    echo "参数 'link' 未设置或为空";
} else {
    // 使用header函数进行跳转
    header("Location: $link");
    exit(); // 确保脚本终止，以防止进一步的代码执行
}
?>
