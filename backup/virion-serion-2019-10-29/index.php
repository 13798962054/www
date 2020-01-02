<?php
include "footer-header/header.php"
?>

<!--滚动图片-->
<div id="slide" onclick="stopInterval()">
    <div class="content" >
<!--        <div class="pic"><img src="img/slide1.jpg" alt=""></div>-->
        <div class="pic"><iframe src="3d/index.html" width="100%" height="100%"></iframe></div>
        <div class="pic"><img src="img/slide2.jpg" alt=""></div>
        <div class="pic"><img src="img/slide3.jpg" alt=""></div>
        <div class="pic"><img src="img/slide4.jpg" alt=""></div>
    </div>
</div>

<!--推荐产品-->
<div id="recomment">
    <div class="title">推荐产品</div>
    <div class="items">
        <div class="item">
            <p class="item-title">人源化单克隆抗体</p>
            <p>——TORCH系列、肺支肺衣、寨卡病毒、登革热病毒等。</p>

            <p>产品优势：</p>
            <p>高亲和力、特异性强、</p>
            <p>稳定性好，可有效避免免疫检测中的HAMA效应。</p>

            <p>推荐用途：</p>
            <p>制备质控品；</p>
            <p>免疫检测的包被原/标记原。</p>
            <br>
            <p class="item-more" onclick="toProducts(1, 0)">+</p>
        </div>
        <div class="item">
            <p class="item-title">抗原</p>
            <p>——TORCH系列</p>
            <br>
            <p>产品优势：</p>
            <p>来源于天然蛋白、高活性、项目齐全。</p>
            <br>
            <p>推荐用途：</p>
            <p>免疫检测包被原/标记原。</p>
            <br><br>
            <p class="item-more" onclick="toProducts(0, 0)">+</p>
        </div>
        <div class="item">
            <p class="item-title">抗原</p>
            <p>——呼吸道系列</p>
            <br>
            <p>产品优势：</p>
            <p>来源于天然蛋白、高活性。</p>
            <br><br>
            <p>推荐用途：</p>
            <p>免疫检测包被原/标记原。</p>
            <br><br>
            <p class="item-more" onclick="toProducts(0, 0)">+</p>
        </div>
        <div class="item">

        </div>


    </div>

</div>



<?php
include  "footer-header/footer.php"
?>