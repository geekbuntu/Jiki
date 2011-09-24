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
	<title><?php echo $site_name, " - ", json_decode($content)->{"title"}; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php $data = json_decode($content);?>
<div id="title">
	<?php echo $site_name, " - ", $data->{"title"};?>
</div>
<div id="content">
	<?php echo $data->{"content"};?>
</div>
</body>
</html>
<?php
	}
?>