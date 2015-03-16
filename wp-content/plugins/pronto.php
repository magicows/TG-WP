<?php
/*
Plugin Name: Pronto
Description: Custom Plugin for Pronto Integration
Author: Dan
Version: 1.0
*/

function pronto_add_dependency() {
	if(is_admin()) {
		return;
	}

	?>
	<link rel="stylesheet" href="http://imo.wpstaging.co.uk/app/concat.min.css"/>
	<script type="text/javascript" src="http://imo.wpstaging.co.uk/app/app.anno.min.js"></script>
	<script type="text/javascript" src="http://prontoapp.io/bower_components/angular-ui-sortable/sortable.js"></script>
	<script type="text/javascript" src="http://prontoapp.io/dest/dependencies.js"></script>
	<script type="text/javascript" src="http://prontoapp.io/bower_components/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="http://prontoapp.io/bower_components/chartjs/chart.js"></script>
	<?php
}
add_action( 'wp_head', 'pronto_add_dependency' );