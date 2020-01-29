<!DOCTYPEhtml>
<html>
	<head>
		<meta charset = "utf-8">
		<title></title>
	</head>
	<body>
		<h1>Conditional</h1>
		<?php
			echo '1<br>';
			echo '2<br>';
			echo '3<br>';
		?>
		<h2>if</h2>
		<h3>true</h3>
		<?php
			echo '1<br>';
			if(ture){
				echo '2<br>';
			}
			echo '3<br>';
		?>
		<h3>false</h3>
		<?php
			echo '1<br>';
			if(false){
				echo '2<br>';
			}
			echo '3<br>';
		?>
		<h2>if/else</h2>
		<h3>true</h3>
		<?php
			echo '1<br>';
			if(ture){
				echo '2-1<br>';
			}else{
				echo '2-2<br>';
			}
			echo '3<br>';
		?>
		<h3>false</h3>
		<?php
			echo '1<br>';
			if(false){
				echo '2-1<br>';
			}else{
				echo '2-2<br>';
			}
			echo '3<br>';
		?>
	</body>
</html>