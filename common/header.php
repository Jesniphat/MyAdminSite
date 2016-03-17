

<h1>adminTheme - main styles</h1>

<?php
	if(isset($_SESSION["login"]))
	{
?>
	<div id="login"><p>Logged in as:<?php echo $_SESSION["login"]["fname"]; ?> <a href="logout_action.php">Logout &raquo;</a></p></div>
<?php
	}
?>
<div class="clear"></div>