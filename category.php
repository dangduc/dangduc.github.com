<?php get_template_part('tophead'); ?>
      <?php 
      $categories = get_the_category();
      foreach($categories as $cat): ?>
      <div class="category"><span><a href="<?php echo get_bloginfo('home').'?cat='.$cat->cat_ID;?>"><?php echo $cat->cat_name; ?></a></span></div>

      <?php endforeach; ?>
      <div class="posts">
         <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         <div class="post" id="post-<?php the_ID(); ?>">
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a><?php edit_post_link("Edit", " ", ""); ?></h1>
            <div class="entry">
               <?php the_excerpt(); ?>
               <div class="attributes">
                  <?php the_time("l F j, Y") ?> <br />
               </div>  <!-- end attributes -->       
            </div> <!-- end entry -->
         </div> <!-- end post -->
         <?php endwhile; ?> <!-- end foreach of post for a category -->
         <?php else : ?>
         <div class="post">
            <h2>Not Found</h2>
         </div>
         <?php endif; ?>
      </div> <!-- end posts -->
      
   <div id="footer">Duc Dang, 2010</div>

</body>

</html>
