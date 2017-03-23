<html>
<title>webtools</title>
<head>
<?php  
    require('./application/views/template/html_begin.php');
    require('./application/views/template/header.php');
?>

<!-- want css here-->
<link href="/assets/css/amazeui.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="/assets/css/webtools.css" type="text/css" media="all"> 
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	  
	
<!--want css done -->

<script src="/assets/js/jquery.min.js">
</script>
</head>
<body>
	

<div type="e0-error-block" height=60px>
	<br><br><br>
</div>



<div class="services" id="services">
		<div class="container">
			<div class="agile-heading">
				<h3> Services </h3>
			</div>
		</div>
</div>

	<script type="text/javascript" src="/assets/js/wb.js"></script>
	<script type="text/javascript" >
	
		var _html="";
		for(var i=0 ; i < _data.length ; i++)
		{
			_html+='<a href="webtools/tools/';
			_html+=i;
			_html+='"><div class="col-sm-3 wthree-services">';
				_html+='<div class="wthree-services-grid">';
						_html+='<div class="wthree-services-info">';
							_html+='<i class="am-icon-';
							_html+= _data[i].icon;
							_html+=' am-icon-lg">';
							_html+='</i>';
							_html+='<h4>';
							_html+= _data[i].name;
							_html+='</h4></div><div class="wthree-services-captn"><h4>';
							_html+= _data[i].name;
							_html+='</h4><p>';
							_html+=_data[i].description;
							_html+='</p></div></div></div></div></a>';
		}
	
	document.write(_html);

	</script>
	

<!-- want content here -->
	

<?php  require('./application/views/template/html_end.php');?>



