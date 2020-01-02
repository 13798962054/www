<html>
<head>
    <title>维润赛润</title>
    <meta charset="utf=8">
    <link rel="stylesheet" href="css/general.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="layui/css/layui.css">
    <script src="layui/layui.js"></script>
</head>
<body>
    <div id="header">
        <div class="top">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="menu">

                <li><a href="index.php">首页</a></li>
                <li class="products-item">
                    <a href="products.php">产品</a>
                    <!-- 产品 -->
                    <div class="products">
                        <div class="rank">
                            <div class="row">
                                <ol class="title" onclick="toProducts(0, 0)">抗原</ol>
                                <ol onclick="toProducts(0, 0)">巨细胞病毒</ol>
                                <ol onclick="toProducts(0, 1)">弓形虫</ol>
                                <ol onclick="toProducts(0, 2)">风疹病毒</ol>
                                <ol onclick="toProducts(0, 3)">单纯疱疹病毒（1型）</ol>
                                <ol onclick="toProducts(0, 4)">单纯疱疹病毒（2型）</ol>
                                <ol onclick="toProducts(0, 5)">肺炎支原体</ol>
                                <ol onclick="toProducts(0, 6)">肺炎衣原体</ol>
                                <ol onclick="toProducts(0, 7)">呼吸道合胞病毒</ol>
                                <ol onclick="toProducts(0, 8)">人腺病毒</ol>
                                <ol onclick="toProducts(0, 9)">副流感病毒</ol>
                                <ol onclick="toProducts(0, 10)">嗜肺军团菌</ol>
                                <ol onclick="toProducts(0, 11)">百日咳杆菌</ol>
                                <ol onclick="toProducts(0, 12)">腮腺炎病毒</ol>
                                <ol onclick="toProducts(0, 13)">柯萨奇病毒</ol>
                                <ol onclick="toProducts(0, 14)">埃可病毒</ol>
                                <ol onclick="toProducts(0, 15)">肠道病毒</ol>
                                <ol onclick="toProducts(0, 16)">细小病毒B19</ol>
                                <ol onclick="toProducts(0, 17)">EB病毒</ol>
                                <ol onclick="toProducts(0, 18)">白色念珠菌</ol>
                                <ol onclick="toProducts(0, 19)">幽门螺旋杆菌</ol>
                                <ol onclick="toProducts(0, 20)">麻疹病毒</ol>
                                <ol onclick="toProducts(0, 21)">轮状病毒</ol>
                                <ol onclick="toProducts(0, 22)">水痘-带状疱疹病毒</ol>
                                <ol onclick="toProducts(0, 23)">……</ol>
                                <ol class="product-list"><a href="product-list1.php">《抗原产品目录》</a></ol>
                            </div>
                        </div>
                        <div class="rank">
                            <div class="row">
                                <ol class="title" onclick="toProducts(1, 0)">人源化单抗</ol>
                                <ol onclick="toProducts(1, 0)">抗巨细胞病毒</ol>
                                <ol onclick="toProducts(1, 1)">抗弓形虫</ol>
                                <ol onclick="toProducts(1, 2)">抗单纯疱疹病毒</ol>
                                <ol onclick="toProducts(1, 3)">抗水痘带状疱疹病毒</ol>
                                <ol onclick="toProducts(1, 4)">抗风疹病毒</ol>
                                <ol onclick="toProducts(1, 5)">抗麻疹病毒</ol>
                                <ol onclick="toProducts(1, 6)">抗腮腺炎病毒</ol>
                                <ol onclick="toProducts(1, 7)">抗EB病毒</ol>
                                <ol onclick="toProducts(1, 8)">抗肺炎衣原体</ol>
                                <ol onclick="toProducts(1, 9)">抗肺炎支原体</ol>
                                <ol onclick="toProducts(1, 10)">抗寨卡病毒</ol>
                                <ol onclick="toProducts(1, 11)">抗登革热病毒</ol>
                                <ol>……</ol>
                                <ol class="product-list"><a href="product-list2.php">《人源化单抗产品目录》</a></ol>
                            </div>
                        </div>

                        <div class="rank">
                            <div class="row">
                                <ol class="title" onclick="toProducts(2, 0)">质控品</ol>
                                <ol onclick="toProducts(2, 0)">免疫效果监测系列</ol>
                                <ol onclick="toProducts(2, 1)">TORCH系列</ol>
                                <ol onclick="toProducts(2, 2)">儿童疾病系列</ol>
                                <ol onclick="toProducts(2, 3)">皮肤性病系列</ol>
                                <ol onclick="toProducts(2, 4)">疱疹病毒系列</ol>
                                <ol onclick="toProducts(2, 5)">呼吸道疾病系列</ol>
                                <ol onclick="toProducts(2, 6)">胃肠道疾病系列</ol>
                                <ol onclick="toProducts(2, 7)">人畜共患系列</ol>
                                <ol onclick="toProducts(2, 8)">虫媒传染系列</ol>
                                <ol onclick="toProducts(2, 9)">衣原体感染系列</ol>
                                <ol onclick="toProducts(2, 10)">真菌感染系列</ol>
                                <ol onclick="toProducts(2, 0)">……</ol>
                                <ol class="product-list"><a href="product-list3.php">《质控品产品目录》</a></ol>
                            </div>
                        </div>
                        <div class="rank">
                            <div class="row">
                                <ol class="title" onclick="toProducts(3, 0)">酶联免疫试剂盒</ol>
                                <ol onclick="toProducts(3, 0)">免疫效果监测系列</ol>
                                <ol onclick="toProducts(3, 1)">TORCH系列</ol>
                                <ol onclick="toProducts(3, 2)">儿童疾病系列</ol>
                                <ol onclick="toProducts(3, 3)">皮肤性病系列</ol>
                                <ol onclick="toProducts(3, 4)">疱疹病毒系列</ol>
                                <ol onclick="toProducts(3, 5)">呼吸道疾病系列</ol>
                                <ol onclick="toProducts(3, 6)">胃肠道疾病系列</ol>
                                <ol onclick="toProducts(3, 7)">鼻咽癌相关病毒系列</ol>
                                <ol onclick="toProducts(3, 8)">人畜共患系列</ol>
                                <ol onclick="toProducts(3, 9)">虫媒传染系列</ol>
                                <ol onclick="toProducts(3, 10)">衣原体感染系列</ol>
                                <ol onclick="toProducts(3, 11)">真菌感染系列</ol>
                                <ol onclick="toProducts(3, 12)">IgG抗体亲和力检测系列</ol>
                                <ol onclick="toProducts(3, 0)">……</ol>
                                <ol class="product-list"><a href="product-list4.php">《酶联免疫试剂盒产品目录》</a></ol>
                            </div>
                        </div>
                        <div class="rank">
                            <div class="row">
                                <ol class="title" onclick="toProducts(4)">原辅料</ol>
                                <ol>牛血清白蛋白</ol>
                                <ol>类风湿因子吸附剂</ol>
                                <ol>……</ol>
                                <ol class="product-list"><a href="product-list5.php">《原辅料产品目录》</a></ol>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="services-item">
                    <a href="services-home.php">服务</a>
                    <!-- 产品 -->
                    <div class="services">
                        <div class="rank">
                            <div class="row">
                                <ol class="title" onclick="self.location.href = 'services1.php'">人源化单抗定制</a></ol>
                            </div>
                        </div>
                        <div class="rank">
                            <div class="row">
                                <ol class="title" onclick="self.location.href = 'services2.php'">抗原定制</ol>
                            </div>
                        </div>
                        <div class="rank">
                            <div class="row">
                                <ol class="title" onclick="self.location.href = 'services3.php'">免疫保护水平监测方案设计</ol>
                            </div>
                        </div>

                    </div>
                </li>
                <li><a href="about.php">关于</a></li>
                <li class="search">
                    <ul>
                        <li class="search-icon"><img src="img/top_search.png" alt=""></li>
                        <li class="search-detail">
                            <div></div>
                        </li>
                    </ul>
                </li>
            </div>
        </div>

    </div>
    <!--填充头部的空白位置-->
    <div id="header-fixed"></div>
    <!--搜索框-->
    <div id="search-box">
        <div class="box">
            <form action="products.php">
                <input type="text" name="search" class="search-text">

                <input type="submit" value="搜索" class="search-submit">
            </form>
        </div>

    </div>


    <!-- 服务 -->
    <div id="header-service">

    </div>

</body>


</html>