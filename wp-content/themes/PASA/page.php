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
            <?php

              query_posts('page_id=171');
              while (have_posts()) : the_post();
                the_content();
              endwhile;  
            ?>
            </div>

          </div>
          <div class="r-c-pablication r-c-wrapper">
            <div class="r-c-headwrap"><a href="http://pasa.ucmerced.edu/?page_id=15">Recent Publications</a></div>

            <div class='r-c-list publication'>
            <?php

              query_posts('page_id=15');
              while (have_posts()) : the_post();
                the_content();
              endwhile;  
            ?>
            </div>

          </div>
        </div>
        <!-- end of right -->

      </div><!--end .page_wrapper-->       
    </div>
</div>	
<?php get_footer(); ?>