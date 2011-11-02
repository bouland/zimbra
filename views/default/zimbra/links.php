<?php

	/**
	 * Elgg profile icon hover over: passive links
	 * 
	 * @package ElggProfile
	 * 
	 * @uses $vars['entity'] The user entity. If none specified, the current user is assumed. 
	 */

?>
	<p class="user_menu_profile">
		<a target="_blank" href="https://zimbra.inria.fr/home/<?php echo $vars['entity']->email; ?>/Calendar.html"><?php echo elgg_echo("zimbra:calendar"); ?></a>
	</p>
	