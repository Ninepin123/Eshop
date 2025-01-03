<?php
$id = $_GET["id"];
$address=$_GET["address"];
$bid=$_GET["bid"];
$tel=$_GET["tel"];
echo 'id='.$id.'<br>';
echo 'address='.$address.'<br>';
echo 'bid='.$bid.'<br>';
echo 'tel='.$tel.'<br>';
include("connection.php");
$select_db=@mysql_select_db("school");
    if($id==''||$address==''||$tel=='')
    {
        echo '<font color=red size=5>資料不齊全，購買失敗，請回上一頁</font>';
    }
    else{
        $chk=0;
        $price=0;
        $sql_query = "select * from usr where usrid='".$id."'";

        $result = mysql_query($sql_query);
        if(mysql_num_rows($result)==1){
            $chk = 1;
        }
        $sql_query = "select * from baseket where bid='".$bid."'";
        $result = mysql_query($sql_query);
        while($row = mysql_fetch_array($result)){
            $sql_query00 = "select * from sw where id='".$row[1]."'";
            $result00 = mysql_query($sql_query00);
            $row00 = mysql_fetch_array($result00);
            if($chk==1){
                $price = $price=$price+$row00[8]*0.85;
            }else{
                $price = $price=$price+$row00[8];
            }
            $cnt=$row00[9]-$row[2];
            $sql_qry ="UPDATE `sw` SET `inventory` = '".$cnt."' WHERE `sw`.`id` = '".$row00[0]."'   ";
            mysql_query($sql_qry);
            include("buy.htm");
            $sql_query = "INSERT INTO final VALUES('".$bid."','".$bid."','".$tel."','".$address."','".$price."')";
            mysql_query($sql_query);
        }
    }
?>