<?phpinclude "footer-header/header.php"?><!--canvas牛顿球--><!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">--><!--<script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5.1/dat.gui.min.js"></script>--><!--<canvas id="trails"></canvas>--><!--<canvas id="particles"></canvas>--><!--<script src="js/canvas-cursor.js"></script>--><link rel="stylesheet" href="skin/index/css/style.css"><!--滚动图片--><div id="slide" onclick="stopInterval()">    <div class="content" >        <div class="pic"><img src="img/slide1.jpg" alt=""></div>        <div class="pic"><img src="img/slide2.jpg" alt=""></div><!--        <div class="pic"><img src="img/slide3.jpg" alt=""></div>--><!--        <div class="pic"><img src="img/slide4.jpg" alt=""></div>-->        <div class="pic"><iframe src="3d/index.html" width="100%" height="100%"></iframe></div>    </div>    <div class="left layui-carousel-arrow" onclick="leftSlide()"><</div>    <div class="right layui-carousel-arrow" onclick="rightSlide()">></div></div><!-- layui轮播图 --><!--<div class="layui-carousel" id="slide" lay-filter="slide">--><!--    <div carousel-item="">--><!----><!--        <div><iframe src="3d/index.html" width="100%" height="100%"></iframe></div>--><!--        <div><iframe src="http://www.jq22.com/yanshi16704" width="100%" height="100%"></iframe></div>--><!--        <div><img src="img/slide1.jpg" alt=""></div>--><!--        <div><img src="img/slide2.jpg" alt=""></div>--><!--        <div><img src="img/slide3.jpg" alt=""></div>--><!--        <div><img src="img/slide4.jpg" alt=""></div>--><!--    </div>--><!--</div>--><!--推荐产品--><div id="recomment">    <div class="title">        <p id="offscreen-text" class="offscreen-text"></p>        <p id="text" class="text"></p>        <svg id="svg"></svg>        <input type="text" class="input", id="input" />    </div>    <div class="recomment-list">        <div class="recomment-item" onclick="toProducts(0, 0)">            <div class="recomment-item-img">                <img src="img/home1.png" alt="">                <div class="recomment-hidden-text">                    <p>可用于诊断试剂的高质量抗原</p>                </div>            </div>            <div class="recomment-item-title">                <p>SERION 抗原</em></p>            </div>        </div>        <div class="recomment-item" onclick="toProducts(1, 0)">            <div class="recomment-item-img">                <img src="img/home2.png" alt="">                <div class="recomment-hidden-text">                    <p>可替代人血清的人源化单克隆抗体</p>                </div>            </div>            <div class="recomment-item-title">                <p>SERION 抗体</p>            </div>        </div>        <div class="recomment-item" onclick="toProducts(2, 0)">            <div class="recomment-item-img">                <img src="img/home3.png" alt="">                <div class="recomment-hidden-text">                    <p>用于自动化检测的新型超顺磁性微球</p>                </div>            </div>            <div class="recomment-item-title">                <p>SERION磁珠</p>            </div>        </div><!--        后4张暂时不用--><!--        <div class="recomment-item">--><!--            <div class="recomment-item-img">--><!--                <img src="img/home4.png" alt="">--><!--                <div class="recomment-hidden-text">--><!--                    <p>ELISA Tests zur Unterstützung der Diagnose von Infektionserkrankungen</p>--><!--                </div>--><!--            </div>--><!--            <div class="recomment-item-title">--><!--                <p>SERION ELISA <em>classic</em> / <em>antigen</em></p>--><!--            </div>--><!--        </div>--><!--    </div>--><!--    <div class="recomment-list">--><!--        <div class="recomment-item">--><!--            <div class="recomment-item-img">--><!--                <img src="img/home5.png" alt="">--><!--                <div class="recomment-hidden-text">--><!--                    <p>ELISA Tests zur Unterstützung der Diagnose von Infektionserkrankungen</p>--><!--                </div>--><!--            </div>--><!--            <div class="recomment-item-title">--><!--                <p>SERION ELISA <em>classic</em> / <em>antigen</em></p>--><!--            </div>--><!--        </div>--><!--        <div class="recomment-item">--><!--            <div class="recomment-item-img">--><!--                <img src="img/home6.png" alt="">--><!--                <div class="recomment-hidden-text">--><!--                    <p>ELISA Tests zur Unterstützung der Diagnose von Infektionserkrankungen</p>--><!--                </div>--><!--            </div>--><!--            <div class="recomment-item-title">--><!--                <p>SERION ELISA <em>classic</em> / <em>antigen</em></p>--><!--            </div>--><!--        </div>--><!--        <div class="recomment-item">--><!--            <div class="recomment-item-img">--><!--                <img src="img/home7.png" alt="">--><!--                <div class="recomment-hidden-text">--><!--                    <p>ELISA Tests zur Unterstützung der Diagnose von Infektionserkrankungen</p>--><!--                </div>--><!--            </div>--><!--            <div class="recomment-item-title">--><!--                <p>SERION ELISA <em>classic</em> / <em>antigen</em></p>--><!--            </div>--><!--        </div>-->    </div></div><!--virion/serion交叉页面--><div class="container-fluid pageswitch">    <div class="row">        <div class="item lila"><!--            <div class="item-bg">--><!--                <img class="bgimage" src="img/home_left.png" width="983" height="480" alt="">--><!--            </div>-->            <div class="item-bg">                <img class="bgimage" width="983" height="480" alt="">            </div>            <div class="item-content">                <img class="switch-logo" src="img/home_left_title.png" width="420" height="34" alt="">                <p>高质量的检测分析系统，提供整体解决方案。</p>                <p>酶联免疫试剂盒、质控品</p><!--                <a>--><!--                    Zu den Produkten--><!--                </a>-->            </div>        </div>        <div class="item blau"><!--            <div class="item-bg">--><!--                <img class="bgimage" src="img/home_right.png" width="1093" height="480" alt="">--><!--            </div>-->            <div class="item-bg">                <img class="bgimage" width="1093" height="480" alt="">            </div>            <div class="item-content">                <img class="switch-logo" src="img/home_right_title.png" width="433" height="33" alt="">                <p>用于IVD产品的高质量原材料。</p>                <p>抗原、抗体、磁珠、牛血清白蛋白</p><!--                <a>--><!--                    Zu den Produkten--><!--                </a>-->            </div>        </div>    </div></div><script src='skin/index/js/CSSPlugin.min.js'></script><script src='skin/index/js/EasePack.min.js'></script><script src='skin/index/js/TweenLite.min.js'></script><script  src="skin/index/js/index.js"></script><?phpinclude  "footer-header/footer.php"?>