<?
	$profile="test<br>";
	$navuser="test<br>";
	$friendsOnline="test";
?>
<link rel="stylesheet" href="files/css/main.css">
<body>
	<div id="header">
		<h1 class="lfloat">logo</h1>
		<div id="notifContainer" class="lfloat">
			<div id="req" class="jewel">Request</div>
			<div id="msg" class="jewel">Message</div>
			<div id="notif" class="jewel">Notification</div>
		</div>
		<div id="headNav">
			<form class="lfloat" method="get" id="navSearch" name="navSearch" action="https://www.facebook.com/search/results.php" role="search" onsubmit="return Event.__inlineSubmit(this,event)"><div class="uiTypeahead" id="ujyfzc_1"><div class="wrap"><input type="hidden" autocomplete="off" class="hiddenInput"><div class="innerWrap"><span class="uiSearchInput textInput" id="ujyfzc_2"><span><input type="text" class="inputtext DOMControl_placeholder" maxlength="100" aria-label="Search" accesskey="/" id="q" name="q" onclick="var q = $(&quot;q&quot;);if (q.value == q.getAttribute(&quot;placeholder&quot;)) {q.focus(); return false;}" placeholder="Search" autocomplete="off" tabindex="" onfocus="$(&quot;search_first_focus&quot;).value = $(&quot;search_first_focus&quot;).value || +new Date();;Bootloader.loadComponents(&quot;SearchBootloader&quot;, bagofholding);" aria-autocomplete="list" aria-expanded="false" aria-invalid="false" aria-owns="typeahead_list_ujyfzc_1" role="textbox" spellcheck="false" value="Search"><button type="submit" onclick="var q = $(&quot;q&quot;);if (q.value == q.getAttribute(&quot;placeholder&quot;)) {q.focus(); return false;}" title="Search"><span class="accessible_elem">Search</span></button></span></span></div></div></div><input type="hidden" name="init" id="init" value="quick"><input type="hidden" name="tas" class="search_sid_input" value="search_preload"><input type="hidden" name="search_first_focus" id="search_first_focus" value=""></form>
			<div class="rfloat"><ul id="pageNav" role="navigation"><li class="topNavLink tinyman"><a href="https://www.facebook.com/maximilian.nasarewski?ref=tn_tnmn" title="Profile" accesskey="2"><img class="uiProfilePhoto headerTinymanPhoto uiProfilePhotoLarge img" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash2/174502_100000608431095_575990238_q.jpg" alt=""><span class="headerTinymanName">Maximilian</span></a></li><li class="topNavLink middleLink" id="navHome"><a href="https://www.facebook.com/?ref=tn_tnmn" accesskey="1">Home</a></li><li id="navAccount" class="topNavLink"><a id="navAccountLink" href="https://www.facebook.com/editaccount.php?ref=mb&amp;drop" rel="toggle" role="button" aria-haspopup="1" aria-controls="userNavigation" aria-labeledby="userNavigationLabel"><div class="menuPulldown" id="userNavigationLabel">Account Settings</div></a><ul class="navigation" id="userNavigation" role="navigation" aria-label="Account Menu"><li><a class="navSubmenu" href="/campaign/landing.php?placement=tad&amp;campaign_id=264263327005748&amp;extra_1=auto">Advertise</a></li><li><a class="navSubmenu" href="https://www.facebook.com/editaccount.php?ref=mb&amp;drop" accesskey="6">Account Settings</a></li><li><a class="navSubmenu" href="https://www.facebook.com/settings/?tab=privacy&amp;ref=mb" accesskey="7">Privacy Settings</a></li><li><form id="logout_form" method="post" action="/logout.php" onsubmit="return Event.__inlineSubmit(this,event)"><input type="hidden" name="fb_dtsg" value="AQDWkUlA" autocomplete="off"><input type="hidden" autocomplete="off" name="ref" value="mb"><input type="hidden" autocomplete="off" name="h" value="AffyfNBWS4XsRNwl"><label class="uiLinkButton logoutButton navSubmenu"><input type="submit" value="Log out"></label></form></li><li class="menuDivider"></li><li><a class="navSubmenu" href="https://www.facebook.com/help/?ref=drop" id="navHelpCenter" target="_blank" ajaxify="https://www.facebook.com/help/ajax/contextual/?page_type=364455653583099" rel="async"><div class="clearfix"><div class="lfloat">Help</div><img class="rfloat uiLoadingIndicatorAsync img" src="https://s-static.ak.facebook.com/rsrc.php/v2/yb/r/GsNJNwuI-UM.gif" alt="" width="16" height="11"></div></a></li></ul></li></ul></div>
		</div>
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
