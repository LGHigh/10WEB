<html>
<title>webtools</title>
<head>
<?php  
    require('./application/views/template/html_begin.php');
    require('./application/views/template/header.php');
    
?>

<link rel="stylesheet" href="/assets/css/webtools.css" type="text/css" media="all"> 

<script src="/assets/js/jquery.min.js"></script>

</head>
<body>

<div class="e0-error-block"></div>

<script type="text/javascript" src="/assets/js/wb.js"></script>
<?php
	echo "<script> var id=$id;</script>";
?>
<script  type="text/javascript" >
	var _html=""
	_html+='<iframe src="'
	_html+=_data[id].url;
	_html+='" width=100%  height=1080px></iframe> '
	document.write(_html);
</script>

<?php
    require('./application/views/template/html_end.php');
?>

