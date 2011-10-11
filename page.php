<?php get_template_part('tophead'); ?>
<div class="column posts">
   
   <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
         <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a><?php edit_post_link("Edit", " ", ""); ?></h1>
         
         <div class="entry">
            <div class="attributes">
               <?php the_time("l F j, Y") ?> <br />
            </div>  <!-- end attributes -->  
            <?php the_content(); ?>
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
<?php get_template_part('menu'); ?>
</div> <!-- end columns -->
</div> <!-- end content -->


</body>

</html>
