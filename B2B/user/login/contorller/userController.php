<?php

require_once("../../../config/mysqli.php");

$sql = "select * from user";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo($row);
        echo "name: " . $row["username"]. "<br>";
    }
} else {
    echo "0 结果";
}