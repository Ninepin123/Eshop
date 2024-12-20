<?php
    $filename = $_GET["id"];
?>

<?php
    include("connection.php");
    $select_db=@mysql_select_db("school");
    $sql_query = "select * from admin where id='" .$filename."'";

    $result = mysql_query($sql_query);
    
    if(mysql_num_rows($result) == 1)
    {
        echo '<br>歡迎光臨';
        echo '
<center><table border=0 width=50%>
<tr>
    <td><a href=add.php>商品資料維護</a>
    <td><a href=usrdb.html>會員資料維護</a>
</tr>
</table>';
    }
    else{
        echo '<br>你的帳號不存在或密碼有錯誤';
    }
?>
