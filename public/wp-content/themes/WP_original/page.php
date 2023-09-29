<?php get_header(); ?>
<!-- [page .p] -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="l-page" id="post-<?php the_ID(); ?>">
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>
<!-- //[page .p] -->
<?php get_footer(); ?>