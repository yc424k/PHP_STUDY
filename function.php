<!DOCTYPE html>
<hmtl>
	<head>
		<meta charset ="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Function</h1>
		<?php
			$str = "Lorem ipsum dolor sit amet, mel malorum partiendo adversarium ne, 
			vel id eros graece efficiendi. Partem dissentias ea nec, eu.";
		
		echo  $str;
		?>
		<h2>strlen()</h2>
		<?php
			echo strlen($str);
		?>
		
		<h2>nl2br()</h2>
		<?php
			echo nl2br($str);
		?>
	</body>
</hmtl>