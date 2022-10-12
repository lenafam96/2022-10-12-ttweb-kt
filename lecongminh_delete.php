<?php
$id = $_GET['id'];
$sql = "delete from `quanlysach`.`tbl_book` where ID = " . $id;
(new Connect())->excuteNonQuery($sql);
header('location: index.php?action=home');
