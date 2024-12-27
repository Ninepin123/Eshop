<?php
    $usrid = $_GET["id"];
    include("connection.php");
    $select_db=@mysql_select_db("school");
    if(!$select_db)
    {
        echo '<br>找不到資料庫!<br>';
    }
    else{
        echo '<br>找到資料庫!<br>';
        $query = "delete from usr where usrid='".$usrid."'";
        mysql_query($query);

    
        echo '<br>會員成功刪除!<br>';
    }
?>