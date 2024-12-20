<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include("connection.php")
?>
<body>
    <?php
        echo  '<br> this is php test.';
        $select_db=@mysql_select_db("school");
        if(!$select_db){
            echo '<br>找不到資料庫!<br>';
        }
        else{
            $sql_query = "select * from classes";
            $result = mysql_query($sql_query);
            echo "<p>資料筆數：" .mysql_num_rows($result).'<br>';
            echo '<table border=1 width=50%>';
            echo '<tr>';
            echo '<td>eid';
            echo '<td>sid';
            echo '<td>C_No';
            echo '<td>time';
            echo '<td>room';
            echo '<td>score';
            while($row = mysql_fetch_array($result))
            {
                echo '<tr>';
                echo '<td>'.$row[0];
                echo '<td>'.$row[1];
                echo '<td>'.$row[2];
                echo '<td>'.$row[3];
                echo '<td>'.$row[4];
                echo '<td>'.$row[5];
            }
            echo '</table>';
        }
    ?>
</body>
</html>