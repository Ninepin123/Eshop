<?php
    $filename = $_GET["id"];
    $filepasswd = $_GET["name"];
    echo "id:" . $filename;
    echo "<br>pwd:" . $filepasswd;
    echo "<br>";
?>

<?php
    include("connection.php");
    $select_db=@mysql_select_db("school");
    $sql_query = "select * from usr where usrid='" . $filename . "' and passwd='" . $filepasswd . "'";

    $result = mysql_query($sql_query);
    
    if(mysql_num_rows($result) == 1)
    {
        echo '<br>歡迎光臨';
    }
    else{
        echo '<br>你的帳號不存在或密碼有錯誤';
    }
?>
