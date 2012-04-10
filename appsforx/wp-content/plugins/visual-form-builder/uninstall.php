<?php
	if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
		exit();
		
	global $wpdb;
	
	$form_table = $wpdb->prefix . 'visual_form_builder_fields';
	$fields_table = $wpdb->prefix . 'visual_form_builder_forms';
	$entries_table = $wpdb->prefix . 'visual_form_builder_entries';
	
	$wpdb->query( "DROP TABLE IF EXISTS $form_table" );
	$wpdb->query( "DROP TABLE IF EXISTS $fields_table" );
	$wpdb->query( "DROP TABLE IF EXISTS $entries_table" );
	
	delete_option( 'vfb_db_version' );
	delete_option( 'visual-form-builder-screen-options' );
?>