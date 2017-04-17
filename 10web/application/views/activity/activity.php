

<style>

</style><?php  
   //html 开始通用头部
   require('./application/views/template/html_begin.php');
?>
<!-- 通用宽屏头部 -->
<?php 
  require('./application/views/template/header.php');
?>
<head>
  <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/activity.css">
</head>
<!-- 活动头部背景模块样式-->
<body class="act_all_body">
<div class="act_headers" id="act_headers_1"> 
<div class="act_headers" id="act_headers_2">
<div class="act_headers" id="act_headers_3">   
<div class="act_headers_4">   
<div  class="act_headcontent">
  <div class="act-spans">
    <a class="act-recent"  href="#">
      <span class="diss"  id="act_span_recent">最近</span>
    </a>
  </div>
  <div class="act-spans">
    <a class="act-future"  href="#">
     <span class="diss"   id="act_span_future">将来</span>
    </a>
  </div> 
  <div class="act-spans">
    <a class="act-intrest"  href="#">
      <span class="diss"  id="act_span_interst">有点意思</span>
    </a>
  </div>
  <div class="act-spans">
    <a class="act-useful"  href="javascript:;">
     <span class="diss"  id="act_span_ganhuo">干货</span>
    </a>
   </div> 
  </div>
</div>    
</div> 
</div>
</div>
<!-- 活动body模块样式-->
<div  class="the_act_bodys" >

<div class="head_month">-壹月-</div>  
<div  class="the_act_body"  id="the_act_body"  >
<?php for($i=1;$i<=4;$i++){ ?> 
 <div class="activitybody">
  <div class="act_user" id="act_photo_and_name">
     <div class="act_user" id="act_user_photo">
     <img src="/assets/i/act_img/activity_touicang_logo.fw.png" >
      </div>
     <div class="act_user" id="act_user_name"> 
     <p> Li Yang</p>
      </div>
  </div>

  <div class="activity_poster">  
      <img src="/assets/i/act_img/temp_picture.fw.png"> 
  </div>

  <div class="ativitytitle">
     <p  class="ativitytitle" id="ativitytitle"> 超现实体验 </p>
  </div>
<div class="act_detail_info">
 <div id="activity_info_time">
      <div class="activity_info_time">
        <img src="/assets/i/icon/activity_time_logo.fw.png" name="activity_time_logo">
      </div>
      <div class="activity_info_time">
        <p>2016-12-12</p>
      </div>
</div>
<div id="activity_info_location">
      <div class="activity_info_location">
        <img src="/assets/i/icon/activity_location_logo.fw.png" name="activity_location_logo">
     </div>
      <div class="activity_info_location">
          <p>   西楼报告厅   </p>
      </div>
</div>
<div id="activity_info_operation">
      <div class="activity_info_operation">
      <img src="/assets/i/icon/activity_zan_logo.fw.png" name="activity_operation_logo">
      </div>  
      <div class="activity_info_operation"> <p> 100</p></div>
      <div  class="activity_info_operation"  id="activity_info_operation_looked">
        <div class="activity_info_operation"> 
      <img src="/assets/i/icon/activity_looked_logo.fw.png" name="activity_operation_logo">
      </div>
      <div class="activity_info_operation">  <p> 1024</p></div>
      </div>
      
    </div>
</div>
</div>
<?php } ?>
</div>

<div class="nav"    id="nav" ></div>
<button class="js-load-more">加载更多</button> 
</div>  
</body>
<?php  
  //html 结束通用底部
  require('./application/views/template/html_end.php');
?>
<script type="text/javascript" src="/assets/js/ejs.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/activity.js"></script>



