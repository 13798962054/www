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

        <div class="time">2018.11.02</div>
        <h3>国家卫生计生委办公厅关于印发三级综合医院医疗服务能力指南（2016年版）的通知</h3>
        <!-- JiaThis Button BEGIN -->
        <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
        <!-- JiaThis Button END -->
        <p>　<div class="rich_media_content " id="js_content" style="margin: 0px; padding: 0px; overflow: hidden; font-size: 17px; word-wrap: break-word; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px;">
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); outline: 0px; font-size: 16pt; font-family: 仿宋_GB2312; line-height: 1.5; text-align: right; box-sizing: border-box !important; word-wrap: break-word !important;">
            国卫办医函〔2016〕936号</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); outline: 0px; font-size: 16pt; font-family: 仿宋_GB2312; line-height: 1.5; box-sizing: border-box !important; word-wrap: break-word !important;">
            &nbsp;</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); outline: 0px; font-size: 16pt; font-family: 仿宋_GB2312; line-height: 1.5; box-sizing: border-box !important; word-wrap: break-word !important;">
                各省、自治区、直辖市卫生计生委，新疆生产建设兵团卫生局：&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
                　　为贯彻落实《国务院办公厅关于推进分级诊疗制度建设的指导意见》（国办发〔2015〕70号）等相关文件要求，进一步完善医疗服务体系，推动构建分级诊疗模式，我委组织制定了《三级综合医院医疗服务能力指南（2016年版）》（以下简称《指南》，可从国家卫生计生委网站医政医管栏目下载）。现印发给你们，请参照执行。&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
                　　各三级综合医院要按照《指南》要求，严格落实&ldquo;十三五&rdquo;卫生与健康规划、区域卫生规划和医疗机构设置规划，控制医院规模，重视医院内涵建设；明确三级综合医院功能定位，开展与自身功能定位相适应的诊疗服务，不断提升医疗服务能力与水平；充分发挥技术辐射和带动作用，通过对口帮扶、医联体等多种方式，促进医疗资源纵向整合，引导优质医疗资源下沉，提升基层医疗机构服务能力，推动构建分级诊疗模式。&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
                　　各省级卫生计生行政部门要定期总结工作经验，及时将工作进展情况报送我委医政医管局。&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
                　　联系人：医政医管局 罗庆华、胡瑞荣、王毅&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
                　　电话：010-68791885、68791887、68791886&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
                　　传真：010-68792963&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
            　　邮箱：bmaylzyc@163.com</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); outline: 0px; font-size: 16pt; font-family: 仿宋_GB2312; line-height: 1.5; box-sizing: border-box !important; word-wrap: break-word !important;">
            &nbsp;</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); outline: 0px; font-size: 16pt; font-family: 仿宋_GB2312; line-height: 1.5; text-align: right; box-sizing: border-box !important; word-wrap: break-word !important;">
                <br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
                国家卫生计生委办公厅&nbsp;<br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
            2016年8月29日</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); outline: 0px; font-size: 16pt; font-family: 仿宋_GB2312; line-height: 1.5; box-sizing: border-box !important; word-wrap: break-word !important;">
            &nbsp;</p>
            <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); outline: 0px; font-size: 16pt; font-family: 仿宋_GB2312; line-height: 1.5; box-sizing: border-box !important; word-wrap: break-word !important;">
                <br style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;" />
                　　附件：<span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; outline: 0px; font-size: 16pt;">三级综合医院服务能力指南（2016年版）</span></p>
                <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); outline: 0px; font-size: 16pt; font-family: 仿宋_GB2312; line-height: 1.5; box-sizing: border-box !important; word-wrap: break-word !important;">
                &nbsp;</p>
                <p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-size: 16px; line-height: 19.6923px; box-sizing: border-box !important; word-wrap: break-word !important;">
                来源：国家卫计委</p>


            </div>
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