<?php
$lang = array(
    'All Files' => '所有资料',
    'My Doc' => '我的文档',
    'My Pic' => '我的图片',
    'My Music' => '我的音乐',
    'My Video' => '我的视频',
    'BT' => 'BT种子',
    'Others' => '其他',
    'My Collect' => '我的收藏',
    'My Share' => '我的分享',
    'Recommend' => '官方推荐',
    'Public' => '公共资源',
    'Recycle' => '回收站',

    'All' => '全部',
    'Search you want' => '搜你想要',
    'Search' => '搜索',

    'Upload Data' => '上传资料',
    'Upload File' => '上传文件',
    'Create Folder' => '新建文件夹',
    'Delete' => '删除',
    'Download' => '下载',
    'Move' => '移动',
    'Share' => '分享',
    'Rename' => '重命名',
    'Edit' => '编辑',
    'Please input name' => '请输入名称',
    'Are you sure you want to delete it?' => '确定要删除吗',
    'Move to' => '移动到',
    'Shared file' => '共享文件',
    'Share to' => '共享对象',
    'Open' => '公开',
    'Shared link' => '共享链接',
    'Set PWD' => '设置密码',
    'Set deadline' => '设置过期时间',

    'Name' => '名称',
    'Size' => '大小',
    'UpTime' => '上传时间',
    'ColTime' => '收藏时间',
    'View' => '浏览数',
    'Down' => '下载数',
    'Col' => '收藏数',
    'ShareTime' => '分享时间',

    'Cancel Collect' => '取消收藏',
    'Cancel Share' => '取消分享',
    'Are you sure you want to cancel it?' => '确定要取消分享吗？取消之后，其他用户将看不到本资源',
    'Collect' => '收藏',
    'Completely Delete' => '彻底删除',
    'Reduction Data' => '还原资料',

    'Pack up' => '收起菜单',
    'OK' => '确定',
    'Cancel' => '取消',

    'Introduction' => '简介',
    'Setting' => '设置',
    'Messages' => '消息',
    'Logout' => '退出',

    'Return Upper' => '返回上一级',
    'Current Directory' => '当前目录',
    'UpperPage' => '上一页',
    'NextPage' => '下一页',
    'Return' => '返回',

    'Please input username' => '请输入用户名',
    'Please input password' => '请输入密码',
    'Username' => '用户名',
    'Password' => '密码',
    'Auto Login' => '自动登录',
    'Login' => '登录',
    'Regist' => '注册',

    'Create an administrator account' => '创建管理员账号',
    'Catalog to storage file' => '存储文件目录',
    'Configuration Mysql database' => '配置Mysql数据库',
    'Database username' => '数据库用户名',
    'Database password' => '数据库密码',
    'Database name' => '数据库名',
    'Database host' => '数据库HOST',
    'Database port' => '数据库端口',
    'One click Install' => '一键安装',

    'At most 8' => '至多8位',
    'Min' => '最小化',
    'Close' => '关闭',
    'Sorry, you have no right to access this file or file does not exist!' => '很抱歉，您无权访问此文件或文件不存在！',
    'Are you sure you want to delete it?' => '确定要删除吗？',
    'Are you sure you want to collect it?' => '确定要收藏吗？',
    'Are you sure you want to cancel the collection?' => '确定要取消收藏吗？',

    'Your PHP version is too low, you can not install the software, please upgrade to 5.0.0 or higher version of the re installation, thank you!' => '您的php版本过低，不能安装本软件，请升级到5.0.0或更高版本再安装，谢谢！',
    'Please load the PDO extension, thank you!' => '请加载PHP的PDO模块，谢谢！',
    'Please open session, thank you!' => '请开启session，谢谢！',
    'Please ensure that the code directory has written permission, thank you!' => '请保证代码目录有写权限，谢谢！',
    'Please connect MySQL right; open the PDO extension, MySQL extension; guarantee to start mysql, thank you!' => '请正确输入信息连接mysql；开启php的PDO扩展,mysql扩展；保证启动mysql，谢谢！',
    'Please connect MySQL right; open the PDO extension, MySQL extension; guarantee to start mysql, thank you!' => '请正确输入信息连接mysql；开启php的PDO扩展,mysql扩展；保证启动mysql，谢谢！',
    'Detection passed' => '检测通过',
    'Data can not null' => '数据不能为空',
    'File storage directory create failed, please check the directory if you have write permissions to retry' => '文件存储目录创建失败，请检查对应目录是否有写权限后重试',
    'Conf directory file write failed, please check if you have write permissions' => 'conf目录文件写入失败，请检查是否有写权限',
    'Administrator account create failed, please reinstall' => '管理员账号创建失败，请重新安装',
    'Install success' => '安装成功',
    'There are not allowed special characters' => '有不被允许的特殊字符',
);
define('LANG', json_encode($lang));
function t($string) {
    if ($_COOKIE['lang'] == 'en') {
        $lang = json_decode(LANG, true);
        $ret = array_search($string, $lang);
        return $ret ? $ret : $string;
    } else {
        return $string;
    }
}
?>