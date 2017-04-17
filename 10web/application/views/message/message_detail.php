<?php  
    require('./application/views/template/html_begin.php');
    require('./application/views/template/header.php');
?>
<link rel="stylesheet" type="text/css" href="/assets/css/message.css">
<body class="am-with-topbar-fixed-top">
    <div class="e0-msg-box">
        <!-- 聊天框标题 -->
        <div class="e0-msg-box-title">
            <div class="back" id="back-btn"><i class="am-icon am-icon-mail-reply"></i>返回</div>
            <div class="title">与<span id="msg-title"></span>的对话</div>
        </div>
        <!-- 聊天框内容 -->
        <div class="e0-msg-box-content" id="msg-box">
            加载中...
        </div>
        <!-- 输入框 -->
        <div class="msg-input">
            <input id="msg-content" type="text" placeholder="请输入内容...."></input>
            <button id="msg-send">发送</button>
        </div>
    </div>
</body>

<script type="text/javascript" src="/assets/js/ejs.min.js"></script>
<script type="text/javascript" src="/assets/js/message.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    var id = window.location.href.match(/detail.*/)[0];
    id = id.replace('detail/','');
    var message = new Message(id);
    var $msgbox = $('#msg-box');
    var $msgtitle = $('#msg-title');
    var $msgcontent = $("#msg-content");
    
    /**
     * 获取聊天记录
    */
    var get = function(){
        return message
        .getHtml()
        .then(function(data){
            $msgbox.html(data);
            $msgbox.scrollTop($msgbox.height());
        });
    };
    
    //执行
    get();
    
    /**
     * 获取聊天的用户信息
    */
    message
    .getUserInfo()
    .then(function(data){
        $msgtitle.html(data.Content.NickName);
    });

    //事件监听
    var send = function(){
        var c = $msgcontent.val();
        message
        .send(c)
        .then(function(data){
            $msgcontent.val("");
            get();
        });
    }
    //返回
    $("#back-btn").click(function(){
        history.go(-1);
    });
    //发送
    $("#msg-send").click(send);
    //回车
    $msgcontent.keydown(function(e){
        if(e.keyCode == 13 || e.white == 13)
            send();
    });
});

</script>
<?php  
    require('./application/views/template/html_end.php');
?>
