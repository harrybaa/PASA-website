<?php
/**
 * Times Square
 *
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

get_header();

// if(isset($times_square_settings['default-layout'])) {
// 	if($times_square_settings['default-layout'] == 'full-width') {
// 		get_template_part( 'template-fullwidth', 'none' );
// 	} else if($times_square_settings['default-layout'] == 'sidebar-left') {
// 		get_template_part( 'template-sidebar-left', 'none' );
// 	} else if($times_square_settings['default-layout'] == 'sidebar-both') {
// 		get_template_part( 'template-sidebar-sides', 'none' );
// 	} else {
// 		get_template_part( 'template-sidebar-right', 'none' );
// 	}
// } else {
// 	get_template_part( 'template-sidebar-right', 'none' );
// }
?>

<div class='index-main'>

	<!-- Fist gallery and intro of the lab -->
	<p class='slogon'>
		<span>Welcome to</span> <br>
		<span class='red'>P</span>arallel <br> 
		<span class='red'>A</span>rchitecture, <br>
		<span class='red'>S</span>ystem, and <br>
		<span class='red'>A</span>lgorithm lab!
	</p>

	<!-- introduction of our lab -->
	<div class='intro-wrapper'>
		<h3>INTRODUCTION</h3>
		<p style="font-size:16px;"> The Parallel Architecture, System, and Algorithm (PASA) Lab in the Electrical 
		Engineering and Computer Science Department 
		at the University of California, Merced performs research in core technologies for large-scale parallel systems. 
		The core theme of our research is to study how to enable scalable and efficient execution of enterprise and scientific applications on increasingly complex large-scale parallel systems. 
		Our work creates innovation in runtime, architecture, performance modeling, and programming models;  
		We also investigates the impact of novel architectures (e.g., non-volatile memory and accelerator with massive parallelism) on the designs of applications and runtime.
		We investigate these technologies with the goal of improving the performance, energy efficiency, reliability, and productivity of large-scale parallel systems. 


               See our Research and Publications pages for more information about this work. Also, for more information about the members of our group, see our People page.

                </p>
	</div>

</div>

<?php

get_footer();

?>
