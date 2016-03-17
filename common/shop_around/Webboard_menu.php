<?php
	include_once("function/webboard_data_access.php");
	$webboard = read_all_webboard();
?>

<h2>webboard <span></span></h2>
<div class="box-content">
	<ul>
		<?php
			foreach($webboard as $wb)
			{		?>
	    <li><a href="list_forums_by_webboard_id_action.php?webboard_id=<? echo $wb["id"]; ?>"><? echo $wb["name"] ?></a></li>
	    <?php
			}
		?>
	</ul>
</div>