<?php
   //html 开始通用头部
   require('./application/views/template/html_begin.php');
?>

<link rel="stylesheet" href="/assets/css/admin.css">
<body class="am-with-topbar-fixed-top">

<!-- 通用宽屏头部 -->
<?php
  require('./application/views/template/header.php');
?>

<div class="down">
  <div class="choose-bar">
      <img src="/assets/i/icon/choose_bar.png" alt="">
      <span style="font-size:30px;font-weight:bold;color:#BDBDBD;">管理</span>
      <ul>
        <li><a href="#">消息管理</a></li>
        <li><a href="#">用户管理</a></li>
        <li><a href="#">文章管理</a></li>
      </ul>
  </div>
  <div class="main-content">
    <div class="statics">
        <div class="new-message">
            <div class="center">
              <div class="center-up">
                  <img src="/assets/i/icon/new_message.ico" alt="">
                  <span id="new_message" style="font-size:40px"></span>
              </div>
              <p class="center-down">
                  新消息
              </p>
            </div>
        </div>
        <div class="new-user">
            <div class="center">
              <div class="center-up">
                <img src="/assets/i/icon/new_user.ico" alt="">
                <span id="new_user" style="font-size:40px"></span>
              </div>
              <p class="center-down">
                  新增人数
              </p>
            </div>
        </div>
        <div class="total-user">
            <div class="center">
              <div class="center-up">
                <img src="/assets/i/icon/total_user.ico" alt="">
                <span id="total_user" style="font-size:40px"></span>
              </div>
              <p class="center-down">
                  总用户数
              </p>
            </div>
        </div>
    </div>
    <div class="msgs">
        <ul id="sysmessages" style="overflow-y:scroll;height:500px;">
          <li style="background-color:rgb(244,245,249)">系统公告</li>
          <span class="time" style="background-color:rgb(244,245,249)">
              <span class="new">
                  <a href="#" style="color:white">新公告</a>
              </span>
          </span>
          <br>

        </ul>
    </div>
  </div>
</div>

<script type="text/javascript">
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
      for(var i = 0;i < contents.length;++i){
        var li = document.createElement('li');
        li.innerText = contents[i].Content;
        var span = document.createElement('span');
        span.setAttribute('class','time');
        span.innerText = contents[i].SendTime.slice(0,10);
        document.getElementById('sysmessages').appendChild(li);
        document.getElementById('sysmessages').appendChild(span);
        document.getElementById('sysmessages').appendChild(document.createElement('br'));
      }
      console.log('heihei');
      return;
    }
    else{
      console.error("从服务器获取数据失败");
    }
  });

</script>



 <?php
   //html 结束通用底部
   require('./application/views/template/html_end.php');
 ?>
