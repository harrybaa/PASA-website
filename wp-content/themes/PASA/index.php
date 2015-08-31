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

	<p class='slogon'>
		Welcome to <br>
		<span class='red'>P</span>arallel <br> 
		<span class='red'>A</span>lgorithm, <br>
		<span class='red'>S</span>ystem and <br>
		<span class='red'>A</span>rchitecture lab!
	</p>

	<div class='news-wrapper'>
		
		<h1>NEWS</h1>
		<ul class='i-m-news'>
			<li>
				Aug 12th, 2015. Beta version of group website.
			</li>
			<li>
				Highly-motivated PhD/Master students are sought to start in Spring 16 /Fall 2016under Professor Dong Li in the areas of high performance computing, and parallel and distributed systems. Funding for students is expected to be in the form of research and/or teaching assistantships. 
			</li>
		</ul>
	</div>
</div>

<?php

get_footer();

?>