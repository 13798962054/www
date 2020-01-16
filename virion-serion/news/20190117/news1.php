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
    <h3>8种人类疱疹病毒，你都了解吗？</h3>
          <!-- JiaThis Button BEGIN -->
          <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
          <!-- JiaThis Button END -->
          <p>　<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    在性病医院临床上将与人类有关的疱疹病毒称为人类疱疹病毒。疱疹病毒主要侵犯外胚层来源的组织，包括皮肤、粘膜和神经组织 。感染部位和引起的疾病多种多样，并有潜伏感染的趋向，威胁人类健康。</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    人类疱疹病毒共分为8型，下面小编就为您逐一介绍。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="33" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <p style="margin: 8px 0px 0px; padding: 0px; max-width: 100%; clear: both; min-height: 32px; font-weight: bold; line-height: 28px; color: rgb(239, 112, 96); border-bottom: 2px solid rgb(239, 112, 96); border-top-color: rgb(239, 112, 96); border-right-color: rgb(239, 112, 96); border-left-color: rgb(239, 112, 96); box-sizing: border-box !important; word-wrap: break-word !important;">
        <span data-original-title="" placeholder="1" style="margin: 0px 8px 0px 0px; padding: 4px 10px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; border-radius: 80% 100% 90% 20%; color: rgb(255, 255, 255); display: block; float: left; line-height: 20px; background-color: rgb(239, 112, 96);" title="">1</span><strong data-brushtype="text" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">单纯疱疹病毒(HSV)</strong></p>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<h2 style="margin: 18px 0px; padding: 10px 0px; font-size: 18px; max-width: 100%; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; line-height: 1.1; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(234, 234, 234); box-sizing: border-box !important; word-wrap: break-word !important;">
    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; font-size: 15px;">HSV在感染宿主后，常在神经细胞中建立潜伏感染，激活后又会出现无症状的排毒，在人群中维持传播链，周而复始的循环。本病有自限性，约1-2周即可自愈。治疗的目的是防止下次复发。</span></h2>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="2185" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <section style="margin: 0px 0px 0px 27px; padding: 5px 10px 0px 35px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: inherit; border-left-width: 2px; border-left-style: dotted; border-left-color: rgb(228, 228, 228);">
        <section data-original-title="" style="margin: 23px 0px 0px -53px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; width: 32px; height: 32px; color: rgb(255, 255, 255); text-align: center; line-height: 32px; border-radius: 16px; background: rgb(157, 180, 194);" title="">
            1</section>
        <section style="margin: -30px 0px 0px; padding: 0px 0px 10px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: inherit;">
            单纯疱疹病毒1型(人类疱疹病毒1型)</section>
    </section>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    主要引起唇部及口鼻周围的疱疹，偶可引起眼部决疹。不常发生在生殖器附近但可能感染皮肤的伤口，如在手指称为疱疹性脓指症。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="2185" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <section style="margin: 0px 0px 0px 27px; padding: 5px 10px 0px 35px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: inherit; border-left-width: 2px; border-left-style: dotted; border-left-color: rgb(228, 228, 228);">
        <section data-original-title="" style="margin: 23px 0px 0px -53px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; width: 32px; height: 32px; color: rgb(255, 255, 255); text-align: center; line-height: 32px; border-radius: 16px; background: rgb(157, 180, 194);" title="">
            2</section>
        <section style="margin: -30px 0px 0px; padding: 0px 0px 10px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: inherit;">
            单纯疱疹病毒2型(人类疱疹病毒2型)</section>
    </section>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    又称为生殖器疱疹，主要引起生殖器官部位的疱疹，并可经性接触传染(见性病)，大部分是性接触传播。病灶部位在臀部、阴茎、阴道、子宫颈等生殖器附近，偶尔可见发生于其他部位但经常在腹部以下，可能会导致尿尿时灼热疼痛感，有些甚至排尿困难。有些病患有发烧、肌肉酸痛。</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    单纯疱疹病毒感染目前无疫苗可预防。主要是对症治疗，严重或经常复发单纯疱疹感染可考虑口服抗病毒剂，并防止继发感染，减少复发。。较轻微皮肤感染外用药剂可改善症状缩短病程。</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    一些调查研究表明HSV&mdash;1和HSV&mdash;2可能分别与唇癌、外阴癌及子宫颈癌有关。但还需进一步的深入研究。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="33" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <p style="margin: 8px 0px 0px; padding: 0px; max-width: 100%; clear: both; min-height: 32px; font-weight: bold; line-height: 28px; color: rgb(239, 112, 96); border-bottom: 2px solid rgb(239, 112, 96); border-top-color: rgb(239, 112, 96); border-right-color: rgb(239, 112, 96); border-left-color: rgb(239, 112, 96); box-sizing: border-box !important; word-wrap: break-word !important;">
        <span data-original-title="" placeholder="1" style="margin: 0px 8px 0px 0px; padding: 4px 10px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; border-radius: 80% 100% 90% 20%; color: rgb(255, 255, 255); display: block; float: left; line-height: 20px; background-color: rgb(239, 112, 96);" title="">2</span><strong data-brushtype="text" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">水痘带状疱疹病毒(人类疱疹病毒3型，HHV-3)</strong></p>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<h2 style="margin: 18px 0px; padding: 10px 0px; font-size: 18px; max-width: 100%; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; line-height: 1.1; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(234, 234, 234); box-sizing: border-box !important; word-wrap: break-word !important;">
    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; font-size: 15px;">该病毒引起两种传染病，水痘或带状疱疹。</span></h2>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="85640" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; float: left; color: rgb(255, 255, 255); border-color: rgb(226, 121, 97); background-color: rgb(226, 121, 97);">
        <section style="margin: 0px; padding: 5px 8px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; vertical-align: middle; color: inherit;">
            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: inherit;">
                <strong style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; color: inherit;">1</strong></section>
        </section>
    </section>
    <section style="margin: 8px 0px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border-left-width: 8px; border-left-style: solid; border-left-color: rgb(226, 121, 97); border-right-width: 0px; border-right-color: rgb(226, 121, 97); display: inline-block; float: left; color: inherit; border-bottom-width: 8px !important; border-bottom-style: solid !important; border-bottom-color: transparent !important; border-top-width: 8px !important; border-top-style: solid !important; border-top-color: transparent !important;">
        &nbsp;</section>
    <section style="margin: 0px; padding: 2px 0px 0px 40px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; font-size: 18px;">
        <span data-brushtype="text" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; color: inherit;">水痘</span></section>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    HHV-3初次感染时，常引发儿童水痘，特点为全身性出现斑丘疹，而后迅速发展为水疱、脓疱，最后结痂。恢复健康儿童大多数体内已产生免役力，清除了病毒。但也有少数水痘恢复者(约20%)未能将体内病毒清除尽，病毒潜伏在脊髓后根神经节的神经元中或三叉神经节的神经元中。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="85640" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; float: left; color: rgb(255, 255, 255); border-color: rgb(226, 121, 97); background-color: rgb(226, 121, 97);">
        <section style="margin: 0px; padding: 5px 8px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; vertical-align: middle; color: inherit;">
            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: inherit;">
                <strong style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; color: inherit;">2</strong></section>
        </section>
    </section>
    <section style="margin: 8px 0px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border-left-width: 8px; border-left-style: solid; border-left-color: rgb(226, 121, 97); border-right-width: 0px; border-right-color: rgb(226, 121, 97); display: inline-block; float: left; color: inherit; border-bottom-width: 8px !important; border-bottom-style: solid !important; border-bottom-color: transparent !important; border-top-width: 8px !important; border-top-style: solid !important; border-top-color: transparent !important;">
        &nbsp;</section>
    <section style="margin: 0px; padding: 2px 0px 0px 40px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; font-size: 18px;">
        <span data-brushtype="text" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; color: inherit;">带状疱疹</span></section>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    当机体免疫力低下时，潜伏的HHV-3病毒会重新活跃，引起沿周缘神经分布区出现条簇状皮肤疱疹，伴随神经痛，这就是&ldquo;带状疱疹&rdquo;，中医称为缠腰火丹。带状疱疹皮损常沿某一周围神经单侧分布，一般不超过体表正中线。多见于肋间神经或三叉神经第一支分布区，亦可见于胸、腹、腰、四肢、耳部等皮肤及鼻、口腔等处粘膜。其侵及三叉神经眶上支者，疼痛剧烈，并可累及角膜和眼球，甚至可引起全眼炎，招致失明。亦可引起脑炎、脑膜炎。神经痛是带状疱疹病的特征之一。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="33" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <p style="margin: 8px 0px 0px; padding: 0px; max-width: 100%; clear: both; min-height: 32px; font-weight: bold; line-height: 28px; color: rgb(239, 112, 96); border-bottom: 2px solid rgb(239, 112, 96); border-top-color: rgb(239, 112, 96); border-right-color: rgb(239, 112, 96); border-left-color: rgb(239, 112, 96); box-sizing: border-box !important; word-wrap: break-word !important;">
        <span data-original-title="" placeholder="1" style="margin: 0px 8px 0px 0px; padding: 4px 10px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; border-radius: 80% 100% 90% 20%; color: rgb(255, 255, 255); display: block; float: left; line-height: 20px; background-color: rgb(239, 112, 96);" title="">3</span><strong data-brushtype="text" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">EB病毒(人类疱疹病毒4型)</strong></p>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    由95%以上的成人所携带，是传染性单核细胞增多症的病原体，还与鼻咽癌、儿童淋巴瘤的发生有密切关系，被列为可能致癌的人类肿瘤病毒之一。EB病毒主要是通过唾液传播，因此应养成良好的个人卫生习惯。预防还可以接种EB病毒疫苗。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="33" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <p style="margin: 8px 0px 0px; padding: 0px; max-width: 100%; clear: both; min-height: 32px; font-weight: bold; line-height: 28px; color: rgb(239, 112, 96); border-bottom: 2px solid rgb(239, 112, 96); border-top-color: rgb(239, 112, 96); border-right-color: rgb(239, 112, 96); border-left-color: rgb(239, 112, 96); box-sizing: border-box !important; word-wrap: break-word !important;">
        <span data-original-title="" placeholder="1" style="margin: 0px 8px 0px 0px; padding: 4px 10px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; border-radius: 80% 100% 90% 20%; color: rgb(255, 255, 255); display: block; float: left; line-height: 20px; background-color: rgb(239, 112, 96);" title="">4</span><strong data-brushtype="text" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">巨细胞病毒(人类疱疹病毒5型，HCMV)</strong></p>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    HCMV在人群中感染非常普遍，但大多数呈临床不显性感染，多数人在儿童或青少年期受HCMV感染获得免疫。在孕妇中，原发或新的HCMV感染均可引起新生儿宫内感染或围产期感染，可导致胎儿畸形，智力低下或发育迟缓等，严重者可引起全身性感染综合症，称为巨细胞包涵体病。</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    巨细胞病的治疗主要包括化学药物治疗、生物制剂治疗和对症治疗。预防可用药物预防和免疫预防等。目前没有疫苗可用于HCMV感染的预防。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="33" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <p style="margin: 8px 0px 0px; padding: 0px; max-width: 100%; clear: both; min-height: 32px; font-weight: bold; line-height: 28px; color: rgb(239, 112, 96); border-bottom: 2px solid rgb(239, 112, 96); border-top-color: rgb(239, 112, 96); border-right-color: rgb(239, 112, 96); border-left-color: rgb(239, 112, 96); box-sizing: border-box !important; word-wrap: break-word !important;">
        <span data-original-title="" placeholder="1" style="margin: 0px 8px 0px 0px; padding: 4px 10px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; border-radius: 80% 100% 90% 20%; color: rgb(255, 255, 255); display: block; float: left; line-height: 20px; background-color: rgb(239, 112, 96);" title="">5</span><strong data-brushtype="text" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">人类疱疹病毒6型(HHV-6)</strong></p>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    大多数成人唾液中均可检出少量该病毒，但因其复制数量少且过程缓慢，故除免疫低下(如先天性免疫缺陷、艾滋病、长期服用免疫抑制剂等)外，绝大多数人感染HHV-6后终身都不会产生明显症状，即终身为HHV-6隐性携带者。</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    少数婴幼儿因免疫低下，感染可引起幼儿急疹(又称婴儿玫瑰疹)。临床特征为急性发热、上呼吸道症状和皮疹，病程多为3～5天，预后良好，大多无后遗症。</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    目前各国对HHV-6感染尚无有效的特异性防治措施。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="33" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <p style="margin: 8px 0px 0px; padding: 0px; max-width: 100%; clear: both; min-height: 32px; font-weight: bold; line-height: 28px; color: rgb(239, 112, 96); border-bottom: 2px solid rgb(239, 112, 96); border-top-color: rgb(239, 112, 96); border-right-color: rgb(239, 112, 96); border-left-color: rgb(239, 112, 96); box-sizing: border-box !important; word-wrap: break-word !important;">
        <span data-original-title="" placeholder="1" style="margin: 0px 8px 0px 0px; padding: 4px 10px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; border-radius: 80% 100% 90% 20%; color: rgb(255, 255, 255); display: block; float: left; line-height: 20px; background-color: rgb(239, 112, 96);" title="">6</span><strong data-brushtype="text" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">人类疱疹病毒7型(HHV-7)</strong></p>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    它不同于所有已知的人类疱疹病毒，尽管其与HHV-6的同源性很小，但与其他疱疹病毒相比两者的关系最为密切。血清流行病学调查表明，HHV-7是一种普遍存在的人类疱疹病毒，HHV-7主要潜伏在外周血单核细胞和唾液腺中，人与人的密切接触可传播该病毒，唾液传播是其主要途径。该病毒的分离培养条件与HHV-6相似。</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    与HHV-6一样，尚无有效的预防和治疗措施。</p>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<section data-id="33" data-tools="135编辑器" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; color: rgb(62, 62, 62); font-family: 微软雅黑; font-size: 16px; line-height: 20.48px; word-wrap: break-word !important;">
    <p style="margin: 8px 0px 0px; padding: 0px; max-width: 100%; clear: both; min-height: 32px; font-weight: bold; line-height: 28px; color: rgb(239, 112, 96); border-bottom: 2px solid rgb(239, 112, 96); border-top-color: rgb(239, 112, 96); border-right-color: rgb(239, 112, 96); border-left-color: rgb(239, 112, 96); box-sizing: border-box !important; word-wrap: break-word !important;">
        <span data-original-title="" placeholder="1" style="margin: 0px 8px 0px 0px; padding: 4px 10px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; border-radius: 80% 100% 90% 20%; color: rgb(255, 255, 255); display: block; float: left; line-height: 20px; background-color: rgb(239, 112, 96);" title="">7</span><strong data-brushtype="text" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">人类疱疹病毒8型(HHV-8)</strong></p>
</section>
<p style="margin: 0px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 17px; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; line-height: 27.2px; text-align: justify; widows: 1; box-sizing: border-box !important; word-wrap: break-word !important;">
    &nbsp;</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    HHV-8主要存在于艾滋病卡波济肉瘤组织和艾滋病患者淋巴瘤组织中。HHV-8与卡波济肉瘤的发生、血管淋巴细胞增生性疾病及一些增生性皮肤疾病的发病有关。可通过性交传播。</p>
<p style="margin: 0px 0px 18px; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-variant-numeric: normal; font-variant-east-asian: normal; letter-spacing: 0.544px; text-align: justify; widows: 1; font-family: 微软雅黑; color: rgb(85, 85, 85); font-size: 15px; box-sizing: border-box !important; word-wrap: break-word !important;">
    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; font-weight: 700; font-size: 12px; color: rgb(178, 178, 178);">来源：医学论坛网</span></p>
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