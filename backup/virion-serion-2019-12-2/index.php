<?php
include "footer-header/header.php"
?>

<!--canvas牛顿球-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5.1/dat.gui.min.js"></script>-->
<!--<canvas id="trails"></canvas>-->
<!--<canvas id="particles"></canvas>-->
<!--<script src="js/canvas-cursor.js"></script>-->
<link rel="stylesheet" href="skin/index/css/style.css">


<!--滚动图片-->
<div id="slide" onclick="stopInterval()">
    <div class="content" >


        <div class="pic"><img src="img/slide1.jpg" alt=""></div>
        <div class="pic"><img src="img/slide2.jpg" alt=""></div>
        <div class="pic"><img src="img/slide3.jpg" alt=""></div>
        <div class="pic"><img src="img/slide4.jpg" alt=""></div>
        <div class="pic"><iframe src="3d/index.html" width="100%" height="100%"></iframe></div>
    </div>
    <div class="left layui-carousel-arrow" onclick="leftSlide()"><</div>
    <div class="right layui-carousel-arrow" onclick="rightSlide()">></div>
</div>

<!-- layui轮播图 -->
<!--<div class="layui-carousel" id="slide" lay-filter="slide">-->
<!--    <div carousel-item="">-->
<!---->
<!--        <div><iframe src="3d/index.html" width="100%" height="100%"></iframe></div>-->
<!--        <div><iframe src="http://www.jq22.com/yanshi16704" width="100%" height="100%"></iframe></div>-->
<!--        <div><img src="img/slide1.jpg" alt=""></div>-->
<!--        <div><img src="img/slide2.jpg" alt=""></div>-->
<!--        <div><img src="img/slide3.jpg" alt=""></div>-->
<!--        <div><img src="img/slide4.jpg" alt=""></div>-->
<!--    </div>-->
<!--</div>-->


<!--推荐产品-->
<div id="recomment">
    <div class="title">
        <p id="offscreen-text" class="offscreen-text"></p>
        <p id="text" class="text"></p>
        <svg id="svg"></svg>
        <input type="text" class="input", id="input" />
    </div>
    <div class="items">
        <div class="item">
            <div class="item-title">抗原</div>
            <div class="item-content">
                <div class="item-content-list">
                    <p class="item-content-list-title">推荐产品：</p>
                    <p>TORCH系列、呼吸道病毒系列、疱疹病毒系列、虫媒传染系列。</p>
                </div>
                <div class="item-content-list">
                    <p class="item-content-list-title">产品优势：</p>
                    <p>来源于天然蛋白、高活性、项目齐全。</p>
                </div>
                <div class="item-content-list">
                    <p class="item-content-list-title">推荐用途：</p>
                    <p>免疫检测包被原/标记原。</p>
                </div>
            </div>
            <p class="item-more" onclick="toProducts(0, 0)">+</p>
        </div>

        <div class="item">
            <div class="item-title">人源化单克隆抗体</div>
            <div class="item-content">
                <div class="item-content-list">
                    <p class="item-content-list-title">推荐产品：</p>
                    <p>TORCH系列、肺支肺衣、寨卡病毒、登革热病毒等。</p>
                </div>
                <div class="item-content-list">
                    <p class="item-content-list-title">产品优势：</p>
                    <p>高亲和力、特异性强、 稳定性好，可有效避免免疫检测中的HAMA效应。</p>
                </div>
                <div class="item-content-list">
                    <p class="item-content-list-title">推荐用途：</p>
                    <p>制备质控品；</p>
                    <p>免疫检测的包被原/标记原。</p>
                </div>
            </div>
            <p class="item-more" onclick="toProducts(1, 0)">+</p>
        </div>


    </div>
</div>
<script src='skin/index/js/CSSPlugin.min.js'></script>
<script src='skin/index/js/EasePack.min.js'></script>
<script src='skin/index/js/TweenLite.min.js'></script>
<script  src="skin/index/js/index.js"></script>
<?php
include  "footer-header/footer.php"
?>