<?php
/**
 * Title: 爱客影院系统自动更新站外链接程序V2.2
 * User: King
 * Date: 2018/3/9
 * Time: 20:53
 * Help: http://zeink.cn/?p=167
 */


//任意 站外1的链接填入 这里用默认的即可


$king_zwurl = "http://tiaozhuan.dbuzn.cn/";


header('Content-Type: text/html; charset=utf-8');
session_start();
error_reporting(0);
include('../inc/aik.config.php');
define('SYSPATH', $aik['path']);

function redirect($url, $rule = 'https://zeink.cn/')
{
    $header = get_headers($url, 1);
    //print_r($header);
    if (strpos($header[0], '301') !== false || strpos($header[0], '302') !== false) {
        // 无限检测最新跳转
        if (array_key_exists('Set-Cookie', $header)) {
            $cookies = $header['Set-Cookie'];
            foreach ($cookies as $k => $v) {
                header('Set-Cookie: ' . $v);
            }
        }
        if (array_key_exists('Location', $header)) {
            $url = $header['Location'];
            if (is_array($url)) {
                foreach ($url as $k => $v) {
                    if (true) {
                        // 跳转地址与$rule匹配, 返回该地址
                        return $v;
                    } else {
                        // 不匹配则访问一次中转网址
                        file_get_contents($v);
                    }
                }
            } else {
                if (true) {
                    // 跳转地址与$rule匹配, 返回该地址
                    return $url;
                }
            }
        }
    }
    return $url;
}


echo "New URL：";
//输出跳转到的网址
echo redirect($king_zwurl);


$data = $aik;
$data['zhanwai'] = redirect($king_zwurl);
echo "<br>";
echo "<br>";
echo "<br>";
$aik = $data;
if (file_put_contents('../inc/aik.config.php', "<?php\n \$aik =  " . var_export($data, true) . ";\n?>")) {
 
    echo "The New URL has been set up!\r\n链接已经自动更新成功！！";
} else {
    echo "The New URL Setting failure!\r\n噢！好像出了点问题！！";
}

echo "<br>";
echo "<br>";
echo "<br>";
//1.初始化，创建一个新cURL资源
$ch = curl_init();
$clink=$aik['pcdomain'];
echo "当前域名为：".$clink;
echo "<br>";
$cblink="$clink/cron_index.php";
//2.设置URL和相应的选项
 
curl_setopt($ch, CURLOPT_URL, "$cblink");
 
curl_setopt($ch, CURLOPT_HEADER, 0);
 
//3.抓取URL并把它传递给浏览器
 
curl_exec($ch);
 
//4.关闭cURL资源，并且释放系统资源
 
curl_close($ch);
 
if ( $ch ){
    return true;
}else{
    return false;
}

?>