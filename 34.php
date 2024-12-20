<?php
$filename = $_GET["id"];

include("connection.php");
$select_db = @mysql_select_db("school");
$sql_query = "SELECT * FROM usr WHERE usrid='" . $filename . "'";

$result = mysql_query($sql_query);

if (mysql_num_rows($result) == 1) {
    echo '<br>會員修改';
    echo '<form method="get" action="35.php"> 
          <center><table border=0 width=40%>';
    while ($row = mysql_fetch_array($result)) {
        <tr bgcolor=pink>
        <td align="right" width=25%>會員ID: </td>
        <td align="left"><input type=textmaxLength="10" size="10" name="usrid" value=<?echo $row[0]?>>(中、英文皆可)</td>
    
        <tr bgcolor=pink>
        <td align="right" width=25%>密碼: </td>
        <td align="left"><input type=textmaxLength="10" size="10" name="passwd" value=<?echo $row[1]?>></td>
        
        <tr bgcolor=pink>
        <td align="right" width=25%>Email: </td>
        <td align="left"><input type=textmaxLength="10" size="10" name="EMail" value=<?echo $row[2]?>></td>

        <tr bgcolor=yellow>
        <td align="right" width=25%>性別:</td>
        <td align="left"><?
        if(strcmp($row[3],"M")=="0")
            $chk = "checked";
        else{
            $chk = '';
        }
        ?></td>
        <input value = "M" type="radio" name="sex" <?echo $chk?>男>
    }
}
else{
    echo '你的帳號不存在';
}

?>