<?php  
   //html 开始通用头部
   require('./application/views/template/html_begin.php');
?>

<link rel="stylesheet" type="text/css" href="/assets/css/add-activity.css" />
<!-- 通用宽屏头部 -->
<?php 
  require('./application/views/template/header.php');
?>

<div class="main">

  <div class="left">
  </div>

  <div class="right">
      <div>
        <input type="text" id="title"/>
      </div>

      <div id="editor">
          <p>请输入活动具体内容</p>
      </div>
  </div>

</div>

<script type="text/javascript" src="https://unpkg.com/wangeditor@3.0.2/release/wangEditor.min.js"></script>

<script>
    var E = window.wangEditor
    var editor = new E('#editor')
    editor.customConfig.uploadImgServer = 'http://123.206.94.77:3980/picture';
    editor.create();
</script>

<?php  
  require('./application/views/template/html_end.php');
?>