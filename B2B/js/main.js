//页面初始化时，将导航栏下的移动条移动到相应标签下方
//改变（所有商品分类文字）

var list = $("#top-menu ul li");
// var href_str = document.location.href
// href_str = href_str.substr(href_str.lastIndexOf("\/") + 1)
// href_str = href_str.match(/(\S*).php/)[1]
// alert(href_str)
for( var i = 1 ; i < list.length + 1 ; i++ ){

    if( $("ul li:nth-child(" + i + ")").hasClass("active") ){
        $("ul li:nth-child(" + i + ")").removeClass("active")
    }
}




$(function(){

    //鼠标浮动到标题栏时
    $("#top-menu .container .row .menu-list li").hover(function () {
        $(this).find(".ink-bar").show()
    },function () {
        $(this).find(".ink-bar").hide()
    })


    //首页->所有商品分类->list自适应
    $(window).resize(function () {
        var slide_list_stuffs_li_width = $(".slide-list-stuffs-li").outerWidth()
        console.log(slide_list_stuffs_li_width)
        $(".list-hover-content").css({left :slide_list_stuffs_li_width + 'px'})
    })
});
//首页->所有商品分类->list自适应
var slide_list_stuffs_li_width = $(".slide-list-stuffs-li").outerWidth()
console.log(slide_list_stuffs_li_width)
$(".list-hover-content").css({left :slide_list_stuffs_li_width + 'px'})


//禁止页面放大缩小
