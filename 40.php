<html>
<head>
    <title>留言板</title>
</head>
<?php
    $id = $_GET["id"];
    $bid = $_GET["bid"];
    echo 'id = '.$id.'<br>';
    echo 'bid = '.$bid.'<br>';
    include("connection.php");
    $select_db=@mysql_select_db("school");
    if(!$select_db){
        echo '<br>找不到資料庫!<br>';
    }
    else{
        echo '<br>找到資料庫!<br>';
        $sql_query = "select * from sw where id='".$id."' ";
        $result = mysql_query($sql_query);
        echo '<center><table width=100% border=0>';
        echo '<tr>';
        while($row = mysql_fetch_array($result)){
            echo '<td width=20%><center><img src=pic/'.$row[0].'.jpg width=100 hight=100><br>';
            echo '書名:' .$row[1].'<br>';
            echo '作者:' .$row[2].'<br>';
            echo '出版商:' .$row[3].'<br>';
            echo '描述:' .$row[5].'<br>';
            echo '出版日:' .$row[6].'<br>';
            echo '售價(非會員):' .$row[8].'<br>';
            echo '售價(會員):' .$row[8]*0.85.'<br>';
            echo '庫存:' .$row[9].'<br>';
            if ($row[9]!=0){
                echo '<form method=get action=buy.php>
                我要買:<select name="number">';
                for($i=1;$i<=$row[9];$i++){
                    echo '<option value='.$i.'>'.$i.'</option>';
                }
                echo '</select>本';
                echo '
                <input type=hidden name=id value='.$row[0].'>
                <input type=hidden name=bid value='.$bid.'>
                <input type=hidden name=chk value=1>
                <p><input type=submit value=加入購物車>
                </form>';
            }
        }
        
    }
?>