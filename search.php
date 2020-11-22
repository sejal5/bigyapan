 <?php header();?>
 <div class="search">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="form-section">
              <div class="row">
                <h3><?php printf( esc_html__( 'Search Results for: %s', 'train' ), '<span>' . get_search_query() . '</span>' ); ?></h3>      
            <?php 
            if(have_posts()): the_post();
            ?>
            <div class="categorypage">
              <a href="<?php  the_permalink();?>"><img src="<?php the_post_thumbnail_url('cat-thumb'); ?>" class="img-responsive" /></a>
              <h4><a href="<?php  the_permalink();?>"><?php  the_title();?></a></h4>
              <p><?php the_excerpt(); ?> </p>
            </div>
            <?php  else:?>
            <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
            <div class="alert alert-info">
              <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
            </div>
            <?php
            the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( '<span aria-hidden="true">&laquo;</span>', 'karmatravel' ),
            'next_text' => __( '<span aria-hidden="true">&raquo;</span>', 'karmatravel' ),
            ) );
            endif;
            wp_reset_query();
            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer();?>