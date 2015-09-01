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
		<span>Welcome to</span> <br>
		<span class='red'>P</span>arallel <br> 
		<span class='red'>A</span>rchitecture, <br>
		<span class='red'>S</span>ystem and <br>
		<span class='red'>A</span>lgorithm lab!
	</p>

	<div class='intro-wrapper'>
		<h1>INTRODUCTION</h1>
	</div>

	<div class='news-wrapper'>
		<h1>NEWS</h1>
		<ul class='i-m-news'>
			<li>
				Aug 12th, 2015. Beta version of group website.
			</li>
			<li>
				Highly-motivated PhD/Master students are sought to start in Spring 16 /Fall 2016under Professor Dong Li in the areas of high performance computing, and parallel and distributed systems. Funding for students is expected to be in the form of research and/or teaching assistantships. 
			</li>
			<li class='list-more'>
				<a href='#'>More..</p>
			</li>
		</ul>
		
	</div>
	<div class='news-wrapper'>
		<h1>PUBLICATIONS</h1>
		<ul class='i-m-news'>
			<li>
				Poremba, M., Mittal, S., Li, D., Vetter, J. S., & Xie, Y. (2015). DESTINY: A Tool for Modeling Emerging 3D NVM and eDRAM Caches. In IEEE Design Automation and Test in Europe Confernce and Exhibition (DATE).
			</li>
			<li>
				Wu, B., Chen, G., Li, D., Shen, X., & Vetter, J. S. (2015). Enabling and Exploiting Flexible Task Assignment on GPU through SM-Centric Program Transformations. InInternational Conference on Supercomputing (ICS).			
			</li>
			<li class='list-more'>
				<a href='#'>More..</p>
			</li>
		</ul>
	</div>
</div>

<?php

get_footer();

?>