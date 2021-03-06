<?php if (!defined('THINK_PATH')) exit();?>


<!-- BEGIN SIDEBAR MENU -->        
<!-- 左边的主菜单 wangfan -->
<div id="left-menu" class="page-sidebar nav-collapse collapse">
<ul class="page-sidebar-menu">
	<li>
		<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		<div class="sidebar-toggler hidden-phone"></div>
		<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
	</li>
	<li>
		<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
		<form class="sidebar-search" action="__APP__/Public/search" method="post">
			<div class="input-box">
				<a href="javascript:;" class="remove"></a>
				<input type="text" placeholder="Search......" />
				<input type="button" class="submit" value=" " />
			</div>
		</form>
		<!-- END RESPONSIVE QUICK SEARCH FORM -->
	</li>
	<li class="start active ">
		<a href="__APP__/Index/home">
		<i class="icon-home"></i> 
		<span class="title">汉富通</span>
		<span class="selected"></span>
		</a>
	</li>
	<li class="">
		<a href="javascript:;">
		<i class="icon-cogs"></i> 
		<span class="title">企业资讯</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li >
				<a href="__APP__/News/editNews">
				编辑企业资讯</a>
			</li>
			<li >
				<a href="__APP__/News/add">
				添加企业资讯</a>
			</li>
		</ul>
	</li>
	<li class="">
		<a href="javascript:;">
		<i class="icon-bookmark-empty"></i> 
		<span class="title">招聘信息</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="__APP__/Jobs/joblist">
				编辑招聘信息</a>
			</li>
			<li>
				<a href="__APP__/Jobs/add">
				添加招聘信息</a>
			</li>
			<li>
				<a href="__APP__/Jobs/applyjob">
				职位申请信息</a>
			</li>
			<li>
				<a href="__APP__/Jobs/joinus">
				加入申请信息</a>
			</li>
		</ul>
	</li>
	<li class="">
		<a href="javascript:;">
		<i class="icon-table"></i> 
		<span class="title">下载资源</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li >
				<a href="__APP__/Download/up">
				上传下载资源</a>
			</li>
			<li >
				<a href="__APP__/Download/lists">
				编辑下载资源</a>
			</li>
		</ul>
	</li>

	<li class="">
		<a href="javascript:;">
		<i class="icon-briefcase"></i> 
		<span class="title">网站素材</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li >
				<a href="__APP__/Material/about_company">
				<i class="icon-time"></i>
				静态页面</a>
			</li>
			<li >
				<a href="__APP__/Material/images">
				<i class="icon-cogs"></i>
				相关图片</a>
			</li>
			<li >
				<a href="__APP__/Material/others">
				<i class="icon-comments"></i>
				其他信息</a>
			</li>
		</ul>
	</li>
	<li class="">
		<a href="javascript:;">
		<i class="icon-gift"></i> 
		<span class="title">系统功能</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li >
				<a href="__APP__/System/adduser"> 
				添加管理员</a>
			</li>
			<li >
				<a href="__APP__/System/deluser"> 
				删除管理员</a>
			</li>
			<li >
				<a href="__APP__/System/updatepwd"> 
				修改密码</a>
			</li>
			<li >
				<a href="__APP__/System/clearCache">
				清除缓存</a>
			</li>
		</ul>
	</li>
</ul>
</div>
<!-- END SIDEBAR MENU -->