<?php

$oldID = $_POST['oldID'];
$id = $_POST['ID'];
$title = $_POST['Title'];
$price = $_POST['Price'];
$author = $_POST['Author'];

$sql = "select count(*) as `count` from `quanlysach`.`tbl_book` where `ID` = $id";
$result = (new Connect())->excuteQuery($sql);
$book = mysqli_fetch_array($result);

if ($oldID !== $id && $book['count'] > 0) {
    header("location: index.php?action=edit&id=$oldID&error=$id");
} else {
    $sql = "update `quanlysach`.`tbl_book` set `title` = '$title', `Author` = '$author', `Price` = $price, `ID` = $id where `ID` = $oldID";
    (new Connect())->excuteNonQuery($sql);
    header('location: index.php?action=home');
}
