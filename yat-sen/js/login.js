$(function(){
    Victor("container", "output");   //登录背景函数
    // 监听Enter键事件
    $("#entry_name").focus();
    $(document).keydown(function(event){
        if(event.keyCode==13){
            $("#enter_btn").click();
        }
    });
});

// VM层
var VM = new Vue({
	el: "#app",
	data: {
		cur:0, //默认选中第一个tab
        userName: "", //用户名
        password: "" //密码
	},
	methods: {
		checkPassword(){
            if(this.userName == "admin" && this.password == "123"){
                window.location.href = "apply.html"
            }else{
                alert("密码错误")
            }
        }
	}
})