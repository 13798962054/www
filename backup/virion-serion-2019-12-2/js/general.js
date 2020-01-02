

//首页导航栏
// 每三秒换一次图
var slide_controller = setInterval("changePic()", 3000)
var slide_index = 1

// 待修改
function changePic(index) {
    if(index != undefined)
        slide_index = index

    // 影藏
    $("#slide .pic:nth-child(" + slide_index + ")").css("opacity", "0")
    $("#slide .pic").css("z-index", "1")
    $("#slide .pic:nth-child(" + slide_index + ")").css("z-index", "2")
    // 显示
    $("#slide .pic:nth-child(" + slide_index + ")").css("opacity", "1")

    if(index == undefined){
        // 共4张轮播图
        if (slide_index >= 5) {
            slide_index = 1
        } else {
            slide_index++
        }
    }
}

function stopInterval() {
    clearInterval(slide_controller)
}

function startInterval() {
    slide_controller = setInterval("changePic()", 3000)
}

function leftSlide() {
    var index = slide_index - 1
    if(index < 1)
        index = 5
    changePic(index)
    console.log(slide_index)
}

function rightSlide() {
    var index = slide_index + 1
    if(index > 5)
        index = 1
    changePic(index)
}

//导航栏鼠标移入移出事件
$("#slide").mouseenter(function () {
    console.log("in")
    stopInterval()
})

$("#slide").mouseleave(function () {
    console.log("out")
    startInterval()
})

// layui导航栏
// layui.use(['carousel', 'form'], function(){
//     var carousel = layui.carousel
//
//     //改变下时间间隔、动画类型、高度
//     var crl = carousel.render({
//         elem: '#slide'
//         ,interval: 5000
//         ,anim: 'fade'
//         ,height: '480px'
//         ,width: '100%'
//         // ,full: true
//         ,autoplay: false
//         ,trigger: null
//     });
//     //轮播图切换事件
//     // carousel.on("change(slide)", function () {
//     //     console.log(crl.config)
//     //     // crl.config.full = true
//     //     重载
//     //     crl.reload({full: true})
//     // })
// });



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

