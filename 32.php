 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增</title>
 </head>
 <body>
<form method="get" action="30.php">
<p align="center"><font size="4" face="標楷
體" color=blue>會員註冊</font></p>
<hr>
<TT>
<center>
<table border="0" width="30%">
<tr bgcolor=pink>
<td align="right">會員ID: </td>
<td align="left"><input type=text
maxLength="10" size="10" name="usrid">(中、
英文皆可)</td>
<tr>
<td align="right">密碼: </td>
<td align="left"><input type=text
maxLength="10" size="10"
name="passwd"></td>
<tr bgcolor=#77DDFF>
<td align="right">E‐Mail: </td>
<td align="left"><input type=text  
size="20" name="EMail"></td>
<tr>
<td align="right">性別:</td>
<td align="left">
    <input value="M" type="radio"
name="sex" checked>男
    <input value="F" type="radio"
name="sex">女
<tr bgcolor=pink>
<td align="right">生日:</td>
<td align="left">
西元:<input type=text maxLength="4"
size="4" name="year">年
<input type=text maxLength="4" size="2"
name="mon">月
<input type=text maxLength="4" size="2"
name="days">日
<tr>
<td align="right">興趣:</td>
<td align="left">
<select name="hobby">
    <option selected value="literature">文
學</option>
    <option value="exercise">運動</option>
    <option value="music">音樂</option>
    <option value="science">科學</option>
    <option value="art">藝術</option>
    <option value="modern">時尚</option>
</select >
<tr bgcolor=#77DDFF>
<td align="right">星座:</td>
<td align="left">
<select name="star">
      <option selected value=5>白羊座
</option>
      <option value=6>金牛座</option>      
      <option value=7>雙子座</option>      
      <option value=8>巨蟹座</option>
      <option value=9>獅子座</option>      
      <option value=10>處女座</option>     
      <option value=11>天秤座</option>     
      <option value=12>天蠍座</option>     
      <option value=13>射手座</option>     
      <option value=14>魔羯座</option>     
      <option value=15>水瓶座</option>     
      <option value=16>雙魚座</option>     
</select >
<tr>
<td align="right">職業:</td>
<td align="left">
<select name="job">
   <option selected value=17>士</option>
   <option value=18>農</option>
   <option value=19>工</option>
   <option value=20>商</option>
   <option value=21>服務</option>
</select >
<tr bgcolor=pink>
<td align="right" width=20%>電話:</td>
<td align="left">
<input maxLength="15" size="15"
name="phone" type="text">
</table>
<p align="center">
<input value="線上註冊" type="submit">
<input value=" 清  除 " type="reset" > 　
</form>
</body>
 </html>