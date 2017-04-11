

<style>

</style>
<form action="/application/controllers/addactivity.PHP" enctype="multipart/form-data"method="post">
<div  class="addactivity">
<p class="labe_title">标题</p>
<input type="text" name="InputTitle">
<p class="labe_auther">作者</p>
<input type="text" name="InputAuther">
<p class="labe_content">内容</p>
<textarea name="InputContent"></textarea> 
<p class="labe_poster">宣传海报</p>
<input type="file" name="file0" id="file0" multiple="multiple" /><br><img src="" id="img0" >
<p class="labe_start_time">活动开始时间</p>
<input   name="Activity_starttime" id="datebut" type="text" placeholder="请选择开始时间"  readonly onClick="jeDate({dateCell:'#datebut',isTime:true,format:'YYYY-MM-DD hh:mm:ss'})">
<p class="labe_end_time">活动结束时间</p>
<input   name="Activity_endtime" id="datebut1" type="text" placeholder="请选择结束时间"  readonly onClick="jeDate({dateCell:'#datebut1',isTime:true,format:'YYYY-MM-DD hh:mm:ss'})">
<p class="labe_start_time">活动地点</p>
<input type="text" name="InputLocation">
<input type="submit" value="发布活动" />
</form>
</div>
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/jeDate/jedate.js"></script>
<script type="text/javascript">

function viewmypic(mypic,imgfile) { 
if (imgfile.value){ 
mypic.src=imgfile.value; 
mypic.style.display=""; 
mypic.border=1; 
                 } 
} 
   
$("#file0").change(function(){
    var objUrl = getObjectURL(this.files[0]) ;
    console.log("objUrl = "+objUrl) ;
    if (objUrl) {
        $("#img0").attr("src", objUrl) ;
    }
}) ;
//建立一個可存取到該file的url
function getObjectURL(file) {
    var url = null ; 
    if (window.createObjectURL!=undefined) { // basic
        url = window.createObjectURL(file) ;
    } else if (window.URL!=undefined) { // mozilla(firefox)
        url = window.URL.createObjectURL(file) ;
    } else if (window.webkitURL!=undefined) { // webkit or chrome
        url = window.webkitURL.createObjectURL(file) ;
    }
    return url ;
}
</script>


