<?php

$sqlStr = "SELECT * FROM friendlink";
$query = $mysqli->query($sqlStr);
$user_arr = "";
while ($row = $query->fetch_object()) {
    $user_arr[] = $row;
}
$arr = json_decode(json_encode($user_arr, JSON_UNESCAPED_UNICODE), true);
$num = count($arr);
for ($i = 0; $i < $num; ++$i) {
    ?>
    <a href="<?php echo $arr[$i]['url']?>" target="view_window"><?php echo $arr[$i]['name']?></a>
    <?php
}
?>