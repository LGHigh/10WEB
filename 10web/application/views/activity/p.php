<?php  
   //html 开始通用头部
   require('./application/views/template/html_begin.php');
?>
<body>
<link rel="stylesheet" href="/assets/css/activity/activity-p.css">
<link rel="stylesheet" href="/assets/css/app.css">
<?php  
   //html 开始通用头部
   require('./application/views/template/header-detail.php');
?>


<div class="activity-detail">
  <div class="activity-title">
    <h1><?php echo $activity['Title'] ?></h1>
  </div>
  <div class="acitvity-writer">
    发布者：<?php echo $activity['Writer'] ?>
  </div>
  <div class="acitvity-info">
    <div>开始时间：<?php echo $activity['StartDate'] ?>-----结束时间：<?php echo $activity['StartDate'] ?> </div>
    <div>地点：<?php echo $activity['Location'] ?></div>
  </div>
  <div class="artivity-source">
    <?php echo $activity['Source'] ?>
  </div>
</div>
</div>


<div class="hope">
  <div class="am-g am-container">
    <div class="am-leftpart">
        <div><h1 class="hope-title hope-font ">与亿灵一起</h1></div>
        <div><p class="hope-font hope-content">永远不成为技术的过客，永远在路上</p></div>
    </div>
    <div class="am-rightpart">
        <div><h1 class="hope-font">友情链接</h1></div>
        <div >
          <p class="hope-font ">
            <a class="am-dropdown-toggle hope-font hope-content" data-am-dropdown-toggle="" href="javascript:;">南开大学</a>
          </p>
          <p class="hope-font ">
            <a class="am-dropdown-toggle hope-font hope-content" data-am-dropdown-toggle="" href="javascript:;">南开大学软件学院</a>
          </p>
          <p class="hope-font ">
            <a class="am-dropdown-toggle hope-font hope-content" data-am-dropdown-toggle="" href="javascript:;">CI框架</a>
          </p>
          <p class="hope-font ">
            <a class="am-dropdown-toggle hope-font hope-content" data-am-dropdown-toggle="" href="javascript:;">南开腾讯俱乐部</a>
          </p>
    </div>
  </div>
</div>


<?php  
  //html 结束通用底部
  require('./application/views/template/html_end.php');
?>
