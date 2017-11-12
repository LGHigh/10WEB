<a id="myBu" href="github.com">233<div id="mic1"></div><div id="mic2"></div></a>
<script>
var a=document.querySelector("#myBu");
a.href="https://github.com";
a.addEventListener("mouseenter",()=>setTimeout("a.style.cursor='pointer'",1000));
a.addEventListener("mouseout",()=>a.style.cursor="wait");
</script>
<style>
html,body{
	margin:0;
	padding:0;
	width:100%;
	height:100%;
}#myBu{
	width:100px;
	height:50px;
	background:#000;
	position:absolute;
	transform: translateZ(1px);
    transform-style: preserve-3d;
	border-radius:4px;
	left:50%;
	top:50%;
	margin-left:-50px;
	margin-top:-25px;
	cursor:pointer;
	color:#fff;
	line-height:50px;
	text-align:center;
	text-decoration:none;
	cursor:wait;
}#myBu:hover > #mic1{
	animation:Bu1 .5s linear forwards;
}#myBu:hover > #mic2{
	animation:Bu2 .5s linear .5s forwards;
}#mic1,#mic2{
	background:#ccc;
	top:-4px;
	display:block;
	position:absolute;
	transform: translateZ(-57px);
    transform-style: preserve-3d;
	border-radius:4px;
}#mic2{
	left:-4px;
	top:0;
}@keyframes Bu1{
	0%{
		width:0;
		height:4px;
	}66%{
		width:104px;
		height:4px;
		margin-left:0px;
	}100%{
		width:104px;
		height:54px;
		margin-left:0px;
	}
}@keyframes Bu2{
	0%{
	    margin-top:46px;
		margin-left:104px;
		width:4px;
		height:8px;
	}66%{
		width:108px;
		height:8px;
	    margin-top:46px;
		margin-left:0px;
	}99%{
		width:108px;
		height:54px;
		margin-left:0px;
		margin-top:0px;
	}100%{
		width:108px;
		height:58px;
		margin-left:0px;
		margin-top:-4px;
	}
}
</style>