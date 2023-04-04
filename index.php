<!DOCTYPE html>
<html>
<head>
	<title>Статусы</title>
	<meta charset="utf-8">
</head>
<body>
	<table>
		<tr>
			<th>№</th>
			<th>Название</th>
			<th>Статус</th>
			<th>Дата</th>
		</tr>
		<?php
		$url = 'https://occul.ticketers.club/status';
		$json = file_get_contents($url);
		$data = json_decode($json, true);

		foreach ($data as $row) {
			echo '<tr>';
			echo '<td>'.$row[0].'</td>';
			echo '<td>'.$row[1].'</td>';
			echo '<td>'.$row[2].'</td>';
			echo '<td>'.$row[3].'</td>';
			echo '</tr>';
		}
		?>
	</table>
</body>
</html>
