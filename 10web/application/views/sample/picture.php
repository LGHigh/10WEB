<form enctype="multipart/form-data">
    <input type="file" id="file" name="file"/>
</form>

<div id="img"></div>

<button id="btn">上传</button>

<script type="text/javascript" >
    var btn = document.querySelector('#btn');
    btn.onclick = function(){
        var input = document.querySelector('#file');
        var data = new FormData();
        data.append('file',input.files[0]);
        fetch('http://123.206.94.77:3980/picture',{
            method:'POST',
            body:data
        })
        .then((e)=>{
            return e.json();
        })
        .then((e)=>{
            var data = e.data;
            var url = data[0];
            var img = document.querySelector('#img');
            img.innerHTML = `<img src="${url}" />`;
        });
    }
</script>
