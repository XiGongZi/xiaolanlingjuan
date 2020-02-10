<?php 
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>爱客影院管理后台 - Powered by www.woaik.com</title>
<meta name="keywords" content="爱客源码" />
<meta name="description" content="爱客影院" />
<link href="./images/woaik.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="./../favicon.ico">
</head>
<body>
<?php $nav = 'home';include('head.php'); ?>
<div id="hd_main">
   <div style="margin:20px;">

      <table width="600" border="0" class="tablecss" cellspacing="0" cellpadding="0" align="center">
   <tr>
    <td colspan="2" align="center">欢迎使用爱客影院管理系统！</td>
    </tr>
  <tr>
    <td align="right">当前使用版：</td>
    <td><span>V3.5</span></td>
  </tr>
  <tr>
    <td align="right">最新版：</td>
    <td><a href="http://www.woaik.com/" target="_blank"><font color="#FF0000">点击查看</font></a></td>
  </tr>
  <tr>
    <td width="213" align="right">服务器操作系统：</td>
    <td width="387"><?php $os = explode(" ", php_uname()); echo $os[0];?> (<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];} ?>)</td>
  </tr>
  <tr>
    <td width="213" align="right">服务器解译引擎：</td>
    <td width="387"><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
  </tr>
  <tr>
    <td width="213" align="right">PHP版本：</td>
    <td width="387"><?php echo PHP_VERSION?></td>
  </tr>
  <tr>
    <td align="right">域名：</td>
    <td><?php echo $_SERVER['HTTP_HOST']?></td>
  </tr>
  <tr>
    <td align="right">allow_url_fopen：</td>
    <td><?php echo ini_get('allow_url_fopen') ? '<span class="green">支持</span>' : '<span class="red">不支持</span>'?></td>
  </tr>
  <tr>
    <td align="right">curl_init：</td>
    <td><?php if ( function_exists('curl_init') ){ echo '<span class="green">支持</span>' ;}else{ echo '<span class="red">不支持</span>';}?></td>
  </tr>

<tr>
    <td align="right">/data/目录权限检测：</td>
    <td><?php echo is_writable('../data/') ? '<span class="green">可写</span>' : '<span class="red">不可写</span>'?></td>
  </tr>  

  <tr>
    <td colspan="2" style="line-height:220%; text-indent:28px;">欢迎使用本程序，正版源码交流群<font color="red">（QQ群①：109199812；QQ群②：297935009。</br>站长QQ1：776774592）</font></a>，感谢朋友们的支持！</font></br></br>
3.4版本更新：</br>
1.修复3.3版本不支持二级目录的BUG！ </br>
2.修复磁力及站外搜索失效的问题。 </br>
3.增加两个资源站，尽量减少搜不到资源的尴尬。 </br>
4.增加几个尝鲜视频的选择项。 </br>
5.修复了其他一些小BUG.</br></br>
3.4.1版本更新：</br>
1.增加优惠券搜索及对接大淘客。</br>
2.首页增加综艺及动漫调用，增加电影调用最新电影，以免首页电影老不更新。</br>
3.增加侵权视频版权限制功能。</br>
</br>
3.4.2版本更新：</br>
1.增加尝鲜独立页面，删除不可用的尝鲜页面。</br>
2.修改站外搜索的资源库，资源更全、更新更及时。</br>
3.修复首页调用动漫及综艺时集数显示问题。</br>
4.增加搜索页面选择，防止尝鲜搜索影响搜索页面速度。</br>
5.修复了其他一些小BUG。</br>
</br>
3.5版本更新：</br>
1.增加MV及YY视频分类。增加电视直播页面。</br>
2.修复站外搜索失效，修复磁力。</br>
3.电视剧部分增加播放源，电影增加BT下载链接。</br>
4.部分页面重写，修改调用方式，增加页面速度。</br>
5.增加观看历史。</br>
6.首页自动生成静态页面，增加加载速度。</br>
7.线路接口缩减为5个。</br>
8.侵权视频页面修改为跳转404。</br>
9.修复了其他一些小BUG。</br>
</td> 
    </tr>
   
</table>

   </div>

</div>
<?php include('foot.php'); ?>
</body>
</html>
