<?php
    $usrid = $_GET["usrid"];
    echo "usrid:" .$usrid ."<br>";
    $passwd = $_GET["passwd"];
    echo "passwd:" .$passwd."<br>";
    $EMail = $_GET["EMail"] ;
    echo "EMail:" .$EMail."<br>";
    $sex = $_GET["sex"];
    echo "sex:" .$sex."<br>";
    $birthday = $_GET["birth"];
    echo "birthday:" .$birthday."<br>";
    $hobby = $_GET["hobby"];
    echo "hobby:" .$hobby."<br>";
    $star = $_GET["star"];
    echo "star:" .$star."<br>";
    $job = $_GET["job"];
    echo "job:" .$job."<br>";
    $phone = $_GET["phone"];
    echo "phone:" .$phone."<br>";
    $oid = $_GET["oid"];

    include("connection.php");
    $select_db=@mysql_select_db("school");
    if(!$select_db)
    {
        echo '<br>找不到資料庫!<br>';
    }
    else{
        echo '<br>找到資料庫!<br>';
        $query = "delete from usr where usrid='".$oid."'";
        mysql_query($query);

        $sql_query = "INSERT INTO usr VALUES('".$usrid."', '".$passwd."','".$EMail."','".$sex."','".$birthday."','".$hobby."','".$star."','".$job."','".$phone."')";
        mysql_query($sql_query);

    
        echo '<br>會員成功更新!<br>';
    }
?>