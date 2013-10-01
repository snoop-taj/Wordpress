<?php if(function_exists('pagination')) : ?>
	<?php pagination($additional_loop->max_num_pages); ?>
<?php else : ?>
  <?php if ( $wp_query->max_num_pages > 1 ) : ?>
    <nav class="oldernewer">
      <div class="older">
        <?php next_posts_link( __('&laquo; Older Entries', 'theme1787')) ?>
      </div><!--.older-->
      <div class="newer">
        <?php previous_posts_link(__('Newer Entries &raquo;', 'theme1787')) ?>
      </div><!--.newer-->
    </nav><!--.oldernewer-->
  <?php endif; ?>
<?php endif; ?>
<!-- Posts navigation -->