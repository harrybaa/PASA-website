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
		<p style="font-size:16px;">
			The Parallel Architecture, System, and Algorithm (PASA) Lab in the <a href="http://eecs.ucmerced.edu/">Electrical Engineering and Computer Science Department</a> at the <a href="http://www.ucmerced.edu/">University of California, Merced</a> performs research in core technologies for large-scale parallel systems. The core theme of our research is to study how to enable scalable and efficient execution of enterprise and scientific applications on increasingly complex large-scale parallel systems. Our work creates innovation in runtime, architecture, performance modeling, and programming models; We also investigate the impact of novel architectures (e.g., non-volatile memory and accelerator with massive parallelism) on the designs of applications and runtime.  Our goal is to improve the performance, reliability, energy efficiency, and productivity of large-scale parallel systems.
			<br><br>
			See our <a href="http://pasa.ucmerced.edu/?page_id=17">Research</a> and <a href="http://pasa.ucmerced.edu/?page_id=15">Publications</a> pages for more information about our work. For information about our group members, see our <a href="http://pasa.ucmerced.edu/?page_id=12">People</a> page. 
		</p>
	</div>

	<div class='news-wrapper'>
		<h3>RECENT NEWS</h3>
		<ul id='news_list'></ul>
	</div>
</div>

<script id="news_item" type="text/html">
  <li><b>[{{date}}] </b>{{cont}}</li>
</script>

<script type="text/javascript">
  $(document).ready(function(){
    init();
  });

  function init(){
    var url = {};
    if(location.host == "pasa.ucmerced.edu"){
      url.news = 'http://pasa.ucmerced.edu/data/news.json'
      url.pub = 'http://pasa.ucmerced.edu/data/pub.json'
    }else{
      url.news = 'http://localhost:8888/pasa-website/data/news.json'
      url.pub = 'http://localhost:8888/pasa-website/data/pub.json'
    }
    loadData(url);
  }

  function loadData(url){
    if(url.news){
      $.ajax({
        url: url.news,
        dataType: 'json',
        success: function(res){
          console.log('New Json data loaded.');
          renderNewsData(res);
        },
        error: function(){
          console.log('Faild to load the news data.');
        }
      });
    }
  }

  function renderNewsData(res){
    var fragmentSide = '',
        fragmentMain = '',
        data = res.news,
        dataMain = {"list": data};
        len = data.length;
    if(len >8) len = 8;
    for(var i = 0; i < len; i++){
      fragmentSide += template("news_item", data[i]);
    }
    $("#news_list").html(fragmentSide);
  }

</script>

<?php

get_footer();

?>
