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

    <div class="time">2019.01.17</div>
    <h3>国家卫生计生委办公厅关于实施有关病种临床路径的通知</h3>
          <!-- JiaThis Button BEGIN -->
          <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
          <!-- JiaThis Button END -->
          <p>　<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 20.48px; box-sizing: border-box !important; word-wrap: break-word !important;">
    国卫办医函〔2016〕1315号</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 20.48px; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; outline: 0px; font-family: 仿宋_GB2312; color: rgb(72, 72, 72); line-height: 1.5; font-size: 16pt; box-sizing: border-box !important; word-wrap: break-word !important;">
    各省、自治区、直辖市卫生计生委，新疆生产建设兵团卫生局：&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　为进一步推进深化医药卫生体制改革，规范诊疗行为，保障医疗质量与安全，我委委托中华医学会组织专家制（修）订了一批临床路径；同时，对此前印发的有关临床路径进行了整理。现将上述共1010个临床路径一并在中华医学会网站（网址http://www.cma.org.cn/kjps/jsgf/）发布，供卫生计生行政部门和医疗机构参考使用。请各地卫生计生行政部门指导医疗机构结合实际，细化分支路径并组织实施。同时，要落实以下要求，进一步提高临床路径管理水平和实施效果。&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　<span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; outline: 0px; font-family: 黑体;">一、推进临床路径管理与医疗质控和绩效考核相结合&nbsp;</span><br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　要充分发挥临床路径作为医疗质量控制与管理工具的作用，实施医疗服务全程管理，同时将临床路径管理有关要求纳入绩效考核管理，保障医疗质量与安全。&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　<span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; outline: 0px; font-family: 黑体;">二、推进临床路径管理与医疗服务费用调整相结合&nbsp;</span><br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　要注重研究临床路径实施后医疗服务的收费情况，科学测算相关疾病医疗费用，合理控制医疗费用，进一步减轻群众看病就医负担。&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　<span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; outline: 0px; font-family: 黑体;">三、推进临床路径管理与支付方式改革相结合&nbsp;</span><br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　通过临床路径合理测算单病种付费、按疾病相关诊断组付费（即DRGs付费）等支付方式的支付标准，有效推动支付方式改革。&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　<span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; outline: 0px; font-family: 黑体;">四、推进临床路径管理与医疗机构信息化建设相结合&nbsp;</span><br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　要提高临床路径实施与管理的信息化水平，提高临床路径实施效率，加强对临床路径的实时管理和全面统计分析。&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    　　我委将适时组织对各地临床路径管理工作情况进行督导调研。&nbsp;</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; widows: 1; outline: 0px; font-family: 仿宋_GB2312; color: rgb(72, 72, 72); text-align: right; line-height: 1.5; font-size: 16pt; box-sizing: border-box !important; word-wrap: break-word !important;">
    <br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    国家卫生计生委办公厅&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
    2016年12月2日</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 20.48px; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 20.48px; box-sizing: border-box !important; word-wrap: break-word !important;">
    来源：<span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; line-height: 1.6;">国家卫生计生委官网</span></p>
<div>
    &nbsp;</div>
 </p>
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