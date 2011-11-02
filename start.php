<?php
	/**
	 * Elgg zimbra plugin
	 *
	 * @package ElggZimbra
	 */
	/**
	 * Profile init function; sets up the profile functions
	 *
	 */
		function zimbra_init() {
			elgg_extend_view('profile/menu/actions','zimbra/links', 495);
		}

		register_elgg_event_handler('init','system','zimbra_init');