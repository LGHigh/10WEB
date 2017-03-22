;(function($){
    var Message = function(re_id){
        if(re_id){
            this.re_id = re_id;
        }else{
            throw Error('必须传入相关用户的id');
        }
    };

    Message.fn = Message.prototype;
    
    /**
     * 获取和某一个人的消息
     * 
     * @param {string} re_id 相关人的id
     * @param {function} cb  回调函数
     */
    Message.fn.getMsg = function(cb){
        var re_id = this.re_id;
        //知道和我对话的人是谁
        $.ajax({
            url:'/index.php/api/message/GetMessage',
            type:'post',
            data:{
                MesUserID:re_id
            },
            success:function(data){
                data = JSON.parse(data);
                cb(null,data.Content);
            }
        });
    };

    /**
     * 获取和你聊天联系相关人的信息
     * 
     * @param {string} re_id  相关的人的id
     * @param {function} cb  回调函数
     */
    Message.fn.getInfo = function(cb){
        var re_id = this.re_id;
        $.ajax({
            url:'/index.php/api/user/GetUserBaseInfo',
            type:'post',
            data:{
                UserID:re_id
            },
            success:function(data){
                data = data.trim();
                data = JSON.parse(data);
                if(data.Flag > 0){
                    cb(null,data.Content);
                }else{
                    cb(data.Content);
                }
            }
        });
    }

    Message.fn.sendMsg = function(content,cb){
        //消息内容和消息相关id
        var re_id = this.re_id;
        
        if(content && content.trim().length == 0){
            cb("消息长度不能为0");
        }

        $.ajax({
            url:'/index.php/api/message/SendMessageToUser',
            type:'post',
            data:{
                Content:$msg_content.val(),
                TargetUserID:re_id
            },
            success:function(data){
                try{
                    data = JSON.parse(data);
                    if(data.Flag < 0){
                        alert(data.Content);
                        // return ;
                    }
                    cb(null,data);
                }catch(e){
                    cb(e);
                }
            }
        });
    }

    //暴露Message
    window.Message = Message;
})(jQuery)