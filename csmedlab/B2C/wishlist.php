<?php require_once ("header-footer/header.php"); ?>
		<!--Breadcrumb Tow Start-->
		<div class="breadcrumb-tow mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-title">
                            <h1>心愿清单</h1>
                        </div>
                        <div class="breadcrumb-content breadcrumb-content-tow">
                            <ul>
                                <li><a href="index.php">首页</a></li>
                                <li class="active">心愿清单</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--Breadcrumb Tow End-->
		<!--Wishlist Area Strat-->
		<div class="wishlist-area mb-110">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <form action="#">
		                    <div class="table-content table-responsive">
		                        <table class="table">
		                            <thead>
		                                <tr>
		                                    <th class="plantmore-product-remove">删除商品</th>
		                                    <th class="plantmore-product-thumbnail">商品简图</th>
		                                    <th class="cart-product-name">商品名称</th>
		                                    <th class="plantmore-product-price">单价</th>
		                                    <th class="plantmore-product-stock-status">库存状态</th>
		                                    <th class="plantmore-product-add-cart">加入购物车</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr>
		                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
		                                    <td class="plantmore-product-thumbnail"><a href="#"><img src="img/product-thumb/product1.jpg" alt=""></a></td>
		                                    <td class="plantmore-product-name"><a href="#">迷你旋涡混匀器</a></td>
		                                    <td class="plantmore-product-price"><span class="amount">￥23.39</span></td>
		                                    <td class="plantmore-product-stock-status"><span class="in-stock">有货</span></td>
		                                    <td class="plantmore-product-add-cart"><a href="#">加入购物车</a></td>
		                                </tr>
		                                <tr>
		                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
		                                    <td class="plantmore-product-thumbnail"><a href="#"><img src="img/product-thumb/product2.jpg" alt=""></a></td>
		                                    <td class="plantmore-product-name"><a href="#">Pop-Bio凝胶成像仪Vü</a></td>
		                                    <td class="plantmore-product-price"><span class="amount">￥30.50</span></td>
		                                    <td class="plantmore-product-stock-status"><span class="in-stock">有货</span></td>
		                                    <td class="plantmore-product-add-cart"><a href="#">加入购物车</a></td>
		                                </tr>
		                                <tr>
		                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
		                                    <td class="plantmore-product-thumbnail"><a href="#"><img src="img/product-thumb/product3.jpg" alt=""></a></td>
		                                    <td class="plantmore-product-name"><a href="#">移液器</a></td>
		                                    <td class="plantmore-product-price"><span class="amount">￥40.19</span></td>
		                                    <td class="plantmore-product-stock-status"><span class="out-stock">售空</span></td>
		                                    <td class="plantmore-product-add-cart"><a href="#">加入购物车</a></td>
		                                </tr>
		                            </tbody>
		                        </table>
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Wishlist Area End-->
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
                               <span class="old-price">￥74.00</span>
                               <span class="new-price">￥69.00</span>
                           </div>
                           <a href="single-product.php" class="see-all">See all features</a>
                           <div class="add-to-cart quantity">
                                <form class="add-quantity" action="#">
                                     <div class="modal-quantity">
                                         <input type="number" value="1">
                                     </div>
                                    <div class="add-to-link">
                                        <button class="form-button" data-text="加入购物车">加入购物车</button>
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