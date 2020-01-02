<?php
include "footer-header/header.php";
?>


<div id="products" class="ps-page">
    <div class="title" v-cloak>产品 > {{currentTitle}}</div>

    <ul class="layui-nav layui-nav-tree nav" lay-filter="test" v-cloak>
        <!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
        <li class="layui-nav-item" v-for="(first, i) in Nav1" :key="first.id" v-cloak>
            <a href="javascript:;" v-cloak>{{first}}</a>
            <dd class="layui-nav-child" v-for="(second, j) in Nav2[i]" :key="second.id" @click="showContent2(i, j)">
                <a href="javascript:;" v-cloak>{{second}}</a>
                <dl class="layui-nav-child" v-for="(third, k) in Nav3[i][j]" :key="third.id" @click="showContent3(i, j, k)">
                    <dd><a href="javascript:;" v-cloak>{{third}}</a></dd>
                </dl>
            </dd>
        </li>
    </ul>

    <div class="content" id="product-content">

        <p v-for="item in productsList1[currentIndex[0]][currentIndex[1]][currentIndex[2]]" v-if="currentIndex[2]"
           v-cloak>
            {{item}}
        </p>
        <div v-if="!currentIndex[2]">
            <!-- 抗原 -->
            <div v-if="currentIndex[0] == 0">
                <div class="product-content-item">
                    <div class="background-of-product">
                        <div class="item-title" v-cloak>{{ currentPageTitle }}</div>
                        <div class="backgroud-title">产品背景</div>
                        <div class="background-content"
                             v-html="productsList1[currentIndex[0]][currentIndex[1]][0][0]"></div>
                    </div>
                    <div class="background-of-product" style="padding-top: 0">
                        <div class="backgroud-title">产品信息</div>
                    </div>
                    <div class="product-item-table">
                        <table>
                            <thead>
                            <tr>
                                <th width="150px">货号</th>
                                <th width="200px">产品</th>
                                <th width="300px">英文名称</th>
                                <th width="150px">生产商</th>
                                <th width="150px">来源</th>
                                <th width="150px">用途</th>
                                <th width="160px">保存条件及有效期</th>
                                <th width="150px">规格</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr v-for="trItem in showProductList()">
                                <td v-for="tdItem in trItem" v-cloak>{{tdItem}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="attention-product">
                        <div class="attention-title">咨询电话</div>
                        <div class="attention-content">
                            <li style="list-style: none">朱经理：18818686988</li>
                            <li style="list-style: none;text-indent: 4em">0755-89381139</li>
                            <li style="list-style: none">原料事业部：0755-89381195</li>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 人源化单抗 -->
            <div v-if="currentIndex[0] == 1">
                <div class="product-content-item">
                    <div class="background-of-product">
                        <div class="item-title" v-cloak>{{ currentPageTitle }}</div>
                        <div class="backgroud-title">产品背景</div>
                        <div class="background-content"
                             v-html="productsList1[currentIndex[0]][currentIndex[1]][0][0]"></div>
                    </div>
                    <div class="background-of-product" style="padding-top: 0">
                        <div class="backgroud-title">产品信息</div>
                    </div>
                    <div class="product-item-table">
                        <table>
                            <thead>
                            <tr>

                                <th width="150px">货号</th>
                                <th width="200px">产品</th>
                                <th width="300px">英文名称</th>
                                <th width="150px">抗体类型</th>
                                <th width="150px">推荐用途</th>
                                <th width="150px">规格</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr v-for="trItem in showProductList()">
                                <td v-for="tdItem in trItem" v-cloak>{{tdItem}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
<!--                    <div class="attention-product">-->
<!--                        <div class="attention-title">注意事项</div>-->
<!--                                          <div class="background-content" v-html="productsList1[currentIndex[0]][currentIndex[1]][1][0]"></div>-->
<!--                        <div class="attention-content">-->
<!--                            <li>安全性：实验操作时应严格按照实验室生物、化学安全规定进行。</li>-->
<!--                            <li>用途：本产品仅供于科研或体外诊断用，不能用于人体实验或治疗。</li>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="attention-product">
                        <div class="attention-title">咨询电话</div>
                        <div class="attention-content">
                            <li style="list-style: none">朱经理：18818686988</li>
                            <li style="list-style: none;text-indent: 4em">0755-89381139</li>
                            <li style="list-style: none">原料事业部：0755-89381195</li>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 质控品 -->
            <div v-if="currentIndex[0] == 2">
                <div class="product-content-item">
                    <div class="product-item-table">
                        <div class="item-title" v-cloak>{{ currentPageTitle }}</div>
<!--                        <div class="product-table-title">产品信息</div>-->
                        <div class="background-of-product" style="padding-top: 0">
                            <div class="backgroud-title">产品信息</div>
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <th width="150px">货号</th>
                                <th width="200px">产品</th>
                                <th width="300px">英文名称</th>
                                <th width="150px">描述</th>
                                <th width="150px">规格</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr v-for="trItem in showProductList()">
                                <td v-for="tdItem in trItem" v-cloak>{{tdItem}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="attention-product">
                        <div class="attention-title">咨询电话</div>
                        <div class="attention-content">
                            <li style="list-style: none">朱经理：18818686988</li>
                            <li style="list-style: none;text-indent: 4em">0755-89381139</li>
                            <li style="list-style: none">黄经理：13631697728</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 酶联免疫试剂盒 -->
        <div v-if="currentIndex[0] == 3">
            <div class="product-content-item">
                <div class="product-item-table">
                    <div class="item-title" v-cloak>{{ currentPageTitle }}</div>
                    <div class="background-of-product">
                        <div class="backgroud-title">产品背景</div>
                        <div class="background-content" v-html="productsList1[currentIndex[0]][currentIndex[1]][0][0]"></div>
                    </div>
                    <div class="background-of-product" style="padding-top: 0">
                        <div class="backgroud-title">产品信息</div>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th width="150px">货号</th>
                            <th width="200px">产品</th>
                            <th width="150px">方法学</th>
                            <th width="150px">描述</th>
                            <th width="150px">规格</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr v-for="trItem in showProductList()">
                            <td v-for="tdItem in trItem" v-cloak>{{tdItem}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="attention-product">
                        <div class="attention-title">咨询电话</div>
                        <div class="attention-content">
                            <li style="list-style: none">朱经理：18818686988</li>
                            <li style="list-style: none;text-indent: 4em">0755-89381139</li>
                            <li style="list-style: none">黄经理：13631697728</li>
                        </div>
                    </div>
            </div>
        </div>

        <!-- 原辅料 -->
        <div v-if="currentIndex[0] == 4">
            <div class="product-content-item">
                <div class="product-item-table">
                    <div class="product-item-table">
                        <div class="item-title" v-cloak>{{ currentPageTitle }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="clearBoth"></div>

<script src="js/products.js"></script>


<script>
    // 导入layui的element框架
    layui.use('element', function () {
        var element = layui.element;

        //…
    });
</script>
<?php
include "footer-header/footer.php";

?>



