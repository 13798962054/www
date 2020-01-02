
// 鼠标点击放大镜时
var hasShowSearchBox = false
$("#header .top .menu .search .search-icon img").click(function () {
    if(hasShowSearchBox){
        $("#search-box").css("display", "none")
        hasShowSearchBox = false
    }else{
        // $("#search-box").css("height", "75px")
        $("#search-box").css("display", "block")
        hasShowSearchBox = true
    }
})

/* 搜索 */
var helangSearch={
    /* 元素集 */
    els:{},
    /* 搜索类型序号 */
    searchIndex:0,
    /* 火热的搜索列表 */
    hot:{
        /* 颜色 */
        color:['#ff2c00','#ff5a00','#ff8105','#fd9a15','#dfad1c','#6bc211','#3cc71e','#3cbe85','#51b2ef','#53b0ff'],
        /* 列表 */
        list:[
            "呼吸道合胞病毒",
            "肺炎衣原体",
            "肺炎支原体",
            "腺病毒",
            "嗜肺军团菌",
            "流感病毒",
            "柯萨奇病毒",
            "埃可病毒",
            "百日咳杆菌",
            "肠道病毒",
            "Q热立克次氏体",
            "副流感病毒"
        ]
    },
    /* 初始化 */
    init:function(){
        var _this=this;
        this.els={
            pickerBtn:$(".picker"),
            pickerList:$(".picker-list"),
            logo:$(".logo"),
            hotList:$(".hot-list"),
            input:$("#search-input"),
            button:$(".searchButton"),
            range:$("#search-range")
        };

        /* 设置热门搜索列表 */
        this.els.hotList.html(function () {
            var str='';
            $.each(_this.hot.list,function (index,item) {
                str+='<a href="products.php?keyword='+ item + '&range=all' +'" target="_self">'
                    +'<div class="number" style="color: '+_this.hot.color[index]+'">'+(index+1)+'</div>'
                    +'<div>'+item+'</div>'
                    +'</a>';
            });
            return str;
        });

        /* 注册事件 */
        /* 搜索类别选择按钮 */
        this.els.pickerBtn.click(function () {
            if(_this.els.pickerList.is(':hidden')) {
                setTimeout(function () {
                    _this.els.pickerList.show();
                },100);
            }
        });
        /* 搜索类别选择列表 */
        this.els.pickerList.on("click",">li",function () {
            $("#search-range").val($(this).index())
            _this.els.logo.css("background-image",('url(img/'+$(this).data("logo")+')'));
            _this.searchIndex=$(this).index();
            _this.els.pickerBtn.html($(this).html())

        });
        /* 搜索 输入框 点击*/
        this.els.input.click(function () {
            if(!$(this).val()){
                setTimeout(function () {
                    _this.els.hotList.show();
                },100);
            }
        });
        /* 搜索 输入框 输入*/
        this.els.input.on("input",function () {
            if($(this).val()){
                _this.els.hotList.hide();
            }
        });
        /* 搜索按钮 */
        this.els.button.click(function () {
            var searchArr=['all','抗原','抗体','质控品', 'ELISA试剂盒', "原辅料"];
            // alert(searchArr[_this.searchIndex]+"搜索："+_this.els.input.val());
            localStorage.setItem("products", null);
            if(_this.searchIndex == 0)
                window.location.href = "products.php?keyword=" + _this.els.input.val() + "&range=all"
            else
                window.location.href = "products.php?keyword=" + _this.els.input.val() + "&range=" + _this.searchIndex
        });

        /* 文档 */
        $(document).click(function () {
            _this.els.pickerList.hide();
            _this.els.hotList.hide();
        });
        /* 搜索按钮 */
    }
};



$(function () {
    helangSearch.init();
})