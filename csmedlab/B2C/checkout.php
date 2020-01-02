<?php require_once ("header-footer/header.php"); ?>
		<!--Breadcrumb Tow Start-->
		<div class="breadcrumb-tow mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-title">
                            <h1>结算</h1>
                        </div>
                        <div class="breadcrumb-content breadcrumb-content-tow">
                            <ul>
                                <li><a href="index.php">首页</a></li>
                                <li class="active">结算</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--Breadcrumb Tow End-->
		<!--Checkout Area Strat-->
		<div class="checkout-area mb-80">
		    <div class="container">
		        <div class="row">
                    <div class="col-12">
                        <div class="coupon-accordion">
                            <!--Accordion Start-->
                            <h3>已有账号? <span id="showlogin">点击登陆</span></h3>
                            <div id="checkout-login" class="coupon-content">
                                <div class="coupon-info">
<!--                                    <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>-->
                                    <form action="#">
                                        <p class="form-row-first">
                                            <label>账号<span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row-last">
                                            <label>密码<span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row">
                                            <input value="登陆" type="submit">
                                            <label>
                                                <input type="checkbox">
                                                 记住账号
                                            </label>
                                        </p>
                                        <p class="lost-password"><a href="#">忘记密码?</a></p>
                                    </form>
                                </div>
                            </div>
                            <!--Accordion End-->
                            <!--Accordion Start-->
                            <h3>拥有兑换券? <span id="showcoupon">点击添加兑换券</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-content">
                                <div class="coupon-info">
                                    <form action="#">
                                        <p class="checkout-coupon">
                                            <input placeholder="兑换码" type="text">
                                            <input value="添加" type="submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!--Accordion End-->
                        </div>
                    </div>
		        </div>
		        <div class="row">
		            <div class="col-lg-6 col-12">
		                <form action="#">
		                    <div class="checkbox-form">
		                        <h3>账单明细</h3>
		                        <div class="row">
		                            <div class="col-md-12">
		                                <div class="country-select clearfix">
		                                    <label>省份<span class="required">*</span></label>
		                                    <select class="wide">
                                                <option value="0" selected="selected">北京</option>
                                                <option value="1">天津</option>
                                                <option value="2">河北省</option>
                                                <option value="3">山西省</option>
                                                <option value="4">内蒙古自治区</option>
                                                <option value="5">辽宁省</option>
                                                <option value="6">吉林省</option>
                                                <option value="7">黑龙江省</option>
                                                <option value="8">上海</option>
                                                <option value="9">江苏省</option>
                                                <option value="10">浙江省</option>
                                                <option value="11">安徽省</option>
                                                <option value="12">福建省</option>
                                                <option value="13">江西省</option>
                                                <option value="14">山东省</option>
                                                <option value="15">河南省</option>
                                                <option value="16">湖北省</option>
                                                <option value="17">湖南省</option>
                                                <option value="18">广东省</option>
                                                <option value="19">广西壮族自治区</option>
                                                <option value="20">海南省</option>
                                                <option value="21">重庆</option>
                                                <option value="22">四川省</option>
                                                <option value="23">贵州省</option>
                                                <option value="24">云南省</option>
                                                <option value="25">西藏自治区</option>
                                                <option value="26">陕西省</option>
                                                <option value="27">甘肃省</option>
                                                <option value="28">青海省</option>
                                                <option value="29">宁夏回族自治区</option>
                                                <option value="30">新疆维吾尔自治区</option>
                                                <option value="31">台湾省</option>
                                                <option value="32">香港特别行政区</option>
                                                <option value="33">澳门特别行政区</option>
                                                <option value="34">海外</option>
                                           </select>
		                                </div>
		                            </div>
		                            <div class="col-md-12">
		                                <div class="checkout-form-list">
		                                    <label>详细地址<span class="required">*</span></label>
		                                    <input name="address-detail" type="text">
		                                </div>
		                            </div>

		                            <div class="col-md-6">
		                                <div class="checkout-form-list">
		                                    <label>姓名</label>
		                                    <input name="name" type="text">
		                                </div>
		                            </div>
		                            <div class="col-md-6">
		                                <div class="checkout-form-list">
		                                    <label>电话<span class="required">*</span></label>
		                                    <input name="phone" type="text">
		                                </div>
		                            </div>

		                            <div class="col-md-12">
		                                <div class="checkout-form-list create-acc">
		                                    <input id="cbox" type="checkbox">
		                                    <label>创建一个新的用户?</label>
		                                </div>
		                                <div id="cbox-info" class="checkout-form-list create-account">
<!--		                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>-->
		                                    <label>棉麻<span class="required">*</span></label>
		                                    <input placeholder="password" type="password">
		                                </div>
		                            </div>
		                        </div>
		                        <div class="different-address">
		                            <div class="ship-different-title">
		                                <h3>
                                            <label>使用默认地址?</label>
                                            <input id="ship-box" type="checkbox">
                                        </h3>
		                            </div>
		                            <div id="ship-box-info" class="row">
		                                <div class="col-md-12">
                                            <div class="country-select clearfix">
                                                <label>默认地址列表<span class="required">*</span></label>
                                                <select class="wide">
                                                      <option value="volvo">家</option>
                                                      <option value="saab">公司</option>
                                                      <option value="mercedes">学校</option>
                                               </select>
                                            </div>
                                        </div>

		                            </div>
		                            <div class="order-notes">
		                                <div class="checkout-form-list">
		                                    <label>备注</label>
		                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder=""></textarea>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </form>
		            </div>
		            <div class="col-lg-6 col-12">
		                <div class="your-order">
		                    <h3>您的订单</h3>
		                    <div class="your-order-table table-responsive">
		                        <table class="table">
		                            <thead>
		                                <tr>
		                                    <th class="cart-product-name">商品</th>
		                                    <th class="cart-product-total">总价</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr class="cart_item">
		                                  <td class="cart-product-name">OS-10<strong class="product-quantity"> × 1</strong></td>
		                                  <td class="cart-product-total"><span class="amount">￥100</span></td>
		                                </tr>
		                                <tr class="cart_item">
		                                  <td class="cart-product-name">OS-10<strong class="product-quantity"> × 1</strong></td>
		                                  <td class="cart-product-total"><span class="amount">￥90</span></td>
		                                </tr>
		                            </tbody>
		                            <tfoot>
		                                <tr class="cart-subtotal">
		                                    <th>商品总价</th>
		                                    <td><span class="amount">￥190</span></td>
		                                </tr>
		                                <tr class="order-total">
		                                    <th>合计</th>
		                                    <td><strong><span class="amount">￥190</span></strong></td>
		                                </tr>
		                            </tfoot>
		                        </table>
		                    </div>
		                    <div class="payment-method">
		                        <div class="payment-accordion">
		                            <div id="accordion">
                                      <div class="card">
                                        <div class="card-header" id="#payment-1">
                                          <h5 class="panel-title">
                                            <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                              微信支付
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                          <div class="card-body">
                                            <p>微信支付须知</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="#payment-2">
                                          <h5 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              支付宝支付
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                          <div class="card-body">
                                            支付宝支付须知
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="#payment-3">
                                          <h5 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              货到付款
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                          <div class="card-body">
                                            货到付款流程
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="order-button-payment">
                                        <input value="支付" type="submit">
                                    </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Checkout Area End-->
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