<?php
/*
 *  Plugin Name: Team Members
 *  Description: Adds the role "Team member"
 *  Author: Pasi Lallinaho
 *  Version: 1.0
 *  Author URI: http://open.knome.fi/
 *  Plugin URI: http://xubuntu.org/
 *
 */

add_role(
	'team_member',
	'Team member',
	array(
		'read' => true,
		'read_private_posts' => true,
		'read_private_pages' => true,
		'edit_posts' => true,
		'edit_others_posts' => true,
		'edit_pages' => true,
		'edit_others_pages' => true,
		'upload_files' => true
	)
);

?>