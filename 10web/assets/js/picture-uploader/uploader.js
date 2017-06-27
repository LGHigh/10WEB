/**
 * 用于图片上传的一个上传器，由于网上搜索到的对于图片上传的我都不是很满意，所以打算自己重新写一个
 * 目的是完全脱离html，只需要引入js文件即可使用的一个组件
 */

(function(global){
var Uploader = function(config){
    if(!config)
        throw Error('config is required');
    this.config = Object.assign(Uploader._config_,config);
    this._validator();
    this.id = "input" + new Date().getTime();
    this.callback = function(){};
    this._addInput();
    this._onChange();
};

Uploader._config_ = {
    server:null
};

Uploader.fn = Uploader.prototype;

Uploader.fn.read = function(){
    this.input.click();
    return this;
};

/**
 * 检查配置的完整性
 */
Uploader.fn._validator = function(){
    var config = this.config;
    if(!config.server)
        throw Error('server url is required but not supplied');
}

/**
 * 用户获取到文件之后调用get函数
 * 
 * @param fn 回调函数
 */
Uploader.fn.get = function(fn){
    this.callback = fn;
    return this;
}

/**
 * 将html加入dom中
 */
Uploader.fn._addInput = function(){
    var body = document.querySelector('body');
    var input = document.createElement('input');
    input.setAttribute('type','file');
    input.setAttribute('id',this.id);
    input.style.display = "none";
    input.style.opacity = 0;
    body.appendChild(input);
    this.input = input;
};

/**
 * 监听事件
 */
Uploader.fn._onChange = function(){
    var vm = this;
    this.input.onchange = function(e){
        var files = this.files;
        if(files.length == 0)
            vm.callback.call(vm,null);
        vm.callback.call(vm,files[0]);
    }
    return this;
};

Uploader.fn.upload = function(file){
    var data = new FormData();
    data.append('file',file);
    return fetch(this.config.server,{
        method:'POST',
        body:data,
    });
};


//暴露在全局变量中
global.PicUploader = Uploader;
})(window);
