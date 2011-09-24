<?php
	function init(){
		include 'config.php';
		if(!isset($_GET['page'])){
			$page = "home";
		}
		else {
			$page = $_GET['page'];
		}
		if(file_exists("pages/".$page.".json")){
			$content = file_get_contents("pages/".$page.".json");
		}
		else {
			$content = "ERROR 1";
		}
?>
<html>
<head>
	<title><?php echo $site_name; ?></title>
</head>
<body>
<?php echo $content; ?>
</body>
</html>
<?php
	}
?>