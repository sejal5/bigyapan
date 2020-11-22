<?php get_header(); ?>
<div class="image_mkks">
  <?php
  $imageID = cs_get_option('pagetitle');
  $attachments = wp_get_attachment_image_src($imageID,'720'); ?>
  <img src="<?php echo $attachments[0];?>" class="img-responsive" alt="top category" />
  <div class="text">
    <h2 class="wow fadeInUp" data-wow-delay="0.4s">Page Title</h2>
  </div>
  
</div>
<div class="main-breummkks">
  <div class="container breadcrum-mkks">
    <ol class="breadcrumb breadcrumb-arrow">
      <li><a href="#"> Top</a></li>
      <li><a href="#">Catalog</a></li>
      <li><a href="#">Automobiles</a></li>
      <li class="active"><span>Page Title</span></li>
    </ol>
  </div>
</div>
<div class="main-cate-lists">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3 industry_mkks wow fadeInLeft" data-wow-delay="0.4s">
        <div class="sidebar-mkksbg">
          <div class="list-group">
            <span href="#" class="list-group-item cate-titlemkks">
              <h3>Industries</h3>
            </span>
            <a href="<?php bloginfo('url') ?>/?cat=8" class="list-group-item">Automobiles</a>
            <a href="<?php bloginfo('url') ?>/?cat=14" class="list-group-item">company listing</a>
            <a href="<?php bloginfo('url') ?>/?cat=15" class="list-group-item">Education</a>
            <a href="<?php bloginfo('url') ?>/?cat=16" class="list-group-item">Electronics</a>
            <a href="<?php bloginfo('url') ?>/?cat=17" class="list-group-item">Finance</a>
            <a href="<?php bloginfo('url') ?>/?cat=18" class="list-group-item">FMCG</a>
            <a href="<?php bloginfo('url') ?>/?cat=19"  class="list-group-item">Travel</a>
          </div>
          <div class="list-group">
            <span href="#" class="list-group-item cate-titlemkks">
              <h3>Company</h3>
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
            <a href="<?php the_permalink();?>" class="list-group-item"><?php the_title();?></a>
               <?php endwhile;
      endif;
       wp_reset_query();
      ?>
           
           <div class="more"><a href="<?php bloginfo('url') ?>/?cat=24"> More</a></div>
          </div>
       
          <div class="advanced-search">
            <div class="advan-searchmkks"><h3>Advanced Search</h3></div>
            <form class="form-horizontal adv_mkks" role="form">
              <div class="form-group">
                <label class="col-sm-5 col-md-4 control-label">Keyword</label>
                <div class="col-sm-7 col-md-8">
                  <input type="text" class="form-control" placeholder="Keyword">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 col-md-3 control-label">Date</label>
                <div class="col-sm-7 col-md-9">
                  <div class='input-group date' id='datetimepicker1'>
                    <input type="text" name="date" id="datepicker" class="datepicker form-control" placeholder="Select Date"required>
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                  
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 col-md-4 control-label">Company</label>
                <div class="col-sm-7 col-md-8">
                  <select class="form-control" placeholder="Company">
                    <option value="">Company</option>
                    <option value="">Pepsi</option>
                    <option value="">CG</option>
                    <option value="">Honda</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 col-md-4 control-label">Category</label>
                <div class="col-sm-7 col-md-8">
                  <select class="form-control" placeholder="Category">
                    <option value="">Category</option>
                    <option value="">Category 1</option>
                    <option value="">Category 2</option>
                    <option value="">Category 3</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 col-md-4 control-label">Brand</label>
                <div class="col-sm-7 col-md-8">
                  <select class="form-control" placeholder="Brand">
                    <option value="">Brand</option>
                    <option value="">Brand 1</option>
                    <option value="">Brand 2</option>
                    <option value="">Brand 3</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-offset-4 col-sm-5">
                <input type="submit" class="btn btn-success" placeholder="Search" value="Search">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 wow fadeInUp" data-wow-delay="0.4s">
        <?php while (have_posts()): the_post();?>
        <div class="page-titlemkks">
         
         
          <p><?php the_content();?></p>
         
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>