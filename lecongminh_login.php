<script>
    <?php if (isset($_GET['error'])) { ?>
        alert('<?php echo "Username or Password incorrected!"; ?>');
    <?php } ?>
</script>

<div class="container">
    <h1>Login</h1>
    <form action="?action=verification" method="post">
        <table class="noborder">
            <tr>
                <td>Username:</td>
                <td><input type="text" name="Username" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="Password" required></td>
            </tr>
            <tr>
                <td colspan="2" class="btn">
                    <button type="submit">Login</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</div>