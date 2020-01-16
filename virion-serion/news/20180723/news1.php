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

    <div class="time">2018.07.23</div>
    <div class="newsd">
          <h3>国家卫计委发布疫苗接种异常反应监测知识</h3>
          <!-- JiaThis Button BEGIN -->
          <div class="clearfix" style=" margin-top:10px; margin-bottom:10px; text-align:right;"> </div>
          <!-- JiaThis Button END -->
          <p>　</p><div class="rich_media_thumb_wrp" id="media" style="margin: 0px 0px 6px; padding: 0px; color: rgb(51, 51, 51); font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: medium; letter-spacing: 0.544px; line-height: 25.6px; widows: 1;">
    <img alt="" src="/uploads/allimg/180723/1-1PH31A30DV.png" style="width: 560px; height: 368px;"></div>
<div class="rich_media_content " id="js_content" lang="=&quot;en&quot;" style="margin: 0px; padding: 0px; overflow: hidden; color: rgb(51, 51, 51); font-size: 17px; word-wrap: break-word; text-align: justify; position: relative; font-family: -apple-system-font, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;PingFang SC&quot;, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; letter-spacing: 0.544px; widows: 1;">
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        4月3日，国家卫生和计划生育委员会官方网站发布共十条“疑似预防接种异常反应（AEFI）监测相关知识”，全文如下：</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">一、什么是疑似预防接种异常反应（AEFI）？如何理解其含义？</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        AEFI是预防接种后发生的怀疑与预防接种有关的反应或事件。它主要包括三个方面的含义：①一定的时间关联：反应必须是在预防接种后一定的时间范围内发生；但有时间关联性，不等于有因果关联性；②一定的损害后果：反应必须存在一定的临床损害后果，如组织器官或功能方面的损害；③可疑的因果关联：反应与预防接种的疫苗可能存在因果关联，或暂时不能排除二者之间的因果关联；有因果关联性，必定存在时间关联性。</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">二、什么是异常反应？它有哪些特点？</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        异常反应是合格的疫苗在实施规范接种过程中或者实施规范接种后造成受种者机体组织器官、功能损害，相关各方均无过错的药品不良反应。异常反应的特点为：①由疫苗本身固有性质引起；②发生率低；③临床症状较重，一般需要临床处置；④反应多能恢复，极少数可能留有永久性损害；⑤接种疫苗合格；⑥接种实施规范。</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">三、异常反应有哪些临床损害？发生率有多高？</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        异常反应造成的临床损害包括过敏反应、神经系统反应和其他临床损害三大类；其中，过敏反应主要有过敏性皮疹、过敏性休克、喉头水肿、血管性水肿、血小板减少性紫癜、局部过敏坏死反应等；神经系统反应主要有热性惊厥、疫苗相关麻痹型脊髓灰质炎等；其他临床损害主要有无菌性脓肿、卡介苗引起的局部脓肿、淋巴结炎或淋巴管炎、骨炎、播散性卡介苗感染等。</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        严重的异常反应主要包括过敏性休克、过敏性喉头水肿、过敏性紫癜、血小板减少性紫癜、局部过敏坏死反应、热性惊厥、臂丛神经炎、疫苗相关麻痹型脊髓灰质炎、卡介苗骨炎、播散性卡介苗感染等。</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        不同品种疫苗的异常反应发生率是不同的。世界卫生组织对部分疫苗的异常反应研究显示，卡介苗引起的淋巴结炎、骨炎、播散性感染发生率分别为1-10/万剂次、1-700/100万剂次、0.19-1.56/100万剂次；乙肝疫苗引起的过敏性休克为1.1/100万剂次；脊灰减毒活疫苗引起的疫苗相关麻痹型脊髓灰质炎首剂次为1/75万剂次，后续剂次1/510万剂次；麻疹/麻风/麻腮风疫苗引起的过敏性休克为1/100万剂次。</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">四、哪些情形不属于异常反应？</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        以下情形不属于异常反应：</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        一般反应：在预防接种后发生的，由疫苗本身所固有的特性引起的，对机体只会造成一过性生理功能障碍的反应，主要有发热和局部红肿，同时可能伴有全身不适、倦怠、食欲不振、乏力等综合症状。</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        疫苗质量事故:由于疫苗质量不合格，接种后造成受种者机体组织器官、功能损害。</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        接种事故:由于在预防接种实施过程中违反预防接种工作规范、免疫程序、疫苗使用指导原则、接种方案，造成受种者机体组织器官、功能损害。</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        偶合症:受种者在接种时正处于某种疾病的潜伏期或者前驱期，接种后巧合发病。即无论接种与否，偶合症必定会发生，与预防接种的疫苗无关。</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        心因性反应:在预防接种实施过程中或接种后因受种者心理因素发生的个体或者群体的反应。</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">五、我国规定哪些AEFI需要报告？</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        AEFI报告范围按照发生时限分为以下情形：①24小时内：如过敏性休克、不伴休克的过敏反应（荨麻疹、斑丘疹、喉头水肿等）、中毒性休克综合征、晕厥、癔症等；②5天内：如发热（腋温≥38.6℃）、血管性水肿、全身化脓性感染（毒血症、败血症、脓毒血症）、接种部位发生的红肿（直径&gt;2.5cm）、硬结（直径&gt;2.5cm）、局部化脓性感染（局部脓肿、淋巴管炎和淋巴结炎、蜂窝组织炎）等；③15天内：如麻疹样或猩红热样皮疹、过敏性紫癜、局部过敏坏死反应、热性惊厥、癫痫、多发性神经炎、脑病、脑炎和脑膜炎等；④6周内：如血小板减少性紫癜、格林巴利综合征、疫苗相关麻痹型脊髓灰质炎等；⑤3个月内：如臂丛神经炎、接种部位发生的无菌性脓肿等；⑥接种卡介苗后1-12个月：如淋巴结炎或淋巴管炎、骨炎、播散性卡介苗感染等；⑦其他：怀疑与预防接种有关的其他严重AEFI。</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">六、谁报告AEFI？何时报告AEFI？向谁报告AEFI？</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        医疗机构、接种单位、疾病预防控制机构、药品不良反应监测机构、疫苗生产企业、疫苗批发企业及其执行职务的人员为AEFI的责任报告单位和报告人。受种者或其监护人可向责任报告单位和报告人报告。</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        责任报告单位和报告人发现属于报告范围的AEFI（包括接到受种者或其监护人的报告），应及时向受种者所在地的县级卫生计生行政部门、药品监督管理部门报告；发现怀疑与预防接种有关的死亡、严重残疾、群体性AEFI、对社会有重大影响的AEFI时，应在2小时内向受种者所在地的县级卫生计生行政部门、药品监督管理部门报告，县级卫生计生行政部门、药品监督管理部门逐级向上一级卫生计生行政部门、药品监督管理部门报告。AEFI的报告通过全国AEFI信息管理系统进行网络直报。</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">七、哪些AEFI需要调查？谁调查AEFI？何时调查？</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        除明确诊断的一般反应（如单纯发热、接种部位的红肿、硬结等）外，报告的其他AEFI均需调查。县级疾病预防控制机构对需要调查的AEFI，在接到报告后48小时内组织开展调查。怀疑与预防接种有关的死亡、严重残疾、群体性AEFI、对社会有重大影响的AEFI，由市级或省级疾病预防控制机构在接到报告后立即组织专家进行调查。</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">八、由谁进行AEFI调查诊断？何时作出调查诊断结论？判断依据是什么？</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        需要进行调查诊断的AEFI，由县级疾病预防控制机构组织专家进行调查诊断。死亡、严重残疾、群体性AEFI、对社会有重大影响的AEFI，由市级或省级疾病预防控制机构组织预防接种异常反应调查诊断专家组进行调查诊断。专家组由流行病学、临床医学、药学等专家组成。</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        AEFI的调查诊断结论在调查结束后30天内尽早作出。调查诊断专家组依据法律、行政法规、部门规章和技术规范，结合临床表现、医学检查结果和疫苗质量检验结果等，进行综合分析，作出调查诊断结论。</p>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        当受种方、接种单位、疫苗生产企业对预防接种异常反应调查诊断结论有争议时，按照《预防接种异常反应鉴定办法》的有关规定处理。</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">九、异常反应造成的哪些损害需要进行补偿？补偿费用由谁承担？</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        因预防接种异常反应造成受种者死亡、严重残疾或者器官组织损伤，应当给予受种者一次性经济补偿。接种第一类疫苗的异常反应补偿费用由省、自治区、直辖市人民政府财政部门在预防接种工作经费中安排；接种第二类疫苗的异常反应补偿费用由相关的疫苗生产企业承担。</p>
    <section style="margin: 0.8em 0px 0.5em; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; border: 0px;">
        <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
            <span style="margin: 0px; padding: 0.3em 0.5em; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; display: inline-block; border-radius: 0.5em; box-shadow: rgb(165, 165, 165) 0.2em 0.2em 0.1em; font-size: 1em; font-family: inherit; text-decoration: inherit; color: rgb(255, 255, 255); border-color: rgb(249, 110, 87); background-color: rgb(71, 193, 168);">十、全国预防接种异常反应监测信息的发布</span></section>
    </section>
    <p style="margin: 20px 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em; line-height: 1.5em;">
        全国预防接种异常反应监测信息由国家卫生计生委和食品药品监管总局委托中国疾病预防控制中心和国家药品不良反应监测中心联合发布。每年发布的信息为上一年度的全国预防接种异常反应总报告数和报告发生率以及主要的异常反应报告数等，以监测数据实际统计时间为准。</p>
    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; clear: both; min-height: 1em;">
        <strong style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;">来源：腾讯网 &nbsp;2016年4月3日</strong></p>
</div>
<br>
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