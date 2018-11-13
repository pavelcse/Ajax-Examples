<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
	<style>
		.skill{background: #0080C2; color: #fff; margin-left: 105px; padding: 5px 30px; width: 189px;}
		.skill ul{margin: 0; padding: 0; list-style: none;}
		.skill ul li{cursor: pointer;}
		.skill ul li:hover{background-color: #00AEC0;}
	</style>
	<form action="" method="post">
		<table>
			<tr>
				<td>Text Suggestion</td>
				<td>:</td>
				<td>
					<input type="text" name="skill" id="skill" placeholder="skill">
				</td>
			</tr>
		</table>
		<div id="skillstatus"></div>

	</form>
</div>
<?php include 'inc/footer.php'; ?>