<?php
# patch by fy, 20181028

?>﻿<?php
include "./inc/aik.config.php";
include "./inc/init.php";
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>追热剧-最新电视剧-好看电视剧-最新电视剧排行-<?php echo $aik["title"];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/tv.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="追热剧-最新电视剧-好看电视剧-最新电视剧排行">
<meta name="description" content="<?php echo $aik["title"];?>-追热剧-最新电视剧-好看电视剧-最新电视剧排行">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php
include "header.php";
?><section class="container"><div class="fenlei">
<div class="b-listfilter" style="padding: 0px;">

<dl class="b-listfilter-item js-listfilter" style="padding-left: 0px;height:auto;padding-right:0px;">
<dd class="item g-clear js-listfilter-content" style="margin: 0;">
<a href='?m=list.php?cat=all&pageno=1' target='_self'>全部</a>
<?php
include "list.php";
foreach ($mcat as $kcat => $vcat) {
	$flname = $mname[$kcat];
	$flid = "http://www.360kan.com/dianshi/list.php?cat=" . $vcat . "&pageno=1";
?><a href='?u=list.php?cat=<?php echo $vcat;?>&pageno=1' target='_self'><?php echo $flname;?></a><?php
}
?></dd>
</dl>
</div>
</div>
<div class="m-g">
<div class="b-listtab-main">
<div class="s-tab-main">
                    <ul class="list g-clear">
<?php
if (empty($_GET["pageno"])) {
	$html = "http://www.360kan.com/dianshi/list.php?cat=all&pageno=1";
	$cur_page = "1";
} else {
	$html = "http://www.360kan.com/dianshi/list.php?cat=all" . "&pageno=" . $_GET["pageno"];
	$cur_page = $_GET["pageno"];
}

$rurl = file_get_contents($html);
$vname = "#<span class=\"s1\">(.*?)</span>#";
$vlist = "#<a class=\"js-tongjic\" href=\"(.*?html)\">#";
$vstar = "# <p class=\"star\">(.*?)</p>#";
$vimg = "#<div class=\"cover.*playicon\">\r\n\\s*<img src=\"(.*?)\">#";
$bflist = "#<a data-daochu(.*?) href=\"(.*?)\" class=\"js-site-btn btn btn-play\"></a>#";
$jishu = "#<span class=\"hint\">(.*?)</span> #";
$pagetotal = "#data-pagetotal=\"([0-9]*)\"#";
preg_match_all($vname, $rurl, $xarr);
preg_match_all($vlist, $rurl, $xarr1);
preg_match_all($vstar, $rurl, $xarr2);
preg_match_all($vimg, $rurl, $xarr3);
preg_match_all($bflist, $rurl, $xarr4);
preg_match_all($jishu, $rurl, $xarr5);
preg_match_all($pagetotal, $rurl, $xarr6);
$xname = $xarr[1];
array_pop($xname);
$xlist = $xarr1[1];
$xstar = $xarr2[1];
$ximg = $xarr3[1];
$xbflist = $xarr4[1];
$xjishu = $xarr5[1];
$max_page = $xarr6[1][0];

foreach ($xname as $key => $xvau) {
	$ccb = "./play.php?play=" . $xlist[$key];
?><li class='item'>
    <a class='js-tongjic' href='<?php echo $ccb;?>' title='<?php echo $xvau;?>' target='_blank'>
<div class='cover g-playicon'>
<img src='<?php echo $ximg[$key];?>' alt='<?php echo $xvau;?>'/>
  <span class='hint'><?php echo $xjishu[$key];?></span> </div>
  <div class='detail'>
 <p class='title g-clear'>
 <span class='s1'><?php echo $xvau;?></span>
 <span class='s2'></span> </p>
 <p class='star'><?php echo $xstar[$key];?></p>
 </div>
 </a>
</li><?php
}
?>  </ul>
      </div>


    </div>
</div>

 
<?php 
$cur_page_int = intval($cur_page);
$pre_page_int = $cur_page_int-1;
$next_page_int = $cur_page_int+1;
$max_page = "25";
$max_page_int = intval($max_page);
$pre_page = strval($pre_page_int);
$next_page = strval($next_page_int);
?>

    <div class="tab-page js-tab-page">
	<div monitor-desc="分页" id="js-ew-page" data-block="js-ew-page" class="ew-page">
	<?php if($cur_page_int > 1){ ?> 
	<a href="?cat=all&pageno=<?php echo $pre_page?>" class="btn js-prev" target="_self">&lt;上一页</a>
	<a href="?cat=all&pageno=1" class="js-item" target="_self" data-n="1">1</a>
	<span>...</span>
	<?php }	?>
	<?php if($cur_page_int > 2){ ?> 
	<a href="?cat=all&pageno=<?php echo $pre_page?>" class="js-item" target="_self" data-n="<?php echo $pre_page?>"><?php echo $pre_page?></a>
	<?php }	?>
	<a href="?cat=all&pageno=<?php echo $cur_page?>" target="_self" class="on"><?php echo $cur_page?></a>
	<?php if($cur_page_int < $max_page_int-1){ ?>
	<a href="?cat=all&pageno=<?php echo $next_page?>" class="js-item" target="_self" data-n="<?php echo $next_page?>"><?php echo $next_page?></a>
	<span>...</span>
	<?php }	?>
	<?php if($cur_page_int < $max_page_int){ ?>
	<a href="?cat=all&pageno=<?php echo $max_page?>" class="js-item" target="_self" data-n="<?php echo $max_page?>"><?php echo $max_page?></a>
	<a href="?cat=all&pageno=<?php echo $next_page?>" class="btn js-next" target="_self">下一页&gt;</a>
	<?php }	?>
	</div></div>


<div class="asst asst-list-footer"><?php echo $aik["tv_ad"];?></div></section>
<?php
include "footer.php";
?></body></html>