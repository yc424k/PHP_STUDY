<!DOCTYPE html>
<html>
	<head>
		<meta charset ="utf-8">
		<title></title>
	</head>
	<body>
		<h1><a href=index.php>대한민국 국군</a></h1>
		<ol>
			<li><a href ="index.php?id=ARMY">육군</a></li>
			<li><a href ="index.php?id=AIRFORCE">공군</a></li>
			<li><a href ="index.php?id=NAVY">해군</a></li>
		</ol>
		<h2>
			<?php
				if(isset($_GET['id'])){
					echo $_GET['id'];
				}else{
					echo "Welcome";
				}
			?>
		</h2>
		
		<?php
			if(isset($_GET['id'])){
    		echo file_get_contents("data/".$_GET['id']);
			}else{
				echo "Hello,Army";
			}
		?>
	</body>
</html>