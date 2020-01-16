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
          <h3>国家卫计委推荐的这16项检验关键技术标准</h3>
          <!-- JiaThis Button BEGIN -->
          <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
          <!-- JiaThis Button END -->
          <p>　</p><p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
    10月18日，国家卫生计生委网站发布了《三级综合医院医疗服务能力指南（2016年版）》，其中对检验关键技术做了如下要求：</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; color: rgb(171, 25, 66);"><strong style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">（1）基本标准。</strong></span>应当具备开展以下关键技术的服务能力</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<table cellpadding="0" cellspacing="0" data-sort="sortDisabled" interlaced="enabled" style="margin: 0px 0px 10px; padding: 0px; border-collapse: collapse; width: 592px; max-width: 100%; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;" width="669">
    <colgroup style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">
        <col style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; width: 72px;" width="72">
        <col style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; width: 316px;" width="316">
    </colgroup>
    <tbody style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                序号</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: solid solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="582">
                检验项目</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                1</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="625">
                免疫比浊</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                2</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="623">
                电极法</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                3</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="614">
                化学发光/电化学发光</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                4</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="608">
                比浊法细菌药敏技术</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                5</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="604">
                病原体核酸的分子生物学检测技术</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                6</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="601">
                比色法细菌鉴定技术</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                7</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="599">
                分光光度法</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                8</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="598">
                免疫荧光法</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="65">
                9</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="597">
                酶联免疫吸附法</td>
        </tr>
    </tbody>
</table>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; color: rgb(171, 25, 66);"><strong style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">（2）推荐标准。</strong></span>在应当开展关键技术的基础上，可以具有开展以下关键技术的服务能力，如：</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<table cellpadding="0" cellspacing="0" data-sort="sortDisabled" interlaced="enabled" style="margin: 0px 0px 10px; padding: 0px; border-collapse: collapse; width: 592px; max-width: 100%; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;" width="669">
    <colgroup style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">
        <col style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; width: 72px;" width="72">
        <col style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; width: 381px;" width="381">
    </colgroup>
    <tbody style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                序号</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: solid solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="607">
                检验项目</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                1</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="635">
                免疫比浊法</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                2</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="627">
                显色法细菌培养技术</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                3</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="618">
                琼脂糖凝胶电泳</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                4</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="611">
                尿流式细胞检测技术</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                5</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="606">
                荧光实时监测技术</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                6</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="603">
                光电比色法</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                7</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="601">
                高效液相离子交换层析</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                8</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="599">
                双抗体夹心荧光检测技术</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                9</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="598">
                动态比浊法</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                10</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="597">
                监测院内感染暴发流行的脉冲场电</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                11</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="597">
                免疫印迹法</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                12</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="597">
                免疫双扩散法</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                13</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="597">
                流式细胞分析法</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                14</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="597">
                多元微阵列免疫微珠法</td>
        </tr>
        <tr class="ue-table-interlace-color-double" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(247, 250, 255);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                15</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="597">
                基质辅助激光解吸电离飞行时间质谱</td>
        </tr>
        <tr class="ue-table-interlace-color-single" height="27" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; height: 27px; background-color: rgb(252, 252, 252);">
            <td height="27" style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="72">
                16</td>
            <td style="margin: 0px; padding: 5px 10px; word-break: break-all; border-style: none solid solid none; border-color: rgb(0, 122, 170); max-width: 100%; word-wrap: break-word !important; box-sizing: border-box !important;" width="597">
                电感耦合等离子体质谱</td>
        </tr>
    </tbody>
</table>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-size: 16px; line-height: 20.48px; box-sizing: border-box !important; word-wrap: break-word !important;">
    来源：检验医学网</p>
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