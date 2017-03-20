function navMenu()
{
    var menu = '<section id="upper-nav">	\
        <div class="row"> \
            <div id="upper-nav-links"> \
                <ul> \
                <li><a href="#" id="change_to_chinese">中文</a></li> \
                <li><a href="#" id="change_to_english_">ENGLISH</a></li> \
                <li><a href="#">论坛</a></li> \
                </ul> \
            </div> \
        </div> \
</section> \
<nav id="main-nav" class="row"> \
                <div id="logo" class="columns" style="width:25%"> \
    	<a href=""><img src="img/logo.png" alt="Formstack Online Form Builder"></a> \
    </div> \
            <div id="site-links" class="columns" style="width:42%"> \
    	<ul class="nav-bar" id="mobile-submenu"> \
            <li class="has-flyout" style="display: inline;"><a href="index.cn.html">首页</a> \
            	<ul style="display: none;" class="flyout"> \
                <li><a href="#">关于我们</a></li> \
                </ul> \
            </li>  \
            <li class="has-flyout" style="display: inline;"><a href="#">产品中心</a> \
            	<ul style="display: none;" class="flyout"> \
                <li><a href="#">充电桩运营系统</a></li> \
                <li><a href="#">Rapid开发套件</a></li> \
                <li><a href="#">数据透传</a></li> \
                <li><a href="#">O2mation</a></li> \
                     \
                <!-- <li><a href="#">百科</a></li> \
                <li><a href="#">BUG管理</a></li> --> \
                </ul> \
            </li> \
            <li class="has-flyout" style="display: inline;"><a href="#">充电桩</a> \
            	<ul style="display: none;" class="flyout"> \
                <li><a href="#">交流桩</a></li> \
                <li><a href="#">直流桩</a></li> \
                </ul> \
            </li> \
   			<li><a href="contact.cn.html">联系我们</a></li> \
		</ul> \
    </div> \
</nav>';
    document.getElementById("header").innerHTML=menu;
}
navMenu();