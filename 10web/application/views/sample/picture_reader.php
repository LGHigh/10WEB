<body>
<button id = "btn">click me</button>
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
                console.log(data);
            })
        });
    });
</script>