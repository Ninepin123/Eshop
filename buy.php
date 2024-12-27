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
        }
        else{

        }
    }
?>