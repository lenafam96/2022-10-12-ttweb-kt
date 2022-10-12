<?php
$id = $_GET['id'];
$sql = "select * from `quanlysach`.`tbl_book` where ID = " . $id;
$result = (new Connect())->excuteQuery($sql);
$book = mysqli_fetch_array($result);
?>

<script>
    <?php if (isset($_GET['error'])) {
        $error = $_GET['error']; ?>
        alert('<?php echo "ID $error đã tồn tại"; ?>');
    <?php } ?>
</script>

<div class="container">
    <h1>Form edit book</h1>
    <form action="?action=update" method="post">
        <input type="text" name="oldID" required value="<?php echo $id; ?>" hidden>
        <table class="noborder">
            <tr>
                <td>ID:</td>
                <td><input type="number" name="ID" onkeypress="inputValid(event,false)" required value="<?php echo $book['ID']; ?>" required></td>
            </tr>
            <tr>
                <td>Title:</td>
                <td><input type="text" name="Title" value="<?php echo $book['Title']; ?>" required></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="Price" onkeypress="inputValid(event)" value="<?php echo $book['Price']; ?>" required></td>
            </tr>
            <tr>
                <td>Author:</td>
                <td><input type="text" name="Author" value="<?php echo $book['Author']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2" class="btn">
                    <button type="submit">Update book</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<a href="index.php?action=home">Trang chủ</a>