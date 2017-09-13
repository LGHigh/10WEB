<?php  
   //html 开始通用头部
   require('./application/views/template/html_begin.php');
?>

<link rel="stylesheet" href="/assets/css/app.css">
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet" href="/assets/css/setting.css">

<body class="am-with-topbar-fixed-top">

<!-- 通用宽屏头部 -->
<?php 
  require('./application/views/template/header.php');
?>
<div class="container setting">
    <div class="row">
        <div class="aside setting-head">
            <ul>
                <li class="active">
                    <a href="/index.php/settingBasic">
                        <div class="setting-icon">
                            <p><span class="am-icon-home am-icon-lg"></span></p>
                        </div>
                        <span>基础设置</span>
                    </a>
                </li>
                <li class="">
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
            <form action="./application/controllers" method="post" name="NickName" onsubmit="return true">
             <table>
                    <thead>
                        <tr>
                            <th class="setting-head responsive-head"></th>
                            <th></th>
                       </tr>
                    </thead>
                    <tbody class="base">
                        <tr>
                            <td class="top-line">
                                <div class="avatar">
                                    <img src="#" id="headicon">
                                </div>
                            </td>
                            <td class="top-line">
                                <a class="btn btn-hollow">
                                    <input unselectable="no" type="file" class="hide">更换头像
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="setting-title">昵称</td>
                            <td>
                                <input type="text" placeholder="请输入昵称" id="NickName">
                            </td>
                        </tr>
                        <tr>
                            <td class="setting-title">电子邮件</td>
                            <td>
                                <form>
                                    <input class="btn btn-hollow pull-right" type="button" value="发送"/>
                                    <input type="email" placeholder="请输入你的常用邮箱"/>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" class="btn btn-success setting-save" value="保存">
            </form>
        </div>
    </div>
</div>
<script>
    $('#headicon').attr('src','http://localhost:6070/assets/i/default_head_icon/uh_1.gif');
    // $.get('/index.php/api/user/GetSession',function(data){
    //     data = JSON.parse(data);
    //     console.log(data);
    //     if(data.Flag > 0){
    //         var headicon = data.Extra.HeadIcon;
    //         $('#headicon').attr('src',headicon);
    //     }
    // })
    
</script>
<?php  
  //html 结束通用底部
  require('./application/views/template/html_end.php');
?>