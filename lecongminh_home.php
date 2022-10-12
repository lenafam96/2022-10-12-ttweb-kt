<?php

$sql = "select * from tbl_book";
$result = (new Connect())->excuteQuery($sql);
?>

<h1>Book Management System</h1>

<div class="container">
    <table class="table-home">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Author</th>
            <th colspan='2'>Action</th>
        </tr>
        <?php foreach ($result as $each) : ?>
            <tr>
                <td id="<?php echo $each['ID']; ?>"><?php echo "#" . $each['ID']; ?></td>
                <td><?php echo $each['Title']; ?></td>
                <td><?php echo number_format($each['Price'], 0) . " ₫"; ?></td>
                <td><?php echo $each['Author']; ?></td>
                <td><a href="?action=edit&id=<?php echo $each['ID']; ?>">Edit</a></td>
                <td><a onclick="return Del('<?php echo $each['Title']; ?>')" href="?action=delete&id=<?php echo $each['ID']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<br>
<br>
<br>
<a href="index.php?action=create">Add book</a>