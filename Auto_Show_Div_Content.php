<?php include 'inc/header.php'; ?>
<h2>Topics: Auto Refresh Div Content</h2>
<div class="content">
    <style>
        .data{background: #0080C2; color: #fff; margin-left: 85px; padding: 5px 30px; width: 189px;margin-top: 20px;}
        .data ul{margin: 0; padding: 0; list-style: none;}
        .data ul li{cursor: pointer;}
        .data ul li:hover{background-color: #00AEC0;}
    </style>
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