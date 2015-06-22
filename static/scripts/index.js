
var iframe = $("#content");


iframe.css('height',iframe.parents('td').css('height'));

$(window).resize(function(){
	iframe.css('height',iframe.parents('td').css('height'));
})
//iframe的页面 加载完成
$("#content").load(function(){
	$("#loading").hide();
})

/**
* 顶部菜单的按钮
*/
$("#nav-ul").delegate('a','click',function(){

	var 
		//从a标签的属性中 获得相对应左侧菜单的id
		nav_id = $(this).attr("data-nav"),

		//对应的左侧菜单
		left_nav = $("#" + nav_id),

		//选中的左侧菜单中的第一个的链接
		href = left_nav.find('a.selected').attr("href"),

		//头顶菜单激活状态的类名
		currentClass = "actived";


	//显示对应左侧菜单
	$("#left-menu").find("ul").hide();
	$("#" + nav_id).show();

	//头顶nav li active 状态修改
	$("#nav-ul").find("li").removeClass(currentClass);
	$(this).parents('li').addClass(currentClass);

	//修改iframe的src
	$("#content").attr("src",href);

	//显示正在加载的提示
	$("#loading").show();


});


/**
* 左侧菜单的按钮
*/
$("#left-menu").delegate('li a','click',function(){
	var parent_ul = $(this).parents('ul'),
		currentClass = 'selected';


	//左侧菜单 激活状态修改
	parent_ul.find('li a').removeClass(currentClass);
	$(this).addClass(currentClass);

	//显示正在加载的提示
	$("#loading").show();
})
