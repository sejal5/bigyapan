   
<?php get_header();/*Template Name: leave a review*/ ?>
<?php if(have_posts()): the_post(); ?>
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