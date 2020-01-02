<?php require_once ("header-footer/header.php"); ?>
		<!--Breadcrumb Tow Start-->
		<div class="breadcrumb-tow mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-title">
                            <h1>个人中心</h1>
                        </div>
                        <div class="breadcrumb-content breadcrumb-content-tow">
                            <ul>
                                <li><a href="index.php">首页</a></li>
                                <li class="active">个人中心</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--Breadcrumb Tow End-->
		<!--My Account Area Strat-->
		<div class="my-account white-bg mb-110">
            <div class="container">
                <div class="account-dashboard">
                   <div class="dashboard-upper-info">
                       <div class="row align-items-center no-gutters">
                           <div class="col-lg-3 col-md-12">
                               <div class="d-single-info">
                                   <p class="user-name">您好<span>yourmail@info</span></p>
                                   <p>(不是您的邮箱？<a href="#">退出登陆</a>)</p>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                               <div class="d-single-info">
                                   <p>客服邮箱</p>
                                   <p>csmedlab@126.com</p>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-12">
                               <div class="d-single-info">
                                   <p>技术支持</p>
                                   <p>csmedlab@126.com</p>
                               </div>
                           </div>
                           <div class="col-lg-2 col-md-12">
                               <div class="d-single-info text-lg-center">
                                   <a class="view-cart" href="cart.php"><i class="fa fa-cart-plus"></i>查看购物车</a>
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-2">
                            <!-- Nav tabs -->
                            <ul class="nav flex-column dashboard-list" role="tablist">
                                <li><a class="nav-link active" data-toggle="tab" href="#dashboard">个人网络</a></li>
                                <li> <a class="nav-link" data-toggle="tab" href="#orders">购物清单</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#downloads">附件下载</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#address">我的地址</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#account-details">账号设置</a></li>
                                <li><a class="nav-link" href="login-register.php">退出登陆</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-10">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard-content">
                                <div id="dashboard" class="tab-pane fade show active">
                                    <h3>个人网络</h3>
                                    <p>个人网络中心</p>
                                </div>
                                <div id="orders" class="tab-pane fade">
                                    <h3>购物清单</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>序号</th>
                                                    <th>日期</th>
                                                    <th>状态</th>
                                                    <th>价格</th>
                                                    <th>操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2018年5月10号</td>
                                                    <td>配送中</td>
                                                    <td>1 * ￥25.00</td>
                                                    <td><a class="view" href="cart.php">查看详细</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>2018年5月10号</td>
                                                    <td>配送中</td>
                                                    <td>1 * ￥17.00</td>
                                                    <td><a class="view" href="cart.php">查看详细</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="downloads" class="tab-pane fade">
                                    <h3>附件下载</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>产品</th>
                                                    <th>更新日期</th>
                                                    <th>到期时间</th>
                                                    <th>下载</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Haven - Free Real Estate PSD Template</td>
                                                    <td>2019年8月5号</td>
                                                    <td>永不</td>
                                                    <td><a class="view" href="#">下载</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Nevara - ecommerce html template</td>
                                                    <td>2019年1月1号</td>
                                                    <td>永不</td>
                                                    <td><a class="view" href="#">下载</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="address" class="tab-pane">
<!--                                   <p>以下地址将</p>-->
                                    <h4 class="billing-address">默认购物地址</h4>
                                    <a class="view" href="#">编辑</a>
                                    <p>广东省深圳市宝安区</p>
                                    <p>清水大道108号</p>
                                </div>
                                <div id="account-details" class="tab-pane fade">
                                    <h3>账号设置</h3>
                                    <div class="login">
                                        <div class="login-form-container">
                                            <div class="account-login-form">
                                                <form action="#">
<!--                                                    <p>Already have an account? <a href="#">Log in instead!</a></p>-->
<!--                                                    <label>Social title</label>-->
                                                    <div class="input-radio">
                                                        <span class="custom-radio"><input name="id_gender" value="1" type="radio"> 男</span>
                                                        <span class="custom-radio"><input name="id_gender" value="1" type="radio"> 女</span>
                                                    </div>
                                                    <label>姓名</label>
                                                    <input name="name" type="text">
                                                    <label>邮箱</label>
                                                    <input name="email-name" type="text">

                                                    <label>出生日期</label>
                                                    <input name="birthday" value="" placeholder="MM/DD/YYYY" type="text">
                                                    <span class="example">
                                                      (E.g.: 05/31/1970)
                                                    </span>
                                                    <span class="custom-checkbox">
                                                        <input name="optin" value="1" type="checkbox">
                                                        <label>邮箱订阅</label>
                                                    </span>
<!--                                                    <span class="custom-checkbox">-->
<!--                                                        <input name="newsletter" value="1" type="checkbox">-->
<!--                                                        <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>-->
<!--                                                    </span>-->
                                                    <div class="button-box">
                                                        <button type="submit" class="default-btn">save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
		                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--My Account Area End-->
		<!--Brand Area Start-->
		<div class="brand-area mb-105">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="brand-active">
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                      <a href="#"><img src="img/brand/brand1.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                      <a href="#"><img src="img/brand/brand2.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                      <a href="#"><img src="img/brand/brand3.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                      <a href="#"><img src="img/brand/brand4.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                      <a href="#"><img src="img/brand/brand5.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                      <a href="#"><img src="img/brand/brand3.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                      <a href="#"><img src="img/brand/brand4.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                      <a href="#"><img src="img/brand/brand5.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Brand Area End-->

		<!-- Modal Area Strat -->
        <div class="modal fade" id="open-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <!--Modal Img-->
                    <div class="col-md-5">
                        <!--Modal Tab Content Start-->
                        <div class="tab-content product-details-large" id="myTabContent">
                          <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/large/single-product1.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/large/single-product2.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/large/single-product3.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/large/single-product4.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/large/single-product5.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide6" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/large/single-product6.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                        </div>
                        <!--Modal Content End-->
                        <!--Modal Tab Menu Start-->
                        <div class="single-product-menu">
                            <div class="nav single-slide-menu owl-carousel" role="tablist">
                                <div class="single-tab-menu img-full">
                                    <a class="active" data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="img/single-product/small/single-product1.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="img/single-product/small/single-product2.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="img/single-product/small/single-product3.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="img/single-product/small/single-product4.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img src="img/single-product/small/single-product5.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-6" href="#single-slide6"><img src="img/single-product/small/single-product6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--Modal Tab Menu End-->
                    </div>
                    <!--Modal Img-->
                    <!--Modal Content-->
                    <div class="col-md-7">
                        <div class="modal-product-info">
                            <h1>Sit voluptatem</h1>
                            <div class="modal-product-price">
                               <span class="old-price">$74.00</span>
                               <span class="new-price">$69.00</span>
                           </div>
                           <a href="single-product.php" class="see-all">See all features</a>
                           <div class="add-to-cart quantity">
                                <form class="add-quantity" action="#">
                                     <div class="modal-quantity">
                                         <input type="number" value="1">
                                     </div>
                                    <div class="add-to-link">
                                        <button class="form-button" data-text="add to cart">add to cart</button>
                                    </div>
                                </form>
                           </div>
                           <div class="cart-description">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus.</p>
                           </div>
                            <div class="social-share">
                               <h3>Share this product</h3>
                               <ul class="socil-icon2">
                                   <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                   <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                   <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                   <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                               </ul>
                            </div>
                        </div>
                    </div>
                    <!--Modal Content-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Area End -->
	</div>

<?php
require_once ("header-footer/footer.php");
?>