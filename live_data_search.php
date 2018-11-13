<?php include 'inc/header.php'; ?>
<h2>Topics: Live Data Search</h2>
<div class="content">
    <style>
        .tblone{background: #0080C2; padding: 5px 30px; width: 189px;margin-top: 20px; width: 825px}
        .tblone ul{margin: 0; padding: 0; list-style: none;}
        .tblone ul li{cursor: pointer;}
        .tblone ul li:hover{background-color: #00AEC0;}
    </style>
    <form action="" method="post">
        <table>
            <tr>
                <td>Search Content </td>
                <td>:</td>
                <td>
                    <input type="text" name="livesearch" id="livesearch" placeholder="Search Here...">
                </td>
            </tr>
        </table>
        
    </form>
    <div align="center" id="datastatus"></div>
</div>
<?php include 'inc/footer.php'; ?>
