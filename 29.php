<?php
    $filename = $_GET["id"];
?>

<?php
    include("connection.php");
    $select_db=@mysql_select_db("school");
    $sql_query = "select * from usr where usrid='" .$filename."'";

    $result = mysql_query($sql_query);
    
    if(mysql_num_rows($result) == 1)
    {
        echo '<br>歡迎光臨';
        echo '<center><table border=0 width=23%>';
        while($row = mysql_fetch_array($result))
        {
?>
    <tr bgcolor=pink>
    <td align="right" width=25%>會員ID:</td>
    <td align="left"><?echo $row[0]?></td>

    <tr bgcolor=yellow>
    <td align="right" width=25%>密碼:</td>
    <td align="left"><?echo $row[1]?></td>
    
    <tr bgcolor=pink>
    <td align="right" width=25%>Email:</td>
    <td align="left"><?echo $row[2]?></td>

    <tr bgcolor=yellow>
    <td align="right" width=25%>性別:</td>
    <td align="left"><?echo $row[3]?></td>

    <tr bgcolor=pink>
    <td align="right" width=25%>生日:</td>
    <td align="left"><?echo $row[4]?></td>

    <tr bgcolor=yellow>
    <td align="right" width=25%>興趣:</td>
    <td align="left"><?echo $row[5]?></td>
    

    <tr bgcolor=pink>
    <td align="right" width=25%>星座:</td>
    <td align="left"><?php
    if ($row[6] == 5) {
        echo '白羊座';
    }
    if ($row[6] == 6) {
        echo '金牛座';
    }
    if ($row[6] == 7) {
        echo '雙子座';
    }
    if ($row[6] == 8) {
        echo '巨蟹座';
    }
    if ($row[6] == 9) {
        echo '獅子座';
    }
    if ($row[6] == 10) {
        echo '處女座';
    }
    if ($row[6] == 11) {
        echo '天秤座';
    }
    if ($row[6] == 12) {
        echo '天蠍座';
    }
    if ($row[6] == 13) {
        echo '射手座';
    }
    if ($row[6] == 14) {
        echo '魔羯座';
    }
    if ($row[6] == 15) {
        echo '水瓶座';
    }
    if ($row[6] == 16) {
        echo '雙魚座';
    }
     ?></td>
    <tr bgcolor=yellow>
    <td align="right" width=25%>職業:</td>
    <td align="left"><?php
    if ($row[7] == 17) {
        echo '士';
    }
    if ($row[7] == 18) {
        echo '農';
    }
    if ($row[7] == 19) {
        echo '工';
    }
    if ($row[7] == 20) {
        echo '商';
    }
    if ($row[7] == 21) {
        echo '服務';
    }
    ?></td>
    <tr bgcolor=pink>
    <td align="right" width=25%>電話:</td>
    <td align="left"><?echo $row[8]?></td>
    <?php
        }
    echo '</table>';
    }
    else{
        echo '<br>你的帳號不存在';
    }
?>
