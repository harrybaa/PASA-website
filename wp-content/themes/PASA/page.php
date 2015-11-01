<?php
/*
Template Name: PASA defaul page
*/
?>

<?php get_header(); ?>
<div class="content-area">
    <div class="container main_content_wrap">
      <div class="page_wrapper">  
        
        <!-- left -->
        <div class="left-cont">
          
        <section id="site-main" class="site-main content-part" >            
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>

        <?php
        //If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
            comments_template();
        ?>      
      <?php endwhile; // end of the loop. ?>
        </section>
         <div class="clear"></div>

        </div>
        <!-- end of left -->

        <!-- right -->
        <div class="right-cont">
          <div class="r-c-news r-c-wrapper">
            <div class="r-c-headwrap"><a href="http://pasa.ucmerced.edu/?page_id=171">Recent News</a></div>

            <div class='r-c-list news'>

            </div>

          </div>
          <div class="r-c-pablication r-c-wrapper">
            <div class="r-c-headwrap"><a href="http://pasa.ucmerced.edu/?page_id=15">Recent Publications</a></div>

            <div class='r-c-list publication'>

            </div>

          </div>
        </div>
        <!-- end of right -->

      </div><!--end .page_wrapper-->       
    </div>
</div>

<script id="news_item" type="text/html">
  <p><b>[{{date}}] </b>{{cont}}</p>
</script>

<script id="news_main" type="text/html">
  <ul>
    {{each list as value i}}
      <li><b>{{value.date}}: </b>{{value.cont}}</li>
    {{/each}}
  </ul>
</script>

<script id="pub_item" type="text/html">
  <p><b>"{{cont}}"</b> <i>--{{publisher}}</i></p>
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
    if(url.pub){
      $.ajax({
        url: url.pub,
        dataType: 'json',
        success: function(res){
          console.log('Pub Json data loaded.');
          renderPubData(res);
        },
        error: function(){
          console.log('Faild to load the pub data.');
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
    if(len >3) len = 3;
    for(var i = 0; i < len; i++){
      fragmentSide += template("news_item", data[i]);
    }
    $(".r-c-list.news").html(fragmentSide);


    fragmentMain += template("news_main", dataMain);
    $("#post-171 .entry-content").html(fragmentMain);
  }

  function renderPubData(res){
    var fragment = '',
        data = res.pub,
        len = data.length;
    if(len >3) len = 3;
    for(var i = 0; i < len; i++){
      fragment += template("pub_item", data[i]);
    }
    $(".r-c-list.publication").html(fragment);
  }
</script>

<?php get_footer(); ?>