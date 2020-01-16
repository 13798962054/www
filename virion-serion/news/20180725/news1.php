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

    <div class="time">2018.07.25</div>
    <div class="newsd">
          <h3>疫苗接种后效果监测的意义及相关产品</h3>
          <!-- JiaThis Button BEGIN -->
          <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
          <!-- JiaThis Button END -->
          <p>　<strong>作者：王赫群</strong><br>
<span style="font-size:16px;">近期，长春长生生物公司被曝出在狂犬病疫苗生产过程中存在记录造假等问题，国家药监局已对其立案调查，并责成吉林省食品药品监督管理局收回长春长生相关《药品GMP证书》，涉嫌犯罪的移送公安机关追究刑事责任。事件一出，举国哗然。众所周知，狂犬病是一种高死亡率的疾病，如果人被狗咬伤后不能及时接种疫苗或接种的疫苗无效，其极可能患上狂犬病，患病后死亡率近百分之百。根据全国法定传染病疫情数据，2017年全国狂犬病发病516例，死亡502例。即便是接种了狂犬疫苗，如果个人体内无法在发病前产生足够多的抗体，也会因发病死亡。<br>
正当监管部门和长生生物澄清涉事批次产品尚未出厂和上市销售，全部产品已得到有效控制之时，网上又曝出长春长生等疫苗企业生产的百白破联合疫苗效价测定不符合规定，而且产品已流入市场。此事关系儿童健康，更让舆论沸腾，国人激怒。人们在对相关企业的道德底线发出质疑之时，也对疫苗接种的安全性产生了疑问。<br>
&nbsp;<br>
事实上，对于疫苗的监管，中国已经建立起覆盖疫苗“研发—生产—流通—接种”全生命周期监管体系。按照中国《药品管理法》等法律法规要求，疫苗生产企业必须对每一批上市疫苗安全性、有效性等进行全部项目检验。自检合格后，企业提出疫苗批签发申请，相关部门会去生产企业组织抽样，送到中检院等机构进行批签发。批签发前，会逐批进行安全性指标检验，对效价有效性指标则按国际通行做法随机抽取5%进行检验，符合相应标准，企业取得《生物制品批签发证明》后公司产品才上市销售。产品流通到市场过程中，其运输条件等都会受到严格监管。最后，人群接种疫苗后，一些公卫机构如疾控中心会对人群随机抽样，以监测接种后的抗体水平是否达到保护效果。<br>
所以对疫苗的监测，分为接种前和接种后的两部分。本文着重介绍疫苗接种后的监测。<br>
<strong>为什么要在接种后监测</strong><br>
任何一个疫苗的防护效果都无法达到100%，即没有一个疫苗可以让100%的所有人在接种后都可以得到保护。因为个体的自身免疫功能存在差异，有些人在接种后可以产生足够的保护性抗体，有些人可能无法产生足够的保护性抗体，也就是说个人在接种后是无法保证绝对的安全的。所以，很可能你在接种疫苗后还处于患病的风险中，但你并不知情。<br>
另一方面，保护性抗体水平会随着时间推移逐步下降，进而导致患病风险增加。在发达国家，在接种某些类别疫苗如常见的百白破疫苗和水痘疫苗等后的若干年内，要根据自身抗体水平情况或相关指引进行加强接种或补种，减少由于年龄增长时保护性抗体水平下降导致的患病风险。<br>
因此不管对于接种后的人群还是个人，进行疫苗接种后的效果评价是非常有意义的。<br>
<strong>如何在接种后监测</strong><br>
通常，在疫苗接种后进行效果监测主要通过免疫保护水平检测实现，即通过检测人体内针对某种传染病的保护性抗体水平是否达到相关标准，来判断接种后的个人是否得到疫苗的保护。相关标准主要是参考国家卫计委《预防接种工作规范》或WHO(世界卫生组织)的相关文件。<br>
目前检测保护性抗体水平的手段主要通过检测试剂来实现，试剂基于免疫学原理，在人体外检测人血中的抗体水平，检测过程中对人体无创伤。根据方法学不同可分为酶联免疫法（ELISA）、金标法、化学发光法等，其中ELISA方法成熟、经济以及操作简便，应用较广。<br>
<strong>疫苗监测产品选择</strong><br>
<strong>定量：</strong>定量检测产品由于能获得准确的抗体水平,通过抗体定量就能准确了解机体的免疫水平, 而且可连续检测血清中抗体水平，以便对不同时间和地点的检测结果进行比较。定量检测相对于定性检测，可以设置灰区，在抗体阳性检出率方面增加了定量试验的准确度及可靠性，更有助于准确地了解健康人群中免疫水平及抗体阳性水平。疫苗接种效果监测是检测保护性抗体IgG，定性分析无法确定这种保护性抗体的强弱，同时定量检测还可以对保护性抗体水平衰减情况进行监测。<br>
<strong>定量的挑战</strong>：可用于检测抗体的抗原种类繁多，表位、浓度、特异性、亲和力不同都会影响检测结果的准确性，某些检测中，只有包被具有病毒中和表位的糖蛋白，才能检测到具有保护作用的中和抗体。同时合适的定量标准曲线是实现定量检测的重要前提。<br>
<strong>经济性：</strong>好的产品应在保证检测可靠性的前提下，提供用户可接受的价格。性价比高的产品才能普及大众。<br>
<strong>方便性：</strong>检测产品应保证操作的方便性，对环境要求不宜过高，操作越简便越好。<br>
<strong>维润赛润疫苗监测产品介绍</strong><br>
维润赛润品牌创立于1978年，基于德国严谨的工匠精神，结合公司在免疫学中几十年的技术积淀，为市场提供了多项质量可靠的疫苗监测产品。<br>
维润赛润试剂产品采用自产抗原作为核心原材料，既保证了溯源性，也保证了产品的高品质、高灵敏度和高特异性。产品采用4参数逻辑对数模型(4PL)作为定量模型，准确性高。该模型采用单点定量方法，使得操作更为简单，同时也让定量变得更加经济高效。每批试剂会在试剂内部提供标准曲线，操作者无需自行绘制曲线，同时也提供计算软件，结果处理时方便快捷。目前，针对国内一类、二类疫苗，维润赛润疫苗监测系列提供以下11种产品（产品与相应疫苗对应），基于ELISA方法学：<br>
<img alt="" src="/uploads/allimg/180724/1-1PH41U20JW.png" style="width: 595px; height: 300px;"><br>
<img alt="" src="/uploads/allimg/180724/1-1PH41U221A8.png" style="width: 598px; height: 307px;"><br>
注：其中水痘-带状疱疹病毒IgG、细小病毒B19 IgG和风疹病毒IgG抗体检测产品为国家药监局注册产品，可按医疗器械体外诊断试剂使用，可由医疗机构检测后出具相应的诊断报告；其余8项产品为CE认证产品，仅供科研使用，不用于临床，不出具临床诊断报告。</span><br>
<br>
<span style="font-size:16px;">维润赛润以其优良的品质深受各地疾控中心认可，广泛用于疫苗效果监测。<br>
<br>
<img alt="" src="/uploads/allimg/180724/1-1PH41U300540.png" style="width: 558px; height: 132px;"></span><br>
&nbsp;<br>
 </p>
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