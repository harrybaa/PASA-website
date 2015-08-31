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
            <div class="r-c-headwrap">Recent News</div>
              <ul class='r-c-list'>
                <li>
                  Aug 12th, 2015. Beta version of group website.
                </li>
                <li>
                  Highly-motivated PhD/Master students are sought to start in Spring 16 /Fall 2016under Professor Dong Li in the areas of high performance computing, and parallel and distributed systems. Funding for students is expected to be in the form of research and/or teaching assistantships. 
                </li>
              </ul>
          </div>
          <div class="r-c-pablication r-c-wrapper">
            <div class="r-c-headwrap">Recent Publications</div>
            <ul class='r-c-list'>
              <li>
                Poremba, M., Mittal, S., Li, D., Vetter, J. S., & Xie, Y. (2015). DESTINY: A Tool for Modeling Emerging 3D NVM and eDRAM Caches. In IEEE Design Automation and Test in Europe Confernce and Exhibition (DATE).
              </li>
              <li>
                Wu, B., Chen, G., Li, D., Shen, X., & Vetter, J. S. (2015). Enabling and Exploiting Flexible Task Assignment on GPU through SM-Centric Program Transformations. InInternational Conference on Supercomputing (ICS).     
              </li>
            </ul>
          </div>
        </div>
        <!-- end of right -->

      </div><!--end .page_wrapper-->       
    </div>
</div>	
<?php get_footer(); ?>