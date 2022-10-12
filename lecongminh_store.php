<?php

$title = $_POST['Title'];
$price = $_POST['Price'];
$author = $_POST['Author'];

$sql = "insert into `quanlysach`.`tbl_book` (`Title`,`Price`,`Author`) values ('$title',$price,'$author')";
(new Connect())->excuteNonQuery($sql);
header('location: index.php?action=home');
