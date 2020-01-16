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

    <div class="time">2019.04.19</div>
    <h3>把理想写在大地上</h3>
          <!-- JiaThis Button BEGIN -->
          <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
          <!-- JiaThis Button END -->
          <p><span style="font-size:16px;">作者：紫嫣</span><br />
<p class="MsoNormal" style="text-align: center;">
    <span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;<br />
    花开一春，人活一世。</span></p>
<p class="MsoNormal">
    <span style="font-size:14px;"><span style="font-size:16px;">&nbsp;&nbsp;&nbsp; 人生真的就像一场马拉松，每一个到达终点的人，都是从第一步开始，并且是从每一步积累的。</span></span></p>
<div style="text-align: center;">
    <div>
        <span style="font-size:14px;">
            </span><img alt="" src="/uploads/allimg/190419/1-1Z4191542422H.png" style="width: 500px; height: 279px;" /></div>
    <p class="MsoNormal" style="text-align: left;">
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 我经常和团队的同事分享自己得体会，那就是：珍惜当下，认真做好手头得每一件事情，并且，在自己的能力范围内尽量做到极致和卓越，脚踏实地地耕耘，习惯努力。</span></p>
    <p class="MsoNormal">
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp; 我的梦想</span></p>
    <p class="MsoNormal">
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp; 不忘来路</span></p>
    <p class="MsoNormal">
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp; 不畏前程 </span></p>
    <p class="MsoNormal">
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp; 充满信心</span></p>
    <p class="MsoNormal">
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp; 以身许梦</span></p>
    <p class="MsoNormal">
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp; 只为了脚踏实地的努力</span></p>
    <p class="MsoNormal">
        <span style="font-size:16px;">把理想深植于大地让它开花结果</span></p>
    <p class="MsoNormal" style="text-align: left;">
        &nbsp;</p>
    <p class="MsoNormal">
        <span style="font-size:16px;"><img alt="" src="/uploads/allimg/190419/1-1Z41915441SE.png" style="width: 500px; height: 334px;" /></span></p>
    <p class="MsoNormal" style="text-align: left;">
        <span style="font-size:16px;">
            </span></p>
    <p class="MsoNormal" style="text-indent: 21pt; text-align: left;">
        <span style="font-size:16px;">大千世界，芸芸众生。有共同理想的人能走到一起共事是幸福的，真的就是一种缘分。同车渡，共游玩，心怀感恩。重要的是有机会一起做有意义的事，做能书写未来的事。</span><br />
        &nbsp;</p>
    <p class="MsoNormal" style="text-indent: 21pt;">
        <img alt="" src="/uploads/allimg/190419/1-1Z41915561KX.jpg" style="width: 500px; height: 375px;" /></p>
    <p class="MsoNormal" style="text-indent: 21pt; text-align: left;">
        <br />
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 开心是自然的，远离市区逃离工作。2019年4月，乘着春光正好，和团队一起，一群熟悉的平日里朝夕相处的亲人般的人，不自觉总会回到熟悉的话题。<br />
        &nbsp;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 工作就像长了脚似的跟着走。996？社畜？也许，就是这个时代的宿命。<br />
        &nbsp;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 国人习惯性的工作不纯粹，游玩也不纯粹，即解释为国情，这个说法很好哈，既然这样心里也就豁然起来，暂且偷闲吧。一路欢歌笑语，如期到达汕尾水底山温泉度假村。</span><br />
        <br />
        &nbsp;</p>
    <p class="MsoNormal" style="text-indent: 21pt;">
        <img alt="" src="/uploads/allimg/190419/1-1Z4191A44I18.jpg" style="width: 500px; height: 398px;" /></p>
    <p class="MsoNormal" style="text-indent: 21pt; text-align: left;">
        <br />
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在酒店电梯里猛然看见服务电话号码是熟悉的&ldquo;0755-&nbsp;&nbsp;&nbsp; &rdquo;。200多公里之外还是你，忽然感觉没有了距离感。<br />
        &nbsp;&nbsp;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 近几年各种联盟合作区已是屡见不鲜了，但是电话区域都是一样的也是不多，粤东几百公里外仍是你。</span><br />
        &nbsp;</p>
    <p class="MsoNormal" style="text-indent: 21pt;">
        <span style="font-size:16px;"><img alt="" src="/uploads/allimg/190419/1-1Z4191A525J9.jpg" style="width: 500px; height: 333px;" /></span><br />
        <br />
        &nbsp;</p>
    <p class="MsoNormal" style="text-indent: 21pt; text-align: left;">
        <span style="font-size:16px;">赶紧百度起来，这就是深汕合作区。忽然因为这个0755心里顿感亲切起来，原来我们并没走远。这个合作区的头还提出了一句很有情怀的口号，把理想写在大地上。<br />
        &nbsp;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大家很久以来都在拼命的赶超，拼命的创新，理想情怀似乎都是文艺青年的专有了。看来，人们心底还是渴望有点理想，也希望自己高尚起来的。至少几年的朋友圈常常有人端上鸡汤，不管是转发也好陈词也好，也是一种情愫吧。有好过没有。<br />
        &nbsp;<br />
        &nbsp;&nbsp;&nbsp;&nbsp; 一辈子真的很短很短......历经千山万水,不求深刻,只求简单。大钢琴家霍洛维茨说:我用尽了一生的努力,才明白朴素原来最有力量。</span><br />
        <br />
        &nbsp;</p>
    <p class="MsoNormal" style="text-align: left;">
        <span style="font-size:16px;">&nbsp;&nbsp;&nbsp; 这是一个最好的时代，在医学科学领域，有着我们毕生的事业与追求，在我们这些人身上，生命有着比柴米油盐更高的维度。这是梦想，是理想，催人奋进，让我们为之努力，为之付出，这是一辈子的承诺。<br />
        &nbsp;<br />
        &nbsp;&nbsp;&nbsp; 我坚信我们的团队同怀有一个信念，那便是：</span><br />
        <br />
        &nbsp;</p>
    <p class="MsoNormal">
        <span style="font-size:16px;"><img alt="" src="/uploads/allimg/190419/1-1Z419154922N6.png" style="width: 500px; height: 617px;" /></span></p>
    <div style="text-align: left;">
        <span style="font-size:16px;">
        </span>
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