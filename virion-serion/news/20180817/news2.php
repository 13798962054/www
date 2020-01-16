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

    <div class="time">2018.08.17</div>
    <div class="newsd">
          <h3>百日咳疫苗及免疫保护水平检测</h3>
          <!-- JiaThis Button BEGIN -->
          <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
          <!-- JiaThis Button END -->
          <p>　</p><div style="text-align: center;">
    作者：温欣欣 周鹏</div>
<div>
    <strong>如何预防百日咳？</strong><br>
    通过使用质量可靠的百日咳疫苗对婴幼儿开展免疫接种，在全球范围内成功预<br>
    防了婴幼儿中出现严重的百日咳病例。<br>
    &nbsp;<br>
    <strong>百日咳疫苗都有哪些？</strong><br>
    主要分两类：<br>
    1、 灭活百日咳鲍特菌制成的全细胞（wP）疫苗：<br>
    a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 百日咳鲍特菌菌株进行标准化培养随后灭活（通常采取高温灭活，并用福尔马林处理）；<br>
    b)&nbsp;&nbsp;&nbsp;&nbsp; 诱导的免疫应答针对的是全细菌细胞的一系列抗原。<br>
    &nbsp;<br>
    2、 高度纯化的选择性细菌组分制成的无细胞（aP）疫苗：<br>
    a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 首个无细胞百日咳（aP）疫苗于 1981 年在日本研制成功；<br>
    b)&nbsp;&nbsp;&nbsp;&nbsp; 含一种及以上分别提纯的抗原（PT、FHA、PRN、FIM 2型和3型）；<br>
    c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 要达到保护效果，至少应接种2剂次的aP疫苗。<br>
    &nbsp;<br>
    <strong>百日咳疫苗的接种方法和接种程序</strong><br>
    1、 接种方法<br>
    百日咳疫苗的标准剂量为0.5ml，肌内注射，12月龄以下儿童注射部位为大腿前外侧，其他人群的注射部位为三角肌。<br>
    &nbsp;<br>
    2、 接种程序</div>
<div style="text-align: center;">
    <img alt="" src="/uploads/allimg/180815/1-1PQ509363I28.png" style="width: 549px; height: 274px;"></div>
<div>
    <strong>百白破疫苗</strong><strong>受种儿童需分别于3、4、5月龄和18月龄各接种1剂次，共4剂次。</strong><br>
    &nbsp;<br>
    <strong>青少年和成人接种百日咳疫苗的加强剂次</strong><br>
    6 岁以上的人群只能接种aP疫苗。<br>
    &nbsp;<br>
    <strong>疫苗接种后是否需要检测?</strong><br>
    接种疫苗，血清转化（4倍效价上升）是显而易见的，至少对90％百日咳抗原有免疫效果。<br>
    IgM和IgG抗体，在疫苗接种很快就可以检测出，IgG抗体免疫可持续数年。<br>
    IgA抗体，这是一个重要的急性感染的指标，仅20〜40％的病例会产生这种抗体。没有IgA型抗体可以在婴儿未满六个月的时候检出。<br>
    WHO鼓励全球各国针对百日咳（尤其是实验室确诊病例）开展认真的流行病学监测，以监测疾病负担和免疫接种的影响。</div>
<div style="text-align: center;">
    <img alt="" src="/uploads/allimg/180815/1-1PQ5093619551.png" style="width: 794px; height: 764px;"></div>
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