<?php get_template_part('tophead'); ?>
   <?php $categories = get_categories(array( 'hide_empty'=>1,'order'=>'DESC')); ?>
   <?php foreach($categories as $cat): ?>
      <div class="category"><span><a href="<?php echo get_bloginfo('home').'?cat='.$cat->cat_ID;?>"><?php echo $cat->cat_name; ?></a></span></div>
      <div class="posts">
         <?php $posts_array = get_posts("category=".$cat->cat_ID); ?>
         <?php foreach( $posts_array as $post ) :	setup_postdata($post); ?>
         <div class="post" id="post-<?php the_ID(); ?>">
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a><?php edit_post_link("Edit", " ", ""); ?></h1>
            
            <div class="entry">
               <?php the_excerpt(); ?>
               <div class="attributes">
                  <?php the_time("l F j, Y") ?> <br />
               </div>  <!-- end attributes -->       
            </div> <!-- end entry -->
         </div> <!-- end post -->
         <?php endforeach; ?> <!-- end foreach of posts for a category -->
      </div> <!-- end posts -->
   <?php endforeach; ?> <!-- end foreach of categories -->
   <div id="footer">Duc Dang, 2010</div>

</body>

</html>
