<?php get_template_part('tophead'); ?>
<div class="posts">
 
   <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
         <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a><?php edit_post_link("Edit", " ", ""); ?></h1>
         
         <div class="entry">
            <?php the_content(); ?>
            <div class="attributes">
               <?php the_time("l F j, Y") ?> <br />
               <ul><li></li> <!-- li tags for xhtml 1.0 conformity -->
                  <?php the_tags("<li>","</li><li>","</li>"); ?>
               </ul>
            </div>  <!-- end attributes -->       
         </div> <!-- end entry -->
      </div> <!-- end post -->
      <?php endwhile; ?>
      <div class="navigation">
      <?php posts_nav_link('','newer','older'); ?>
      </div>
   <?php else : ?>
      <div class="post">
         <h2>Not Found</h2>
      </div>
   <?php endif; ?>
</div> <!-- end posts -->



</body>

</html>
