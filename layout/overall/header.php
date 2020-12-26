<?php 
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$start = $time;
?>

<!DOCTYPE html>
<html>
<head>
	
	<title><?php echo $config['site_title']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="website description" />
  	<meta name="keywords" content="website keywords, website keywords" />
	<link href="layout/style/style.css" rel="stylesheet" type="text/css" />
	<!--link href="layout/style/basic.css" rel="stylesheet" type="text/css" /-->
</head>
<body>
	<div class="container">
		<div class="navbar_top"></div>
		<div class="navbar_mid">
			<a href="index.php" class="link1"></a>
			<a href="downloads.php" class="link2"></a>
			<a href="shop.php" class="link3"></a>
			<a href="guilds.php" class="link4"></a>
			<a href="onlinelist.php" class="link5"></a>
			<a href="serverinfo.php" class="link6"></a>
			<form type="submit" action="characterprofile.php" method="get">
				<input type="text" name="name" class="nav_search" placeholder="Find player..."/>
				<input type="submit" name="Submit" class="nav_search_btn" value=""/>
			</form>
		<div class="navbar_bot"></div></div>
		
		<div class="container_cnt">
			<div class="container_left">
				<div class="top"></div>
				<div class="mid">
					<?php include 'layout/leftmenu.php'; ?>
				</div>
				<div class="bot"></div>
			</div>
			<div class="container_mid">