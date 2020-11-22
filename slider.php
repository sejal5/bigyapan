<div class="main-banner-search">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php
      $query = new WP_Query(array('post_type'=> 'slider' ));
      if($query->have_posts()):
      $active= 'active';
      while($query->have_posts()): $query->the_post();
      ?>
      <div class="<?php echo $active;?> item">
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="First slide">
      </div>
      <?php
      $active= '';
      endwhile;
      endif;
      wp_reset_query();
      ?>
    </div>
    <div class="search">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <form role="form" id="form">
              <div class="col-md-2">
                <div class="form-group">
                  <label class="sr-only" for="location">Newspaper</label>
                   <select id="newspaper" name="newspaper" class="form-control">
                    <option value="Company">Newspaper</option>
                    
                    <?php
                    $category = get_category_by_slug( 'newspaper' );
                    $args = array(
                    'type'                     => 'post',
                    'child_of'                 => $category->term_id,
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => FALSE,
                    'hierarchical'             => 1,
                    'taxonomy'                 => 'category',
                    );
                    $child_categories = get_categories($args );
                    $category_list = array();
                    $category_list[] = $category->term_id;
                    if ( !empty ( $child_categories ) ){
                    foreach ( $child_categories as $child_category ){
                    $category_list[] = $child_category->term_id; ?>
                    <option><?php echo $child_category->name;?></option>
                    <?php
                    }
                    }
                    ;?>
                  </select>
                 <!--  <input type="text" class="form-control" id="newspaper" placeholder="Newspaper"> -->
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="sr-only" for="guest">Date</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input type="text" name="date" id="datepicker1" class="datepicker form-control" placeholder="Select Date"required>
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="sr-only" for="guest">Industrie</label>
                  <select id="industrie" name="industrie" class="form-control">
                    <option value="Company">Industries</option>
                    
                    <?php
                    $category = get_category_by_slug( 'industrie' );
                    $args = array(
                    'type'                     => 'post',
                    'child_of'                 => $category->term_id,
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => FALSE,
                    'hierarchical'             => 1,
                    'taxonomy'                 => 'category',
                    );
                    $child_categories = get_categories($args );
                    $category_list = array();
                    $category_list[] = $category->term_id;
                    if ( !empty ( $child_categories ) ){
                    foreach ( $child_categories as $child_category ){
                    $category_list[] = $child_category->term_id; ?>
                    <option><?php echo $child_category->name;?></option>
                    <?php
                    }
                    }
                    ;?>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="sr-only" for="guest">Company</label>
                  <select id="companylisting" name="companylisting" class="form-control">
                    <option value="Company">Company</option>
                    
                    <?php
                    $category = get_category_by_slug( 'company-listing' );
                    $args = array(
                    'type'                     => 'post',
                    'child_of'                 => $category->term_id,
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => FALSE,
                    'hierarchical'             => 1,
                    'taxonomy'                 => 'category',
                    );
                    $child_categories = get_categories($args );
                    $category_list = array();
                    $category_list[] = $category->term_id;
                    if ( !empty ( $child_categories ) ){
                    foreach ( $child_categories as $child_category ){
                    $category_list[] = $child_category->term_id; ?>
                    <option><?php echo $child_category->name;?></option>
                    <?php
                    }
                    }
                    ;?>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="sr-only" for="guest">Brand</label>
                  <select id="brands" name="brands" class="form-control">
                    <option value="Company">Brand</option>
                    
                    <?php
                    $category = get_category_by_slug( 'brands' );
                    $args = array(
                    'type'                     => 'post',
                    'child_of'                 => $category->term_id,
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => FALSE,
                    'hierarchical'             => 1,
                    'taxonomy'                 => 'category',
                    );
                    $child_categories = get_categories($args );
                    $category_list = array();
                    $category_list[] = $category->term_id;
                    if ( !empty ( $child_categories ) ){
                    foreach ( $child_categories as $child_category ){
                    $category_list[] = $child_category->term_id; ?>
                    <option><?php echo $child_category->name;?></option>
                    <?php
                    }
                    }
                    ;?>
                  </select>
                </div>
              </div>
              <div class="col-md-2" id="result">
                <input type="submit" class="btn btn-primary btn-primary" placeholder="submit buttton" value="Submit" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
</div>