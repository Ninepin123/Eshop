<html>
<head>
<title>php 連接資料庫</title>
</head>
<body>
<?php
//連接資料庫
$location="localhost";//連到本機
$account="root";
$password="01234567";
if(isset($location) && isset($account) && isset($password))
{
$link=mysql_pconnect($location,$account,$password);//mysql_pconnect 連接狀況給 link
 if(!$link)
 {
 echo '無法連接資料庫';
 exit();
 }
}
?>
<?php
$filename=$_GET["id"];
$filepasswd=$_GET["name"];
//接受 ID 傳過來的值
//echo 'id:'.$filename.'<br>';
//echo 'passwd:'.$filepasswd.'<br>';
$select_db=@mysql_select_db("school");//選擇資料庫
 if(!$select_db)
 {
 echo '<br>找不到資料庫!<br>';
 }
 else
 {
 echo '<br>找到資料庫!<br>';
 $sql_query = "select * from usr where usrid='".$filename."' ";//下 SQL 語法
 $result = mysql_query($sql_query);//執行 SQL 語法，執行完會丟給 result
if(mysql_num_rows($result) == 1)
 {
 echo '<TT>會員修改';
echo '<form method="get" action="35.php"><center><table border=0 width=40%>';
while($row = mysql_fetch_array($result))
{
?>
<tr bgcolor=pink>
<td align="right" width=25%>會員 ID: </td>
<td align="left"><input type=text maxLength="10" size="10" name="usrid" value=<?echo $row[0]?>>(中、英
文皆可)</td>
<tr >
<td align="right" width=25%>密碼: </td>
<td align="left"><input type=text maxLength="10" size="10" name="passwd" value=<?echo $row[1]?>></td>
<tr bgcolor=#77DDFF>
<td align="right" width=25%>EMail: </td>
<td align="left"><input type=text size="20" name="EMail" value=<?echo $row[2]?>></td>
<tr >
<td align="right" width=25%>性別: </td>
<td align="left">
<?
if(strcmp($row[3],"M")==0)
 $chk= 'checked';
else
 $chk= '';
?>
 <input value="M" type="radio" name="sex" <?echo $chk?>>男
<?
if(strcmp($row[3],"F")==0)
 $chk= 'checked';
else
 $chk= '';
?>
 <input value="F" type="radio" name="sex" <?echo $chk?>>女
</td>
<tr bgcolor=pink>
<td align="right" width=25%>生日: </td>
<td align="left"><input type=text size="20" name="birth" value=<?echo $row[4]?>></td>
<tr >
<td align="right" width=25%>興趣: </td>
<td align="left">
<select name="hobby">
 <option value="literature" <?if(strcmp($row[5],"literature")==0) echo 'selected';?>>文學</option>
 <option value="exercise" <?if(strcmp($row[5],"exercise")==0) echo 'selected';?>>運動</option>
 <option value="music" <?if(strcmp($row[5],"music")==0) echo 'selected';?>>音樂</option>
 <option value="science" <?if(strcmp($row[5],"science")==0) echo 'selected';?>>科學</option>
 <option value="art" <?if(strcmp($row[5],"art")==0) echo 'selected';?>>藝術</option>
 <option value="modern" <?if(strcmp($row[5],"modern")==0) echo 'selected';?>>時尚</option>
</select >
</td>
<tr bgcolor=#77DDFF>
<td align="right" width=25%>星座: </td>
<td align="left">
<select name="star">
 <option value=5 <?if($row[6]==5) echo 'selected';?>>白羊座</option>
 <option value=6 <?if($row[6]==6) echo 'selected';?>>金牛座</option>
 <option value=7 <?if($row[6]==7) echo 'selected';?>>雙子座</option>
 <option value=8 <?if($row[6]==8) echo 'selected';?>>巨蟹座</option>
 <option value=9 <?if($row[6]==9) echo 'selected';?>>獅子座</option>
 <option value=10 <?if($row[6]==10) echo 'selected';?>>處女座</option>
 <option value=11 <?if($row[6]==11) echo 'selected';?>>天秤座</option>
 <option value=12 <?if($row[6]==12) echo 'selected';?>>天蠍座</option>
 <option value=13 <?if($row[6]==13) echo 'selected';?>>射手座</option>
 <option value=14 <?if($row[6]==14) echo 'selected';?>>魔羯座</option>
 <option value=15 <?if($row[6]==15) echo 'selected';?>>水瓶座</option>
 <option value=16 <?if($row[6]==16) echo 'selected';?>>雙魚座</option>
</select >
</td>
<tr>
<td align="right">職業:</td>
<td align="left">
<select name="job">
 <option value=17 <?if($row[7]==17) echo 'selected';?>>士</option>
 <option value=18 <?if($row[7]==18) echo 'selected';?>>農</option>
 <option value=19 <?if($row[7]==19) echo 'selected';?>>工</option>
 <option value=20 <?if($row[7]==20) echo 'selected';?>>商</option>
 <option value=21 <?if($row[7]==21) echo 'selected';?>>服務</option>
</select >
<tr bgcolor=pink>
<td align="right" width=25%>電話: </td>
<td align="left"><input type=text name=phone value=<?echo $row[8]?>></td>
<input type=hidden name=oid value=<?echo $row[0]?>>
<tr >
<td align=right><input type="submit" value="送出">
<td><input type="reset" value="重新設定">
</form>
<?php
}
echo '</table>';
}
else
{
echo '你的帳號不存在。';
}
 }
?>
</body>
</html>