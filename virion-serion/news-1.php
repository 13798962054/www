<?php
require("footer-header/header.php")
?>

<link rel="shortcut icon" href="typo3conf/ext/vs_sitepackage/Resources/Public/Images/favicon.ico"
type="image/x-icon">
<meta name="generator" content="TYPO3 CMS">


<link rel="stylesheet" href="css/jquery.pagination.css"/>
<link rel="stylesheet" type="text/css" href="css/news.css">
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="js/jquery.pagination.min.js"></script>
<script src="js/vue2.6.10.js"></script>

<div id="news_button">
	<a href="news-1.php" class="news_button_item" title="企业动态">企业动态</a>
	<a href="news-2.php" class="news_button_item" title="行业新闻">行业新闻</a>
</div>

<div id="news_title">
	<p>企业动态</p>
	<p>
		<img src="img/news_title_bg.png">
	</p>
</div>



<div id="app">
	<div class="news_two">	
		<ul class="news_two_ul">
			<!-- 列表循环体 -->
			<li>
				<div class="news_two_box wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
					<a :href="currentNews[0].href" target="false" class="news_two_img">
						<img class="js_thumb" title="" alt="" :src="currentNews[0].img"> </a>
						<a :href="currentNews[0].href" target="false" class="news_two_txt">
							<span>{{currentNews[0].title}}</span>
							<i>{{currentNews[0].info}}</i>
						</a>
						<p class="news_two_date">
							<span>
								<!--时间格式拼组-->
								{{currentNews[0].time}}
							</span>
						</p>
						<a :href="currentNews[0].href" target="false" class="ser_but news_two_but"><i><span class="i_buttontext">{{currentNews[0].more}}</span></i></a>
					</div>
				</li>
				<!-- 列表循环体 -->
				<li>
					<div class="news_two_box wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
						<a :href="currentNews[1].href" target="false" class="news_two_img">
							<img class="js_thumb" title="" alt="" :src="currentNews[1].img"> </a>
							<a :href="currentNews[1].href" target="false" class="news_two_txt">
								<span>{{currentNews[1].title}}</span>
								<i>{{currentNews[1].info}}</i>
							</a>
							<p class="news_two_date">
								<span>
									<!--时间格式拼组-->
									{{currentNews[1].time}}
								</span>
							</p>
							<a href="/news/131.html" target="false" class="ser_but news_two_but"><i><span class="i_buttontext">{{currentNews[1].more}}</span></i></a>
						</div>
					</li>
					<!-- 列表循环体 -->
					<li>
						<div class="news_two_box wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
							<a :href="currentNews[2].href" target="false" class="news_two_img">
								<img class="js_thumb" title="" alt="" :src="currentNews[2].img"> 
							</a>
							<a :href="currentNews[2].href" target="false" class="news_two_txt">
								<span>{{currentNews[2].title}}</span>
								<i>{{currentNews[2].info}}</i>
							</a>
							<p class="news_two_date">
								<span>
									<!--时间格式拼组-->
									{{currentNews[2].time}}
								</span>
							</p>
							<a href="/news/130.html" target="false" class="ser_but news_two_but"><i><span class="i_buttontext">{{currentNews[2].more}}</span></i></a>
						</div>
					</li>
					
				</ul>

			</div>
		</div>
		<!-- 局部分页器 -->
		<div class="box" style="margin:0 0 30px 40%">
			<div id="pagination3" class="page fl"></div>
		</div>
		<!--<img src="/typo3conf/ext/vs_sitepackage/Resources/Public/Images/dreiecke-darker.svg" width="940" id="dreiecke" />-->
	</div>


	<script src="js/index.js"></script>


	<?php
	require("footer-header/footer.php")
	?>