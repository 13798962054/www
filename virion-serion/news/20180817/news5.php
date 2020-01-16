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
          <h3>关于白喉，你真的了解吗？</h3>
          <!-- JiaThis Button BEGIN -->
          <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
          <!-- JiaThis Button END -->
          <p>　</p><div style="text-align: center;">
    作者：温欣欣 周鹏</div>
<div>
    <strong>什么是白喉？</strong><br>
    &nbsp;&nbsp; 白喉棒状杆菌（Corynebacterium diphtheriae）引起的急性病，细菌毒素可以引起产生上呼吸道阻塞性假膜（哮吼）或损伤心肌及其他组织，从而致病和致死。<br>
    &nbsp;<br>
    <strong>什么是白喉棒状杆菌？</strong><br>
    白喉棒状杆菌是细长、棒状、革兰氏阳性杆菌，有4个生物型（重型、belfanti、轻型、中间型）。<br>
    &nbsp;<br>
    <strong>致病因子有哪些？</strong><br>
    除细菌外毒素外，细胞壁成份如O和K抗原，在白喉的致病性中均具有重要作用。<br>
    白喉棒状杆菌最重要的毒力因子是外毒素，外毒素是由噬菌体介导、细菌染色体编码的高度保守性多肽。<br>
    在宿主细胞外，外毒素的活性很低，但通过非毒性片段B粘附并进入细胞后，毒性片段A解离，通过抑制细胞蛋白合成杀死细胞。<br>
    白喉外毒素可引起局部和全身细胞死亡。<br>
    &nbsp;<br>
    <strong>人是白喉棒状杆菌的唯一天然宿主。</strong><br>
    &nbsp;<br>
    <strong>传播途径：</strong><br>
    白喉仅通过飞沫和密切接触传播。<br>
    &nbsp;<br>
    <strong>主要影响人群：</strong><br>
    学龄前儿童和学龄儿童。<br>
    &nbsp;<br>
    <strong>流行特征：</strong><br>
    一年四季均可发生，秋冬季发病较多。白喉主要为儿童传染病，1-5岁发病率最高<br>
    &nbsp;<br>
    <strong>白喉引起的症状：</strong><br>
    多数情况下，白喉易感者感染后只引起一过性的咽部带菌而不发病。<br>
    皮肤和粘膜损伤是重要的感染源，偶然会引起全身性病理反应。<br>
    呼吸道白喉的症状一般在1～5天的潜伏期后出现，疾病发作较慢，以中度发热和轻度的渗出性咽炎为特征。<br>
    严重病例在喉部逐渐形成所谓的假膜，具有典型的不对称的灰白色外观并与深层组织紧密附着。<br>
    毒素吸收的程度主要取决于粘膜损伤的程度。下述由WHO确定的临床情况与毒素诱导引起全身性疾病的危险性增加有关：<br>
    （1）卡他型：咽部红肿，无假膜；<br>
    （2）滤泡型：咽部和扁桃体上有渗出物斑；<br>
    （3）扩散型：有覆盖扁桃体和咽后壁的假膜；<br>
    （4）混合型：病变累及一种以上解剖部位，如喉和皮肤等。<br>
    &nbsp;<br>
    <strong>诊断：</strong><br>
    临床诊断通常依赖于覆盖咽部的灰色渗出物（假膜）。对疑似病例开展实验室检查，已达到确诊的目的。<br>
    &nbsp;<br>
    <strong>治疗：</strong><br>
    对白喉必须进行及时治疗，治疗的主要手段是肌肉或静脉注射白喉抗毒素。</div>
<div style="text-align: center;">
    <img alt="" src="/uploads/allimg/180813/1-1PQ31I121121.png" style="width: 576px; height: 720px;"></div>
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