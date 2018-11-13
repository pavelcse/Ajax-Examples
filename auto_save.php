<?php include 'inc/header.php'; ?>
<h2>Topics: Auto Save Data</h2>
<div class="content">
    <style>#savestatus{color: green;} </style>
    <form action="" method="post">
        <table>
            <tr>
                <td>Your Content </td>
                <td>:</td>
                <td>
                    <textarea name="content" id="content" cols="70" rows="10" placeholder="Type Here..."></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="hidden" name="contentid" id="contentid">
                </td>
            </tr>
        </table>
        <div id="savestatus"></div>
    </form>
</div>
<?php include 'inc/footer.php'; ?>

