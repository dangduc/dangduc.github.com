<?php get_template_part('tophead'); ?>
<div id="posts">

    
      <?php $categories = get_categories(array( 'hide_empty'=>1)); ?>
      <?php foreach($categories as $cat): ?>
         <div class="category"><?php echo $cat->name; ?></div>
         <?php $posts_array = get_posts("category=".$cat->cat_ID); ?>
         <?php foreach( $posts_array as $post ) :	setup_postdata($post); ?>
         <div class="post" id="post-<?php the_ID(); ?>">
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a><?php edit_post_link("Edit", " ", ""); ?></h1>
            
            <div class="entry">
               <?php the_excerpt(); ?>
               <div class="attributes">
                  <?php the_time("l F j, Y") ?> <br />
                  <ul><li></li> <!-- li tags for xhtml 1.0 conformity -->
                     <?php the_tags("<li>","</li><li>","</li>"); ?>
                  </ul>
               </div>  <!-- end attributes -->       
            </div> <!-- end entry -->
         </div> <!-- end post -->
         <?php endforeach; ?>
         
         
      <?php endforeach; ?>
      
      
      
      
      <div class="navigation">
      
      </div>
</div> <!-- end posts -->
   <div id="footer">Duc Dang, 2010</div>
</div> <!-- end content -->

</body>

</html>
