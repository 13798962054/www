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

        <div class="time">2018.12.04</div>
        <h3>体外诊断试剂质量控制标准研究</h3>
        <!-- JiaThis Button BEGIN -->
        <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
        <!-- JiaThis Button END -->
        <p>　<h2 class="rich_media_title" id="activity-name" style="margin: 0px 0px 14px; padding: 0px; font-weight: 400; font-size: 22px; line-height: 1.4; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; widows: 1;">
        &nbsp;</h2>
        <div class="rich_media_content " id="js_content" style="margin: 0px; padding: 0px; overflow: hidden; color: rgb(51, 51, 51); font-size: 17px; word-wrap: break-word; text-align: justify; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; widows: 1;">
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
                <img alt="" src="/uploads/allimg/181204/1-1Q20415304S38.jpg" style="width: 800px; height: 416px;" />
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
                &nbsp;
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
                <img alt="" src="/uploads/allimg/181204/1-1Q20415310b91.jpg" style="width: 810px; height: 656px;" />
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
                <img alt="" src="/uploads/allimg/181204/1-1Q204153152942.jpg" style="width: 800px; height: 294px;" />
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
            &nbsp;</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
                <img alt="" src="/uploads/allimg/181204/1-1Q20415320H47.jpg" style="width: 800px; height: 427px;" />
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
                <img alt="" src="/uploads/allimg/181204/1-1Q20415321LI.jpg" style="width: 800px; height: 307px;" />
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
                <img alt="" src="/uploads/allimg/181204/1-1Q20415322IC.jpg" style="width: 800px; height: 385px;" />
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
                <img alt="" src="/uploads/allimg/181204/1-1Q204153240c3.jpg" style="width: 800px; height: 384px;" />
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
            &nbsp;</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
            &nbsp;</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
                <img alt="" src="/uploads/allimg/181204/1-1Q2041532512E.jpg" style="width: 800px; height: 415px;" />
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important; text-align: center;">
                <img alt="" src="/uploads/allimg/181204/1-1Q20415330G92.jpg" style="width: 800px; height: 306px;" />
            </p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
            &nbsp;</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
                <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; font-size: 14px;">文章来源：CMEF</span></p>
                <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
                    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; font-size: 14px;"><strong style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">文献来源</strong>：中国医学装备</span></p>
                    <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; font-size: 14px;"><strong style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">作者</strong>：郭世富 &nbsp;黄 颖 &nbsp;母瑞红 &nbsp;李静莉</span>
                    </p>
                    <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: -apple-system-font, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; font-size: 14px;"><strong style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">作者单位</strong>：<span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; line-height: 1.6;">国家食品药品监督管理总局医疗器械标准管理中心、中国食品药品检定研究院。</span></span>
                    </p>
                </div>
                <br />
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