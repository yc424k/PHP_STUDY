<!DOCTYPE html>
<html>
	<head>
		<meta charset ="utf-8">
		<title></title>
	</head>
	<body>
		<h1>대한민국 국군</h1>
		<ol>
			<li><a href ="index.php?id=ARMY">육군</a></li>
			<li><a href ="index.php?id=AIRFORCE">공군</a></li>
			<li><a href ="index.php?id=NAVY">해군</a></li>
		</ol>
		<h2>
			<?php
				echo $_GET['id'];
			?>
		</h2>
		
		<?php
    		echo file_get_contents("data/airforce");
     	?>
		
		<?php
			echo $_SERVER["DOCUMENT_ROOT"];
		?>




		
	</body>
</html>