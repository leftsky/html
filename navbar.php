<?php
$mysqli = new mysqli('huadong.leftsky.top', 'zyjx', 'zyjx', 'zyjx', 3306);

if (!$mysqli) {
    die('Could not connect: ' . mysql_error());
}
$mysqli->query("SET NAMES utf8");
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

$sqlStr = "SELECT * FROM term";
$query = $mysqli->query($sqlStr);
while ($row = $query->fetch_object()) {
    $user_arr[] = $row;
}
$arr = json_decode(json_encode($user_arr, JSON_UNESCAPED_UNICODE), true);
$num = count($arr);
?>
<?php
for ($i = 0; $i < $num; ++$i) {
    if ($arr[$i]['tagFatherId'] == 0) {
        ?>
        <li class="first">
            <a href="products.php"><?php echo $arr[$i]['tagName'] ?></a>
            <ul class="second">
                <?php
                for ($k = 0; $k < $num; ++$k) {
                    if ($arr[$k]['tagFatherId'] == $arr[$i]['id']) {
                        ?>
                        <li><a href="products.php?termNo=<?php echo $arr[$k]['id'] ?>" >
                            <?php echo $arr[$k]['tagName'] ?></a></li>
                        <?php
                    }
                }
                ?>
            </ul>
        </li>
        <?php
    }
}
?>

<li class="first">
    <a href="aboutus.php">关于我们</a>
    <ul class="second">
        <li><a href="aboutus.php#0">公司简介</a></li>
        <li><a href="aboutus.php#1">公司文化</a></li>
        <li><a href="aboutus.php#2">战略愿景</a></li>
        <li><a href="aboutus.php#3">联系我们</a></li>
        <li><a href="aboutus.php#4">加入我们</a></li>
        <li><a href="aboutus.php#5">在线留言</a></li>
    </ul>
</li>