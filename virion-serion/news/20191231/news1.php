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

    <div class="time">2019.12.31</div>
    <div class="content">
        <div class="content-title">
            <p>新起点，再出发</p>
            <p>——维润赛润成功举办2019年度合作伙伴研讨会</p>
        </div>
        <div class="content-txt">
            <p>时值岁末，北国已是银装素裹，寒风凛冽，南海之滨的大鹏湾依然阳光明媚，和风送暖。2019年12月22日至12月24日，维润赛润生物技术（深圳）有限公司在美丽的深圳大鹏新区成功举办了2019年度全国合作伙伴技术培训研讨会。维润赛润从全国各省市数百家经销合作伙伴中，挑选了三十多家有代表性的公司参加本次研讨会。</p>
            <p>在会上，维润赛润（深圳）宁紫妍总经理转达了德国维润赛润研发有限公司领导对会议的祝贺，代表公司向到会的合作伙伴致谢；宁总回顾了中德合资公司成立以来的发展历程，向始终坚定不移支持维润赛润的合作伙伴表达了真诚的感谢；宁总向合作伙伴隆重介绍了维润赛润（深圳）的原料业务部门——原料事业部，该部门成员是一支全部由博士后、博士、硕士组成的高水平的专业队伍，能够为生产厂家提供包括产品应用、技术交流、产品定制在内的全方位技术服务。会议表彰了2019年度的卓越合作伙伴和优秀合作伙伴，宁总为获奖单位颁发了奖励证书。</p>

            <div class="content-img">
                <img src="img/1.jpg" alt="">
            </div>

            <p>本次研讨会内容丰富，信息量大，既包括宏观经济形势与行业研究，又包括具体产品研讨，还包括实验操作技术培训。在本次会议中，维润赛润（深圳）原料事业部总经理朱峰先生详细介绍了维润赛润的原料业务产品线及产品特点；原料事业部王朝阳博士在抗原、抗体的基本原理和技术方面作了简要的报告；产品研发部温欣欣经理对中外计划免疫监测现状及方法进行比较，介绍了百白破、麻风腮等计免项目抗体检测的综合解决方案；技术服务中心陈怡桦主任组织开展了在维润赛润培训基地—中南医学检验实验室的实验技术操作培训。</p>

            <div class="content-img">
                <img src="img/2.jpg" alt="">
            </div>

            <p>深圳中润医学技术研究院闵书亮博士为合作伙伴带来了专题报告《经济全球化的认识和机会的把握》，详细阐述了从经济全球化1.0版本到新的世界贸易体制2.0版本的世界格局变化趋势，从国际关系的纵横捭阖，到微观经济体的合作联盟，深入浅出、精彩生动的讲解使各合作伙伴加深了对国际、国内经济和产业发展趋势的理解，在与维润赛润的合作中获得了持续发展的动力和机遇。</p>

            <div class="content-img">
                <img src="img/3.png" alt="">
            </div>

            <p>本次会议是维润赛润大鹏新办公楼入驻后首次举办的大型业务合作交流会议，是德国维润赛润研发有限公司在中国市场业务发展的一个新起点，我们期待与各合作伙伴一起从大鹏出发，展翅高飞！</p>

            <div class="content-img">
                <img src="img/4.jpg" alt="">
            </div>
        </div>

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