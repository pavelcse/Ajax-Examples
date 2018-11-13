<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
	<form action="" method="post">
		<table>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" name="password" id="password" placeholder="password">
				</td>
				<td>
					<button type="button" name="showpassword" id="showpassword" value="">Show Password</button>
				</td>
			</tr>
		</table>
		<div id="showpassword"></div>

	</form>
</div>
<?php include 'inc/footer.php'; ?>