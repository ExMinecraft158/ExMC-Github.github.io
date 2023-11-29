<?php
// 获取传递的参数 link
$link = isset($_GET['link']) ? $_GET['link'] : '';

// 如果 link 参数不为空，则尝试读取 down101.txt 文件的内容
if (!empty($link)) {
    // 构建 down101.txt 文件的路径
    $file_path = 'down101.txt';

    // 检查文件是否存在并可读
    if (file_exists($file_path) && is_readable($file_path)) {
        // 读取文件内容
        $file_content = file_get_contents($file_path);

        // 使用 str_replace 替换文件内容中的 ??? 为传递的 link 参数的值
        $file_content = str_replace('???', $link, $file_content);

        // 将内容作为链接进行跳转
        header('Location: ' . $file_content);
        exit;
    } else {
        echo 'down101.txt 文件不存在或不可读取。';
    }
} else {
    echo '缺少 link 参数。';
}
?>
