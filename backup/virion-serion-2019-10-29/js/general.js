// 每三秒换一次图
var slide_controller = setInterval("changePic()", 3000)
var slide_index = 1

// 待修改
function changePic(index) {
    if(index != undefined) {
        slide_index = index
    }
    // 影藏
    $("#slide .pic:nth-child(" + slide_index + ")").css("opacity", "0")
    $("#slide .pic").css("z-index", "1")
    $("#slide .pic:nth-child(" + slide_index + ")").css("z-index", "2")
    // 共4张轮播图
    if (slide_index == 4) {
        slide_index = 1
    } else {
        slide_index++
    }
    // 显示
    $("#slide .pic:nth-child(" + slide_index + ")").css("opacity", "1")
}

function stopInterval() {
    clearInterval(slide_controller)
}

function startInterval() {
    slide_controller = setInterval("changePic()", 3000)
}


// 鼠标点击放大镜时
var hasShowSearchBox = false
$("#header .top .menu .search .search-icon img").click(function () {
    if(hasShowSearchBox){
        $("#search-box").css("height", "0")
        hasShowSearchBox = false
    }else{
        $("#search-box").css("height", "50px")

        hasShowSearchBox = true
    }
})

// 左侧nav点击事件
$(".first").click(function () {
    if ($(this).hasClass('active')) {
        //如果有就让它的兄弟元素隐藏
        $(this).next().hide();
        $(this).removeClass("active")

        //改变当前标题的箭头方向
        $(this).removeClass("hideContent")
        $(this).addClass("showContent")
    } else {
        //恢复其他first的箭头样式
        $(".first").removeClass("hideContent")
        $(".first").addClass("showContent")
        $(".first-content").hide()
        //移出所有的first-title的活动标记
        $(".first").removeClass("active")
        //改变当前标题的箭头方向
        $(this).removeClass("showContent")
        $(this).addClass("hideContent")
        //添加类
        $(this).toggleClass('active');
        //显示它的下一个兄弟节点
        $(this).next().show();
    }
})

$(".second").click(function () {
    if ($(this).hasClass('active')) {

        $(this).removeClass("active")
        //改变当前标题的箭头方向
        //有hideContent类属性时候
        if($(this).hasClass("hideContent")){
            $(this).removeClass("hideContent")
            $(this).addClass("showContent")
            //如果有就让它的兄弟元素隐藏
            $(this).next().hide();
        }
    } else {
        $(".second").removeClass("active")
        $(this).toggleClass('active');  //这个作用是 点击有这个类再次点击就没这个类
        //有showContent类属性时候
        if($(this).hasClass("showContent")) {
            //恢复其他second的箭头样式
            $(".second-hasContent").removeClass("hideContent")
            $(".second-hasContent").addClass("showContent")
            $(".second-content").hide()
            //改变当前标题的箭头方向
            $(this).removeClass("showContent")
            $(this).addClass("hideContent")

            $(this).next().show();  //这句作用是让它的.one元素下面的 其他元素移除这个类
        }
    }
})

// 默认让（0， 0）显示出来
// $(".default-active").addClass('active');
// $(".default-active").next().show();


// 重定向产品页面，展示产品列表
function toProducts(a, b, c) {
    if(c != undefined)
        localStorage.setItem("products", JSON.stringify([a, b, c]));
    else if(b != undefined)
        localStorage.setItem("products", JSON.stringify([a, b]));
    else if(a != undefined)
        localStorage.setItem("products", JSON.stringify([a]));
    window.location.href = "products.php";
}

// Cookie 保存当前产品展示项
