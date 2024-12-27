<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>39.php</title>
</head>
<?php
    $cate = $_GET["cate"];
    $bid = $_GET["bid"];
    echo 'cate = '.$cate.'<br>';
    echo 'bid = '.$bid.'<br>';
    include("connection.php");
    $select_db=@mysql_select_db("school");
    if(!$select_db){
        echo '<br>找不到資料庫!<br>';
    }
    else{
        echo '<br>找到資料庫!<br>';
        $sql_query = "select * from sw where cate='".$cate."' ";
        $result = mysql_query($sql_query);

        echo '<center><table width=100% border=0>';
        echo '<tr>';
        $cnt = 0;
        while($row = mysql_fetch_array($result)){
            $cnt++;
            if($cnt==6){
                echo '<tr>';
            }
            echo '<td width=20%><center><img src=pic/'.$row[0].'.jpg width=100 hight=100><br>';
            echo '<a href=40.php?id='.$row[0].'&bid='.$bid.'>'.$row[1].'</a>';
        }
        echo '</table>';
    }
?>

<body>
    
</body>
</html>