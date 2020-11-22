<?php get_header(); ?>
<?php get_template_part('slider'); ?>
<div class="main-cate-lists" style="margin-top:25px !important;">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-3 col-md-3 col-lg-3 industry_mkks wow fadeInLeft" data-wow-delay="0.4s">
        <div class="list-group">
          <span href="#" class="list-group-item cate-titlemkks">
            <h3>Industries</h3>
          </span>
          <a href="<?php bloginfo('url') ?>/?cat=8" class="list-group-item">Automobiles</a>
         
          <a href="<?php bloginfo('url') ?>/?cat=15" class="list-group-item">Education</a>
          <a href="<?php bloginfo('url') ?>/?cat=16" class="list-group-item">Electronics</a>
          <a href="<?php bloginfo('url') ?>/?cat=17"  class="list-group-item">Finance</a>
          <a href="<?php bloginfo('url') ?>/?cat=18" class="list-group-item">FMCG</a>
          <a href="<?php bloginfo('url') ?>/?cat=19" class="list-group-item">Travel</a>
        </div>
        <div class="list-group">
          <span href="#" class="list-group-item cate-titlemkks">
            <h3>Company Listing</h3>
          </span>
          <?php
    $catID = get_cat_ID('companylisting'); 
    $args = array ( 
              'cat' => $catID ,
              'post_type' => 'post',  
              'posts_per_page' => 2,
              'orderby' =>'id',
              'order' => "DESC"
              );
      $the_query= new WP_Query($args);
    if ( $the_query->have_posts() ) : ?>  
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
    ?>
          <a href="<?php the_permalink();?>" class="list-group-item"><?php the_title();?><img src ="<?php the_post_thumbnail_url();?>" style="width: 20px; height: 20px; float: right;"></a>
        
        
           <?php endwhile;
      endif;
       wp_reset_query();
      ?>
        <div class="more"><a href="<?php bloginfo('url') ?>/?cat=24"> More</a></div>
         </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 adver_padmkks wow fadeInRight" data-wow-delay="0.4s">
        <div class="latest_adver"><h3>Latest Advertisement</h3></div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="carousel carousel-showmanymoveone slide" id="itemslider">
              <div class="carousel-inner">
                <?php
                $query = new WP_Query(array('post_type'=>'advertistment' ));
                if($query->have_posts()):
                $active= 'active';
                while($query->have_posts()): $query->the_post();
                ?>
                <div class="item <?php echo $active;?>">
                  <div class="col-sm-6 col-md-3 cards-row">
                     
                    <div class="thumbnail">
                      <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Latest Advertisement"></a>
                      <div class="caption">
                       <h4><a href="<?php the_permalink();?>"></a></h4>
                        <p class="card-description"><b>Brand </b> : <?php the_title();?></p>
                     
                        <p class="card-description"><b>publish date</b> : <span>"<?php echo get_the_date('l F j, Y'); ?>"</span></p>
                   
                      
                      </div>
                      
                    </div>
                  </div>
                    
                </div>
                <?php
                $active= '';
                endwhile;
                endif;
                wp_reset_query();
                ?>
              </div>
              <div id="slider-control">
                <a class="left carousel-control servicesarow" href="#itemslider" data-slide="prev">‹</a>
                <a class="right carousel-control servicesarow" href="#itemslider" data-slide="next">›</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="welcome-video">
    <div class="bg-shadowmkas">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about_titlemkks wow fadeInLeft" data-wow-delay="0.4s">
            <?php
            $query= new WP_Query(array('page_id'=>'93'));
            if($query->have_posts()): $query->the_post();
            
            ?>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <?php     endif;
            wp_reset_query();
            ?>
          </div>
          <div class="col-lg-6 video_mkks wow fadeInRight" data-wow-delay="0.4s">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <?php echo cs_get_option('video_section');?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-brandlogo">
    <div class="container brandlogo_mkks wow fadeInDown" data-wow-delay="0.4s">
      <h3><span>Brand Logo</span></h3>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInDown" data-wow-delay="0.4s">
          <div class="carousel carousel-showmanymoveone1 slide" id="itemslider1">
            <div class="carousel-inner">
              <?php
              $query = new WP_Query(array('post_type'=>'brandlogo' ));
              if($query->have_posts()):
              $active= 'active';
              while($query->have_posts()): $query->the_post();
              ?>
              <div class="<?php echo $active;?> item">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive center-block"></a>
                </div>
              </div>
              <?php
              $active= '';
              endwhile;
              endif;
              wp_reset_query();
              ?>
            </div>
            <div id="slider-control">
              <a class="left carousel-control servicesarow1" href="#itemslider1" data-slide="prev">‹</a>
              <a class="right carousel-control servicesarow1" href="#itemslider1" data-slide="next">›</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="main-brandlogo" style="background-color: orange">
    <div class="container brandlogo_mkks wow fadeInDown" data-wow-delay="0.4s">
      <h3><span>Available</span></h3>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInDown" data-wow-delay="0.4s">
          <div class="carousel carousel-showmanymoveone1 slide" id="itemslider2">
            <div class="carousel-inner">
              <?php
              $catID = get_cat_ID('avaliable');
              $args = array (
              'cat' => $catID ,
               'post_type' => 'post',
              'posts_per_page' => 4,
              'orderby' =>'ID',
              'order' => "ASC"
              );
             $the_query= new WP_Query($args);
              if ( $the_query->have_posts() ) :
              $active= 'active';
              ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
?>
              <div class="<?php echo $active;?> item">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive center-block"></a>
 <h4 class="text-center"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                </div>
              </div>
              <?php
              $active= '';
              endwhile;
              endif;
              wp_reset_query();
              ?>
            </div>
           <div id="slider-control">
                <a class="left carousel-control servicesarow" href="#itemslider2" data-slide="prev">‹</a>
                <a class="right carousel-control servicesarow" href="#itemslider2" data-slide="next">›</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>