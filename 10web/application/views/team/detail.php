<!DOCTYPE html>
<html>
<head>
<title>社团简介</title>
<meta charset="utf-8">
<link href="/assets/css/e0-introduction.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/assets/css/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="/assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  setTimeout(function(){
  	$("#sidebar").animate({'margin-left':'5%'},"slow");
  }, 1000);
});
var jquery1 = $.noConflict();
jquery1(window).load(function() {
        jquery1('#slider').nivoSlider();
});
</script>
</head>
<body>
	<div id="sidebar">
			<div id="logo">
				<a href="test.html">
					<img src="/assets/i/web_logo.png">
				</a>
			</div>
			<div class="hr3"></div>
			<ul id="menu">
				<li class="current"><a href="#">关于亿灵</a></li>
				<li><a href="#">智能设计部</a></li>
				<li><a href="#">移动开发部</a></li>
				<li><a href="#">网站运维部</a></li>
			</ul>
	</div>
	<div id="page">
		<div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="/assets/i/toystory.jpg" data-thumb="/assets/i/toystory.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="/assets/i/up.jpg" data-thumb="/assets/i/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="/assets/i/walle.jpg" data-thumb="/assets/i/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="/assets/i/nemo.jpg" data-thumb="/assets/i/nemo.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>
        </div>
        <h3 class="center_title">亿灵软件联盟</h3>
        <div class="hr"></div>
        <ul class="list_num">
        	<li><span class="sp1">1</span><span class="sp2">智能设计部</span><br/>*--智能设计部简介--*</li>
        	<li><span class="sp1">1</span><span class="sp2">移动开发部</span><br/>*--移动开发部简介--*</li>
        	<li class="last"><span class="sp1">1</span><span class="sp2">网站运维部</span><br/>*--网站运维部简介--*</li>
        </ul>
        <div class="hr2"></div>
	</div>
</body>
</html>
