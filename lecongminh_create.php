<div class="container">
    <h1>Form add book</h1>
    <form action="?action=store" method="post">
        <table class="noborder">
            <tr>
                <td>Title:</td>
                <td><input type="text" name="Title" required></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="Price" onkeypress="inputValid(event)" required></td>
            </tr>
            <tr>
                <td>Author:</td>
                <td><input type="text" name="Author" required></td>
            </tr>
            <tr>
                <td colspan="2" class="btn">
                    <button type="submit">Add book</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</div>


<a href="index.php?action=home">Trang chủ</a>