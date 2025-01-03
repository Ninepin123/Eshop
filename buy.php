<?php
    $id = $_GET["id"];
    $bid = $_GET["bid"];
    echo 'id = '.$id.'<br>';
    echo 'bid = '.$bid.'<br>';
    include("connection.php");
    $select_db=@mysql_select_db("school");
    $bookid = $_GET["id"];
    $number = $_GET["number"];
    echo 'number:'.$number;
    $bid = $_GET["bid"];
    $chk = $_GET["chk"];
    if($chk==1){
        if($bid==''){
            $sql_query = "select max(bid) from baseket";
            $result = mysql_query($sql_query);
            $row = mysql_fetch_array($result);
            $bid00 = $row[0];
            $bid00++;
            echo 'bid:'.$bid00;
            $sql_query = "INSERT INTO baseket VALUES ('".$bid00."','".$bookid."','".$number."' )";
            mysql_query($sql_query);
        }
        else{
            $bid00 = $bid;
            $sql_query = "INSERT INTO baseket VALUES ('".$bid00."','".$bookid."','".$number."' )";
            mysql_query($sql_query);
        }
    }
?>
<body>
<center>
<p><br>
<p><br>
<font size=6 color=blue>Ebook-書購網－商品購買</font>
<hr>
<?php
    $del = $_GET["del"];
    if($del==1){
        $bookid = $_GET["bookid"];
        $bid00 = $_GET["bid"];
        $sql_query = "delete from baseket where bid='".$bid00."' and bookid='".$bookid."'";
        mysql_query($sql_query);
    }
    echo '
        <table border=0 width=50%>
        <tr>
        <p><br>
        <td><a href=39.php?cate=1&bid='.$bid00.'>程式設計</a>
        <td><a href=39.php?cate=2&bid='.$bid00.'>應用軟體</a>
        <td><a href=39.php?cate=3&bid='.$bid00.'>硬體/創客</a>
        <td><a href=39.php?cate=4&bid='.$bid00.'>網路架站</a>
        </table>
        <p><hr><center><font color=#930000>我的購物車</font>
    
    ';
    $sql_query = "select * from baseket where bid='".$bid00."' ";
    $result = mysql_query($sql_query);
    if(mysql_num_rows($result)==0){
        $bid00 = '';
    }
    echo '<center><table width=100% border=0>';
    echo '<tr bgcolor=pink>';
    echo '<td align=center>訂單編號';
    echo '<td align=center>書名';
    echo '<td align=center>作者';
    echo '<td align=center>出版商';
    echo '<td align=center>單價（非會員）';
    echo '<td align=center>單價（會員）';
    echo '<td align=center>數量';
    echo '<td align=center>刪除';
    while($row = mysql_fetch_array($result)){
        $sql_query00 = "select * from sw where id='".$row[1]."'";
        $result00 = mysql_query($sql_query00);
        $row00 = mysql_fetch_array($result00);
        echo '<tr>';
        echo '<td>'.$row[0];
        echo '<td>'.$row00[1];
        echo '<td>'.$row00[2];
        echo '<td>'.$row00[3];
        echo '<td>'.$row00[8];
        echo '<td>'.($row00[8]*0.85);
        echo '<td>'.$row[2];
        echo '<td><a href=buy.php?bid='.$bid00.'&bookid='.$row[1].'&del=1>刪除</a>';
    }
    echo '</table>';
    echo '<form action=41.php method=get>';
    echo '<input type=hidden name=bid value='.$bid00.'>';
    echo '<p align=left><table width=100% border=0>';
    echo '<tr><td>請輸入收件人：<input type=text size=20 name=id>(若是會員，請輸入會員姓名)';
    echo '<tr><td>請輸入連絡電話:<input type=text size=20 name=tel>';
    echo '<tr><td>請輸入宅配地址:<input type=text size=20 name=address>';
    echo '<tr><td><input type=submit value=確定購買>';
    echo '</form>';
    echo '</table>';
?>