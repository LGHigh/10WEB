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
<script type="text/javascript" src="/assets/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">

// PAGE IS CLOSED ON START
jQuery(document).ready(function(){
	jQuery('#page').css({'display':'inline','overflow':'hidden','width':'20%','margin-right':'42.5%'});
});

// WHEN ALL ELEMENTS ARE LOADED
jQuery(window).load(function() {
	jQuery('#hp_preloader').delay(800).animate({'opacity':'0'},1400,function(){
		// HOMEPAGE NIVO SLIDER STARTS
		jQuery('#slider').nivoSlider();
		
		// REMOVE LOADING
		jQuery(this).remove();

		// PAGE OPENING ANIMATION
		jQuery('#sidebar').delay(800).animate({'margin-left':'5%'},2100);
		jQuery('#page').delay(800).animate({'margin-right':'5%','width':'65%'},2100);
	});
});
</script>
</head>
<body>
	<div id="hp_preloader"></div>
	<div id="sidebar">
			<div id="logo">
				<a href="test.html">
					<img src="/assets/i/web_logo.png">
				</a>
			</div>
			<div class="hr3"></div>
			<!-- <ul id="menu">
				<li class="current"><a href="#">关于亿灵</a></li>
				<li><a href="#">智能设计部</a></li>
				<li><a href="#">移动开发部</a></li>
				<li><a href="#">网站运维部</a></li>
			</ul> -->
			<div class="department first current"><img src="/assets/i/hafu_anti_logo_black.png" alt="亿灵" /><p>关于亿灵</p></div>
			<div class="department"><img src="/assets/i/electric_car.png" alt="智能" /><p>智能设计部</p></div>
			<div class="department"><img src="/assets/i/phone.png" alt="移动" /><p>移动开发部</p></div>
			<div class="department"><img src="/assets/i/pc.png" alt="网站" /><p>网站运维部</p></div>
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
        <h3 class="center_title">亿灵软件开发联盟</h3>
        <div class="hr"></div>
        <ul class="list_num">
        	<li><span class="sp1">1</span><span class="sp2">智能设计部</span><br/>*--智能设计部简介--*</li>
        	<li><span class="sp1">2</span><span class="sp2">移动开发部</span><br/>*--移动开发部简介--*</li>
        	<li class="last"><span class="sp1">3</span><span class="sp2">网站运维部</span><br/>*--网站运维部简介--*</li>
        </ul>
        <div class="hr2"></div>
	</div>
</body>
</html>
