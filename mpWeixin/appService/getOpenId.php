<?php
//声明CODE，获取小程序传过来的CODE
$code = $_GET["code"];
//配置appid
$appid = "wx5bb5def23de67228";
//配置appscret
$secret = "a9f5fdffb02b1e893efd02b9ae8e82d7";
//api接口
$api = "https://api.weixin.qq.com/sns/jscode2session?appid={$appid}&secret={$secret}&js_code={$code}&grant_type=authorization_code";
//获取GET请求
function httpGet($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
    curl_setopt($curl, CURLOPT_URL, $url);
    $res = curl_exec($curl);
    curl_close($curl);
    return $res;
}
//发送
$str = httpGet($api);
echo $str;
?>