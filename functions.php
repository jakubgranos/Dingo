<?php
/*
	Template for  functions
	@package Dingo
*/ 

	/*require get_template_directory() . '/includes/enqueue.php';
	require get_template_directory() . '/includes/theme_options.php';*/
	foreach (glob(get_template_directory() . "/includes/*.php") as $function) {
		$function= basename($function);
		require get_template_directory() . '/includes/' . $function;
	}
?>


