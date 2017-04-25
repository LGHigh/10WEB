<?php  
   //html 开始通用头部
   require('./application/views/template/html_begin.php');
?>

<link rel="stylesheet" href="/assets/css/love.css">

<body>


<!-- 通用宽屏头部 -->
<?php 
  require('./application/views/template/header.php');
?>

<div class="main">
	<div class="left">
		<div style="width:100%;height:40px;border-bottom:1px solid #D9DADC;"></div>
		<div class="manage">
			<img src="/assets/i/icon/manage.gif" alt="" ><span style="color:#D6D6D6;font-size:12px;margin-left:11px;">管理</span>
			<ul class="manage-list">
				<li><a href="#">消息管理</a></li>
				<li><a href="#">用户管理</a></li>
				<li><a href="#">文章管理</a></li>
			</ul>
		</div>
	</div>
	<div class="right">
		<div style="width:100%;height:40px;border-bottom:1px solid #D9DADC;"></div>
		<div class="info">
			<div class="new-info">
				<a href="#">
					<div class="center1">
						<img src="/assets/i/icon/new_message.png"><span class="data" id="new_message">999</span>
						<div class="txt">新消息</div>
					</div>
				</a>
			</div>
			<div class="new-user">
				<a href="#">
					<div class="center2">
						<img src="/assets/i/icon/new_user.png" alt=""><span class="data" id="new_user">555</span>
						<div class="txt">新用户</div>
					</div>
				</a>
			</div>
			<div class="total-user">
				<a href="#">
					<div class="center3">
						<img src="/assets/i/icon/total_user.png" alt=""><span class="data" id="total_user">666666</span>
						<div class="txt">总用户数</div>
					</div>
				</a>
			</div>
		</div>
		<li class="row" style="background-color:#F4F5F9;margin-top:20px;margin-left:15px;border-top:1px solid #E7E7EB;">
			<span class="content">系统公告</span>
			<span style="width:90px;height:50px;margin-left:800px;font-size:15px;color:white;background-color:#44B549;"><a href="#" style="color:white;">新公告</a></span>
		</li>
		<div class="contents">
			<ul id="sysmessages"></ul>
			<div class="jump">
				<button onclick="pre_page()">上一页</button>
				第<span id="index"></span>/<span id="total_page"></span>页
				<button onclick="next_page()">下一页</button>	&nbsp; &nbsp; &nbsp;
				第<input type="text" id="jump_to" style="width:40px;">页 <button onclick="jumpTo()">跳转</button>
			</div>
			
		</div>
	</div>
</div>

<script type="text/javascript">
	contents = null;
	index = 0;
  //获取未读消息数
  $.get('/index.php/api/admin/get_number_of_unread',function(data){
    data = JSON.parse(data);
    if(data.Flag > 0){
      document.getElementById('new_message').innerHTML = data.Content;
      return;
    }
    else{
      console.error('从服务器获取数据失败');
    }
  });
  //获取新增人数
  $.get('/index.php/api/admin/get_number_of_newuser',function(data){
    data = JSON.parse(data);
    if(data.Flag > 0){
      document.getElementById('new_user').innerHTML = data.Content;
      return;
    }
    else{
      console.error('从服务器获取数据失败');
    }
  });
  //获取总用户数
  $.get('/index.php/api/admin/get_number_of_user',function(data){
    data = JSON.parse(data);
    if(data.Flag > 0){
      document.getElementById('total_user').innerHTML = data.Content;
      return;
    }
    else{
      console.error('从服务器获取数据失败');
    }
  });
  //获取所有系统消息
  $.get('/index.php/api/message/getsysmessages',function(data){
    data = JSON.parse(data);
    if(data.Flag > 0){
      contents = data.Content;
      index = 0;
      paging(contents,index);
      return;
    }
    else{
      console.error("从服务器获取数据失败");
    }
  });
//分页函数
function paging(contents,index){
	//先清除所有孩子
	var parent = document.getElementById('sysmessages');
	while(parent.hasChildNodes()){
		parent.removeChild(parent.firstChild);
	}
	document.getElementById('index').innerText = index+1;
	document.getElementById('total_page').innerText = contents.length;
	contents = contents[index];
	for(var i = 0;i < contents.length;++i){
		var li = document.createElement('li');
        li.setAttribute('class','row');
        var span = document.createElement('span');
        span.setAttribute('class','content');
        span.innerText = contents[i].Content;
        var spanT = document.createElement('span');
        spanT.setAttribute('class','time');
        spanT.innerText = contents[i].SendTime.slice(0,10);
        li.appendChild(span);
        li.appendChild(spanT);
        parent.appendChild(li);
	}
}
//跳转函数
function jumpTo(){
	index = document.getElementById('jump_to').value;
	if(index >= total_page)index = total_page;
	index = index -1;
	paging(contents,index);
}
//下上页跳转
function pre_page(){
	if(index == 0)return;
	index = index - 1;
	paging(contents,index);
}
function next_page(){
	if(index == contents.length - 1)return;
	index = index + 1;
	paging(contents,index);
}

</script>




<?php  
  //html 结束通用底部
  require('./application/views/template/html_end.php');
?>