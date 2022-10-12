<?php
$sql = "call USP_Login ('" . $_POST['Username'] . "', '" . md5($_POST['Password']) . "')";
$result = (new Connect())->excuteQuery($sql);
if (!$result || mysqli_num_rows($result) === 0)
    header("location: index.php?error=1");
else
    header("location: index.php?action=home");
