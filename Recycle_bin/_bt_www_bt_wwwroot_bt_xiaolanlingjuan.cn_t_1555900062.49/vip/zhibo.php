<?php


error_reporting(0);
include "./inc/aik.config.php";
$zhan = $aik["zhanwai"];
$url = $_SERVER["HTTP_HOST"];
$jiejie = substr($url, 0 - 7, 7);
$jia0 = base64_encode($jiejie);
$jia = md5($jia0);
$b = strpos($jia, "a");
$c = strpos($jia, "z");
$ye = substr($jia, $b, $b - $c - 1);
$jia1 = md5($jia);
$d = strpos($jia1, "s");
$e = strpos($jia1, "0");
$ye1 = substr($jia1, $d, $d - $e - 3);
$jia3 = base64_encode($ye1);
$jia2 = md5($jia3);
$f = strpos($jia2, "W");
$g = strpos($jia2, "5");
$ye2 = substr($jia2, $f, $f - $g - 5);
$jiami0 = $ye1 . $ye2 . $ye;
$jiami = base64_encode($jiami0);

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>电视直播-<?php echo $aik["title"];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/seacher.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="<?php echo $aik["title"];?>-电视直播">
<meta name="description" content="<?php echo $aik["title"];?>-电视直播">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style>
#a1{
    padding: 0;
    margin: 0;
    width: 100%;
    height:800px;
    psotion: relative;
}
.mvul{width: 100%;margin: 0 auto;padding: 0;}
.mvul li{width: 48%;list-style: none;border: 1px solid #eee;padding: 9px;margin: 8px 0;border-radius: 2px;float:left; margin-right:2%;}
.mvul li:hover{background:#ff6651; color:#fff;}
</style>
</head>
<body class="page-template page-template-pages page-template-posts-film page-template-pagesposts-film-php page page-id-9">
<?php  include 'header.php';?>
<section class="container">
<iframe width="100%" height="800" src="http://www.yswhw.cn/live.php" frameborder=0 border=0 marginwidth=0 marginheight=0 scrolling='+s+'></iframe>
</section>
<?php  include 'footer.php';
?></body></html>