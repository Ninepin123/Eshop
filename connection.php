<?php
    $location = "localhost";
    $account = "root";
    $password = "01234567";
    if(isset($location) && isset($account) && isset($password)){
        $link = mysql_connect($location,$account,$password);
        if(!$link)
        {
            echo "無法連接資料庫";
            exit();
        }
        else{
            echo "成功連接資料庫";
        }
    }
?>