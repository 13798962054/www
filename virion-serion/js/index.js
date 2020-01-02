var news =
    [
        [
            {
                title: "新起点，再出发",
                time: "2019.12.31",
                href: "/news/20191231/news1.php",
                img: "/news/20191231/img/3.png",
                info: "",
                more: "\\ 详情"
            },
            {
                title: "",
                time: "",
                href: "",
                img: "",
                info: "",
                more: ""
            }
        ],
        [
            {
                title: "关于公司地址变更的通知",
                time: "2019.11.26",
                href: "news/20191126/news1.php",
                img: "fileadmin/user_upload/20191111_MEDICA_2019.jpg",
                info: "",
                more: "\\ 详情"
            },
            {
                title: "维润赛润生物技术（深圳）有限公司总经理宁紫妍女士 应邀参加2019年中德企业合作洽谈峰会",
                time: "2019.11.11",
                href: "news/20191111/news1.php",
                img: "fileadmin/user_upload/20191113_News_Zika.jpg",
                info: "10月29日，德国工商会、汉德企业家商会会、中德（欧）产业发展合作联盟等单位联合举办的2019年深圳中德企业合作洽谈峰会在美丽的深圳宝安成功召开。",
                more: "\\ 详情"
            }
        ],
    ]


var vm = new Vue({
    // el：element
    // #app 对应ID为app的元素
    el: "#app",
    // data存放el中药用到的数据
    data: {
        currentNews: news[0]
    }
})
$(function() {
    $("#pagination3").pagination({
        currentPage: 1,
        totalPage: 2,
        isShow: true,
        count: 7,
        homePageText: "首页",
        endPageText: "尾页",
        prevPageText: "上一页",
        nextPageText: "下一页",
        callback: function(current) {
            // $("#current3").text(current)
            vm.$data.currentNews = news[current-1]
        }
    });


});