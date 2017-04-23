<?php
$con = mysql_connect("www.jyonline.cc:6700","root","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("e0web", $con);
$id=uniqid();
$sql="INSERT INTO e0_activities(ID,Title,Writer,Source,StartDate,EndDate,Location)
VALUES
('$id','$_POST[InputTitle]','$_POST[InputAuther]','$_POST[InputContent]','$_POST[Activity_starttime]','$_POST[Activity_endtime]','$_POST[InputLocation]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "活动标题：".$_POST["InputTitle"]."<br/>";
echo "作者：".$_POST["InputAuther"]."<br/>";
echo "活动内容：".$_POST["InputContent"]."<br/>";
echo "开始时间：".$_POST["Activity_starttime"]."<br/>";
echo "结束时间：".$_POST["Activity_endtime"]."<br/>";
echo "活动地点：".$_POST["InputLocation"]."<br/>";

?>