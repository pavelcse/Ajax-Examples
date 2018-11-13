<?php include 'inc/header.php'; ?>
<h2>Topics: Auto Refresh Div Content</h2>
<div class="content">
    <form action="" method="post">
        <table>
            <tr>
                <td>Content</td>
                <td>:</td>
                <td>
                    <textarea name="body" id="body" cols="70" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="autosubmit" id="autosubmit" value="Submit Data">
                </td>
            </tr>
        </table>
        <div id="autostatus"></div>
    </form>
</div>
<?php include 'inc/footer.php'; ?>