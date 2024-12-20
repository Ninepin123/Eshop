<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入介面</title>
    <script>
        function login() {
            if (!window.location.search.includes("submitted=true")) {
                alert("歡迎光臨");
                var filename = prompt("請輸入您的帳號：");
                var filepasswd = prompt("請輸入您的密碼：");

                if (filename && filepasswd) {

                    document.getElementById("filename").value = filename;
                    document.getElementById("filepasswd").value = filepasswd;
                    document.getElementById("loginForm").submit();
                } else {

                    alert("帳號或密碼未輸入，請重新整理頁面！");
                    location.reload();
                }
            }
        }
    </script>
</head>
<body onload="login()">
    <!-- 隱藏的表單 -->
    <form id="loginForm" action="?submitted=true" method="post">
        <input type="hidden" id="filename" name="filename">
        <input type="hidden" id="filepasswd" name="filepasswd">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include("connection.php");

        // 獲取 POST 數據
        $filename = $_POST['filename'];
        $filepasswd = $_POST['filepasswd'];

        if (empty($filename) || empty($filepasswd)) {
            echo '<br>未接收到帳號或密碼！';
            exit;
        }

        // 選擇資料庫
        $select_db = @mysql_select_db("school");
        if (!$select_db) {
            die("資料庫選擇失敗：" . mysql_error());
        }

        // 查詢資料庫
        $sql_query = "SELECT * FROM usr WHERE usrid='" . mysql_real_escape_string($filename) . "' AND passwd='" . mysql_real_escape_string($filepasswd) . "'";
        $result = mysql_query($sql_query);

        if (!$result) {
            die("查詢失敗：" . mysql_error());
        }

        if (mysql_num_rows($result) == 1) {
            echo '<br>歡迎光臨！';
        } else {
            echo '<br>帳號不存在或密碼錯誤！';
        }
    }
?>
</body>
</html>
