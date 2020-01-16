<!DOCTYPE html>
<html>
<head>
    <title>维润赛润</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../layui/css/layui.css">
    <link rel="icon" href="../../img/logo.ico">
    <link rel="SHORTCUT ICON" href="../../img/logo.ico">
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../layui/layui.js"></script>
    <script src="../../js/vue2.6.10.js"></script>
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
</head>
<body>
<div id="header">
    <div id="metabar">
        <div class="row">
            <div class="col-8">
                <div class="metabar-links">
                    <a href="../../Diagnostics" class="sd" data-title="赛润诊断">
                        <span>赛润诊断</span>
                        <div class="popup">在IVD领域有40多年的经验</div>
                    </a>
                    <a href="../../Immunologics" class="si" data-title="赛润诊断">
                        <span>赛润生物原材料</span>
                        <div class="popup">高质量的诊断试剂及整体解决方案</div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="top">
        <div class="logo">
            <a href="/"><img src="../../img/logo.png" alt=""></a>
        </div>
        <div class="menu">
            <li class="products-item">
                <a href="../../about.php">关于我们</a>
            </li>
            <li class="products-item">
                <a>产品</a>
                <!-- 产品 -->
                <div class="products">
                    <div class="rank">
                        <div class="row">
                            <ol class="title" onclick="document.location.href='../../Diagnostics'">赛润诊断</ol>
                            <ol onclick="document.location.href='../../Diagnostics/product-list3.php'">产品清单</ol>
                            <ol onclick="document.location.href='../../Diagnostics/products.php'">ELISA试剂盒</ol>
                            <ol onclick="document.location.href='../../Diagnostics/products.php'">质控品</ol>
                        </div>
                    </div>
                    <div class="rank">
                        <div class="row">
                            <ol class="title" onclick="document.location.href='../../Immunologics/'">赛润生物原材料</ol>
                            <ol onclick="document.location.href='../../Immunologics/product-list1.php'">产品清单</ol>
                            <ol onclick="document.location.href='../../Immunologics/products.php'">抗原</ol>
                            <ol onclick="document.location.href='../../Immunologics/products.php'">人源化单抗</ol>
                            <ol onclick="document.location.href='../../Immunologics/products.php'">原辅料</ol>
                            <ol onclick="document.location.href='../../Immunologics/services.php'">技术服务</ol>
                        </div>
                    </div>

                </div>
            </li>
            <li class="services-item">
                <a href="../../contact.php">联系我们</a>
                <!-- 产品 -->
                <div class="services">
                    <div class="rank">
                        <div class="row">
                            <ol class="title" onclick="self.location.href = '../../contact.php'" style="margin-top: 38px">
                                联系方式</a></ol>
                        </div>
                    </div>
                    <div class="rank">
                        <div class="row">
                            <ol class="title" onclick="self.location.href = '../../message.php'" style="margin-top: 38px">
                                在线留言
                            </ol>
                        </div>
                    </div>
                    <div class="rank">
                        <div class="row">
                            <ol class="title" onclick="self.location.href = '../../hiring.php'" style="margin-top: 38px">
                                招贤纳士
                            </ol>
                        </div>
                    </div>
                </div>
            </li>

        </div>

    </div>
</div>
<!--填充头部的空白位置-->
<div id="header-fixed"></div>
<!--搜索框-->
<form action="products.php" id="search-box">
    <div class="container">
        <div class="header-input">
            <input type="text" placeholder="请输入要搜索的内容" name="keyword" autocomplete="off" id="search-input">
            <input type="hidden" name="range" value="all" id="search-range">
            <div class="picker">全部</div>
            <ul class="picker-list">
                <li>全部</li>
                <li data-logo="demo.png">抗原</li>
                <li>抗体</li>
                <li>原辅料</li>
            </ul>
            <div class="hot-list"></div>
        </div>
        <div class="searchButton"></div>
    </div>
</form>
<!-- 服务 -->
<div id="header-service">
</div>
<script src="../footer-header/js/header.js"></script>

<!--新闻内容方面-->
<div id="news">

    <div class="time">2018.09.03</div>
    <div class="newsd">
          <h3>全国医学院校检验医学及相关专业硕士招生情况</h3>
          <!-- JiaThis Button BEGIN -->
          <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
          <!-- JiaThis Button END -->
          <p>　</p><p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; text-indent: 2em; box-sizing: border-box !important; word-wrap: break-word !important;">
    目前，国内开设医学检验技术专业的院校共有101所，中华检验医学网特整理了部分院校检验医学及相关专业硕士研究生招生情况，现发布第二批，详情请见下图表。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; text-indent: 2em; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; text-indent: 2em; box-sizing: border-box !important; word-wrap: break-word !important;">
    说明：全国医学院校检验医学及相关专业硕士招生情况简表（一）（点击本链接查看）</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; text-indent: 2em; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; text-align: center; box-sizing: border-box !important; word-wrap: break-word !important;">
    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; color: rgb(0, 112, 192);">（资料来源于各高校网站，如有纰漏请指正）</span></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; text-align: center; box-sizing: border-box !important; word-wrap: break-word !important;">
    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; color: rgb(255, 0, 0);">（点击图片可放大查看）</span></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ3101ZE92.jpg" style="width: 580px; height: 698px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ3101920158.jpg" style="width: 580px; height: 526px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ3101933137.jpg" style="width: 580px; height: 645px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ3102001260.jpg" style="width: 580px; height: 985px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ3102022a1.jpg" style="width: 580px; height: 219px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ310203L52.jpg" style="width: 580px; height: 627px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ31020511D.jpg" style="width: 580px; height: 496px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ3102103949.jpg" style="width: 580px; height: 490px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ3102116222.jpg" style="width: 580px; height: 517px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ3102142323.jpg" style="width: 580px; height: 837px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
    <img alt="" src="/uploads/allimg/180903/1-1PZ310215B16.jpg" style="width: 580px; height: 382px;"></p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; text-indent: 2em; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; text-indent: 2em; box-sizing: border-box !important; word-wrap: break-word !important;">
    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; line-height: 25.6px;">来源：中华检验医学网</span></p>
<div>
    &nbsp;</div>
 <p></p>
        </div>
</div>























<div id="footer" style="height: 295px">
    <div class="item">
        <ul>
            <li class="title"><img src="../../img/logo.png" height="50px"></li>
            <li><a href="../..//Diagnostics">赛润诊断主页</a></li>
            <li><a href="/Immunologics">赛润生物原材料主页</a></li>
        </ul>
    </div>
    <div class="item">
        <ul>
            <li class="title">关于我们</li>
            <li><a href="../../about.php#about1">公司简介</a></li>
            <li><a href="../../about.php#about2">发展历程</a></li>
            <li><a href="../../about.php#about3">企业文化</a></li>
            <li><a href="../../about.php#about4">产品品质</a></li>
        </ul>
    </div>
    <div class="item">
        <ul>
            <li class="title">联系我们</li>
            <li><a href="../../contact.php">联系方式</a></li>
            <li><a href="../../message.php">在线留言</a></li>
            <li><a href="../../hiring.php">招贤纳士</a></li>
        </ul>
    </div>
    <div class="item">
        <ul>
            <li class="title">友情链接</li>
            <!--            <li><a href="https://www.virion-serion.de">virion\serion</a></li>-->
            <li><a href="http://www.klonnewbio.com/">科隆生物</a></li>
            <li><a href="http://www.csmedlab.com/">中南检验</a></li>
            <li id="mpweixin">
                微信公众号
                <img src="../../img/mp.weixin.jpg" alt="">
            </li>
            <li><a href="https://www.who.int/" target="_blank">世界卫生组织</a></li>
            <li><a href="http://www.chinacdc.cn/" target="_blank">中国疾病预防控制中心</a></li>
            <li><a href="https://www.ecdc.europa.eu/" target="_blank">欧盟疾病预防与控制中心</a></li>
            <li><a href="https://www.cdc.gov/" target="_blank">美国疾病控制与预防中心</a></li>
            <li><a href="https://iivd.net/portal.php" target="_blank">小桔灯</a></li>
        </ul>
    </div>
</div>
<script src="../../js/general.js"></script>
</body>
</html>