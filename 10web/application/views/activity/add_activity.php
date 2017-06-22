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
    <form class="am-form am-form-horizontal">
      
      <div class="am-form-group">
        <label for="doc-ipt-3" class="am-u-sm-2 am-form-label">地点</label>
        <div class="am-u-sm-10">
          <input type="email" id="locatio" placeholder="请输入地点">
        </div>
      </div>

      <div class="am-form-group">
        <label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">开始时间</label>
        <div class="am-u-sm-10">
          <input type="password" id="start-time" placeholder="活动开始时间">
        </div>
      </div>

      <div class="am-form-group">
        <label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">结束时间</label>
        <div class="am-u-sm-10">
          <input type="password" id="end-time" placeholder="活动结束时间">
        </div>
      </div>

      <div class="am-form-group">
        <label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">跳转链接</label>
        <div class="am-u-sm-10">
          <input type="password" id="url" placeholder="跳转链接">
        </div>
      </div>

      <div class="am-form-group">
        <label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">活动封面</label>
        
        <div class="cover-box">
          <i class="am-icon-camera"></i>
          <img class="cover" src="http://i2.muimg.com/598178/732caa6f176619c5.png"/>
        </div>
      </div>

      <div class="am-form-group">
        <div class="am-u-sm-10 am-u-sm-offset-2">
          <button type="submit" class="am-btn am-btn-success">发布</button>
        </div>
      </div>

    </form>
  </div>

  <div class="right">
      <div>
        <input type="text" id="title" placeholder="请输入标题" />
      </div>

      <div id="editor">
          <p>请输入活动具体内容</p>
      </div>
  </div>

</div>

<script type="text/javascript" src="https://unpkg.com/wangeditor@3.0.2/release/wangEditor.min.js"></script>
<script src="/assets/js/picture-uploader/uploader.js"></script>

<script>
    $(function(){
      var E = window.wangEditor
      var editor = new E('#editor')
      editor.customConfig.uploadImgServer = 'http://123.206.94.77:3980/picture';
      editor.customConfig.height = 700;
      editor.create();

      //封面的地址
      var cover = null;
      var up = new PicUploader({
          server:'http://123.206.94.77:3980/picture',
      });

      //上传封面的选择监听
      $('.cover-box').click(function(e){
        up
        .read()
        .get(function(file){
          this
          .upload(file)
          .then(e => e.json())
          .then((d)=>{
            var url = d.data[0];
            $('.cover').attr('src',url);
          });
        });
      });

    });
</script>

<?php  
  require('./application/views/template/html_end.php');
?>