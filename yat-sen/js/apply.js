var vm = new Vue({
  el:"#myStep",
  data:{
    member: [1, 0, 0, 0, 0],
  },
  methods:{
    addMember: function(){
      for(let i = 1 ; i < 5 ; i++){
        console.log(this.member[i])
        if(this.member[i] == 0){
          this.$set(this.member, i, 1)
          break;
        }
        if(i == 4){
          alert("最多只能添加五个")
        }
      }
      
    },
    deleteMember: function(index){
      this.$set(this.member, index, 0)
    }
  }

})

// 显示预览图
//回调函数,调用该方法传一个文件路径，该变背景图
function showimg(url, index, a){
  
  var div = document.getElementById("img-file-div" + index);
  div.style.backgroundImage = "url("+url+")";
  document.getElementById("member-img" + index).value = url;
}




$(function() {

  var step= $("#myStep").step({
    animate:true,
    // 默认在第一步
    initStep:3,
    speed:1000
  });


  $(".preBtn").click(function(event) {
    var yes=step.preStep();

  });
  $(".nextBtn").click(function(event) {
    var yes = step.nextStep()
  })


  // $("#applyBtn").click(function(event) {
  //   var yes=step.nextStep();

  // });
  // $("#submitBtn").click(function(event) {
  //   var yes=step.nextStep();
  // });
  // $("#goBtn").click(function(event) {
  //   var yes=step.goStep(3);

  // });


});



/* 
 * jQuery step
 */
(function (factory) {
    "use strict";
    if (typeof define === 'function') {
        // using CMD; register as anon module
      define.cmd&&define('jquery-step', ['jquery'], function (require, exports, moudles) {
            var $=require("jquery");
            factory($);
            return $;
        });
      define.amd&&define(['jquery'], factory);
    } else {
        // no CMD; invoke directly
        factory( (typeof(jQuery) != 'undefined') ? jQuery : window.Zepto );
    }
}

(function($){
  $.fn.step = function(options) { 
      var opts = $.extend({}, $.fn.step.defaults, options);
      var size=this.find(".step-header li").length;
      var barWidth=opts.initStep<size?100/(2*size)+100*(opts.initStep-1)/size : 100;
      var curPage=opts.initStep;

      this.find(".step-header").prepend("<div class=\"step-bar\"><div class=\"step-bar-active\"></div></div>");
      this.find(".step-list").eq(opts.initStep-1).show();
      if (size<opts.initStep) {
        opts.initStep=size;
      }
      if (opts.animate==false) {
        opts.speed=0;
      }
      this.find(".step-header li").each(function (i, li) {
        if (i<opts.initStep){
          $(li).addClass("step-active");
        }
        $(li).prepend("<span>"+(i+1)+"</span>");
    });
    this.find(".step-header li").css({
      "width": 100/size+"%"
    });
    this.find(".step-header").show();
    this.find(".step-bar-active").animate({
        "width": barWidth+"%"},
        opts.speed, function() {
        
    });

      this.nextStep=function() {
        if (curPage>=size) {
          return false;
        }
        return this.goStep(curPage+1);
      }

      this.preStep=function() {
        if (curPage<=1) {
          return false;
        }
        return this.goStep(curPage-1);
      }

      this.goStep=function(page) {
        if (page ==undefined || isNaN(page) || page<0) {
          if(window.console&&window.console.error){
            console.error('the method goStep has a error,page:'+page);
          }
        return false;
        }
        curPage=page;
        this.find(".step-list").hide();
        this.find(".step-list").eq(curPage-1).show();
        this.find(".step-header li").each(function (i, li) {
          $li=$(li);
          $li.removeClass('step-active');
          if (i<page){
            $li.addClass('step-active');
            if(opts.scrollTop){
             $('html,body').animate({scrollTop:0}, 'slow');
            }
        }
      });
      barWidth=page<size?100/(2*size)+100*(page-1)/size : 100;
        this.find(".step-bar-active").animate({
          "width": barWidth+"%"},
          opts.speed, function() {
            
        });
        return true;
      }
      return this;
  };
   
  $.fn.step.defaults = {
      animate:true,
      speed:500,
    initStep:1,
    scrollTop:true
  };

}));  