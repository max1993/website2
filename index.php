<?
	$profile="test<br>";
	$navuser="test<br>";
	$friendsOnline="test";
?>
<link rel="stylesheet" href="files/css/main.css">
<body>
	<div id="header">
		<h1 class="lfloat"><img src="files/img/logo.jpg"></h1>
		<div id="notifContainer" class="lfloat">
			<div id="req" class="jewel">
				<a class="jewelButton"></a>
				Requests</div>
			<div id="msg" class="jewel">Message</div>
			<div id="notif" class="jewel">Notification</div>
		</div>
		<div id="headNav">xxx</div>
	</div>
	<div id="container">
		<div id="MainContent">
			<div id="leftCol" class="lfloat">
				<?=$profile;?>
				<?=$navuser;?>
				<?=$friendsOnline;?>
			</div>
			<div id="content">
				<div id="right" class="rfloat">right</div>
				<div id="middle">middle</div>
			</div>
		</div>
		<br>
		<div id="footer">footer</div>
	</div>
</body>
