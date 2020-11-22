<?php get_header(); ?>
<div class="image_mkks">
  <?php
  $imageID = cs_get_option('pagetitle');
  $attachments = wp_get_attachment_image_src($imageID,'720'); ?>
  <img src="<?php echo $attachments[0];?>" class="img-responsive" alt="top category" />
  <div class="text">
    <h2 class="wow fadeInUp" data-wow-delay="0.4s">Buddha Air</h2>
  </div>
  
</div>
<div class="main-breummkks">
  <div class="container breadcrum-mkks">
    <ol class="breadcrumb breadcrumb-arrow">
      <li><a href="#"> Top</a></li>
      <li><a href="#">Catalog</a></li>
      <li><a href="#">Automobiles</a></li>
      <li class="active"><span>Kantipur</span></li>
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
            <a href="<?php bloginfo('url') ?>/?cat=8"  class="list-group-item">Automobiles </a>
            <a href="<?php bloginfo('url') ?>/?cat=14" class="list-group-item">company listing</a>
            <a href="<?php bloginfo('url') ?>/?cat=15" class="list-group-item">Education</a>
            <a href="<?php bloginfo('url') ?>/?cat=16" class="list-group-item">Electronics</a>
            <a href="<?php bloginfo('url') ?>/?cat=17" class="list-group-item">Finance</a>
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
      <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
        <?php while (have_posts()): the_post();?>
        <div class="mid-advermkks">
          <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="adver" />
          <h4><?php the_title();?></h4>
          <p><?php the_content();?></p>
          <div class="read-more"><a href="<?php the_permalink();?>">Read More &raquo;</a></div>
        </div>
        <?php endwhile; ?>
        
        
        <ul class="pagination">

        <li class="disabled"><a href="#">&laquo;</a></li>

        <li class="active"><a href="#">1</a></li>

        <li><a href="#">2</a></li>

        <li><a href="#">3</a></li>

        <li><a href="#">4</a></li>

        <li><a href="#">5</a></li>

        <li><a href="#">&raquo;</a></li>

    </ul>
       


      </div>
      
      <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInRight" data-wow-delay="0.4s">
        <div class="write-review">
          <div class="review-title"><h3>Leave a Review</h3></div>
          <div class="md-form">
            <div class="panel panel-default flat-form" id="sm-form1">
              <form method="post" action="#">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <div class="input-group"> <span class="input-group-addon"><i class="icon-user icons" aria-hidden="true"></i></span>
                      <input class="form-control" name="name" id="name" placeholder="Enter your Name" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <div class="input-group"> <span class="input-group-addon"><i class="icon-envelope icons" aria-hidden="true"></i></span>
                    <input class="form-control" name="email" id="email" placeholder="Enter your Email" type="text">
                  </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-sm-12">
                  <div class="input-group"> <span class="input-group-addon"><i class="icon-pencil icons" aria-hidden="true"></i></span>
                  <input class="form-control" name="name" id="name" placeholder="Enter Subject" type="text">
                </div>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-12">
                <div class="input-group input-group-textarea"> <span class="input-group-addon"><i class="icon-note icons" aria-hidden="true"></i></span>
                <textarea class="form-control" rows="5" placeholder="Enter Message here"></textarea>
              </div>
            </div>
          </div>
          
          
        </div>
        <div class="panel-footer footer-buttons">
          <div class="text-right">
            <input type="submit" class="btn btn-danger" placeholder="cancel" value="Cancel" />
            <input type="submit" class="btn btn-primary" placeholder="Send" value="Send" />
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Content Here -->
</div>
</div>
</div>
</div>
</div>
<?php get_footer();?>