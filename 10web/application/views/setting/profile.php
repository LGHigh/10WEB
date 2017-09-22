<?php  
   //html 开始通用头部
   require('./application/views/template/html_begin.php');
?>

<link rel="stylesheet" href="/assets/css/app.css">
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet" href="/assets/css/setting.css">
<link rel="stylesheet" href="/assets/css/amazeui.min.css">
<script type="text/javascript">
function submitProfile(){
    var sex=document.getElementsByName("sex").value;
    var profile=document.getElementById("profile").value;
    EditInfo(null,null,profile,null);
}
</script>
<body class="am-with-topbar-fixed-top">

<!-- 通用宽屏头部 -->
<?php 
  require('./application/views/template/header.php');
?>
<div class="container setting">
    <div class="row">
        <div class="aside setting-head">
            <ul>
                <li class="">
                    <a href="/index.php/settingBasic">
                        <div class="setting-icon">
                            <p><span class="am-icon-home am-icon-lg"></span></p>
                        </div>
                        <span>基础设置</span>
                    </a>
                </li>
                <li class="active">
                    <a href="/index.php/settingProfile">
                        <div class="setting-icon">
                           <p><span class="am-icon-home am-icon-lg"></span></p>
                        </div>
                        <span>账号管理</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-xs-16 col-xs-offset-8 main">
            <table>
                <thead>
                    <tr>
                        <th class="setting-head responsive-head"></th>
                        <th></th>
                    </tr>
                </thead>
               <tbody class=information>
                   <tr>
                       <td class="top-line setting-title setting-verticle">性别</td>
                       <td class="top-line">
                           <input type="radio" name="sex" value="1"/><span>男</span>
                           <input type="radio" name="sex" value="2"/><span>女</span>
                           <input type="radio" name="sex" value="3"/><span>保密</span>
                       </td>
                   </tr>
                   <tr>
                       <td class="setting-title pull-left">个人简介</td>
                       <td>
                           <form>
                               <textarea id="profile" placeholder="填写你的简介"></textarea>
                           </form>
                       </td>
                   </tr>
               </tbody>
            </table>
            <input type="submit" class="btn btn-success setting-save" value="保存" onclick="return submitProfile()">
        </div>
    </div>
</div>
<?php  
  //html 结束通用底部
  require('./application/views/template/html_end.php');
?>