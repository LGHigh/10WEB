<body>
    <button id = "btn">click me</button>
    <div id="url"></div>
    <div id="pic"></div>
</body>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/picture-uploader/uploader.js"></script>
<script>
    
    var up = new PicUploader({
        server:'http://123.206.94.77:3980/picture',
    });

    $('#btn').click(function(e){
        up
        .read()
        .get(function(file){
            //对file的处理
            //.....

            this
            .upload(file)
            .then(e=>e.json())
            .then((data)=>{
                //这里获取上传的图片的url
                process(data);
            })
        });
    });

    var process = function(data){
        var pic = data.data[0];
        $('#url').text(pic);
        $('#pic').html(`<img src="${pic}"/>`);
    }
    
</script>