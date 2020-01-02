/**
  * Created by Administrator on 15-1-9.
  */
 //滑动条对象
 function Slider(swipestart, min, max, index, IsOk, lableIndex) {
     var _self = this;
     //是否开始滑动
     _self.swipestart = swipestart;
     //最小值
     _self.min = min;
     //最大值
     _self.max = max;
     //当前滑动条所处的位置
     _self.index = index;
     //是否滑动成功
     _self.IsOk = IsOk;
     //鼠标在滑动按钮的位置
     _self.lableIndex = lableIndex;
 }
 
 //初始化
 Slider.prototype.Init = function () {
     document.getElementById("btnSubmit").disabled = true;
     var _self = this;
     $("#label").on("mousedown", function (event) {
         var e = event || window.event;
         _self.lableIndex = e.clientX - this.offsetLeft;
         _self.HanderIn();
     });
 
     $("#pageSlide").on("mousemove", function (event) {
         _self.HanderMove(event);
     });
 
     $(document).on("mouseup", function (event) {
         _self.HanderOut();
     });
 
     $("#label").on("touchstart", function (event) {
         try {
             var e = event || window.event;
             //event.originalEvent.changedTouches[0].clientX //event.originalEvent.pageX
             _self.lableIndex = event.originalEvent.changedTouches[0].clientX - this.offsetLeft;
             _self.HanderIn();
         } catch (e) {
             console.log(navigator.appVersion + "不支持TouchEvent事件！" + e.message);
         }
     });
 
     $("#pageSlide").on("touchmove", function (event) {
         try {
             _self.HanderMove(event, "mobile");
         } catch (e) {
             console.log(navigator.appVersion + "不支持touchmove事件！" + e.message);
         }
 
     });
 
     $(document).on("touchend", function (event) {
         try {
             _self.HanderOut();
         } catch (e) {
             console.log(navigator.appVersion + "不支持touchend事件！" + e.message);
         }
 
     });
 }
 
 //鼠标/手指接触滑动按钮
 Slider.prototype.HanderIn = function () {
     var _self = this;
     _self.swipestart = true;
     _self.min = 0;
     _self.max = $("#slider").width();
     if(_self.lableIndex<0){_self.lableIndex=0;}
 }
 
 //鼠标/手指移出
 Slider.prototype.HanderOut = function () {
     var _self = this;
     //停止
     _self.swipestart = false;
     _self.Move();
 }
 
 //鼠标/手指移动
 Slider.prototype.HanderMove = function (event, type) {
     var _self = this;
     if (_self.swipestart) {
         event.preventDefault();
         var event = event || window.event;
         if (type == "mobile") {
             //event.originalEvent.changedTouches[0].clientX //event.originalEvent.pageX
             _self.index = event.originalEvent.changedTouches[0].clientX - _self.lableIndex;
         } else {
             _self.index = event.clientX - _self.lableIndex;
         }
         _self.Move();
     }
 }
 
 //鼠标/手指移出
 Slider.prototype.Move = function () {
     var _self = this;
     //$(".warn").text("index:" + _self.index + "， max" + _self.max + ",lableIndex:" + _self.lableIndex + ",value:" + $("#captcha").val() + " date:" + new Date().getUTCDate());
     //$(".warn").text("max:"+ _self.max +",index:"+_self.index +",lableIndex:"+_self.lableIndex);
     if ((_self.index + 20) >= _self.max) {
         _self.index = _self.max - 20;
     }
 
     if (_self.index < 0) {
         _self.index = _self.min;
     }
     $(".label").css("left", _self.index + "px");
     if (_self.index == (_self.max - 20)) {
         //停止
         _self.swipestart = false;
         _self.IsOk = true;//解锁
         $("#captcha").val(1);
 
         var style = {"filter": "alpha(opacity=1)",
             "-moz-opacity": "1", "opacity": "1"}
         $(".ui-btn.ui-input-btn.ui-corner-all.ui-shadow").css(style);
 
         $("#slider").css("background-color", "#E5EE9F");
         $("#lableTip").text("Thank You!");
         document.getElementById("btnSubmit").disabled = false;
         document.getElementById("btnSubmit").parentNode.classList.remove("ui-state-disabled");
     } else {
         _self.IsOk = false;//未解锁
         $("#captcha").val(0);
         var style = { "filter": "alpha(opacity=0.2)",
             "-moz-opacity": "0.2", "opacity": "0.2"}
         $(".ui-btn.ui-input-btn.ui-corner-all.ui-shadow").css(style);
         $("#slider").css("background-color", "#FDEB9C");
         $("#lableTip").text("Slide to confirm I am human!");
         document.getElementById("btnSubmit").disabled = true;
 
         document.getElementById("btnSubmit").parentNode.classList.add("ui-state-disabled");
 
     }
 }