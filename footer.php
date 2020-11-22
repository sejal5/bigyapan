<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInLeft" data-wow-delay="0.4s">
        <div class="footer_dv">
          <h4>Contact us</h4>
          <?php echo cs_get_option('footercontact');?>
        </div>
        
      </div>
      
      
      <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.4s">
        <div class="footer_dv">
          <div class="auto-jsCalendar material-theme green"
          data-month-format="month YYYY"></div>
          
        </div>
      </div>
      
      
      <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="0.4s">
        <div class="footer_dv">
          <ul>
            
            <?php echo cs_get_option('quicklinks');?>
          </ul>
          
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInRight" data-wow-delay="0.4s">
        <div class="footer_dv">
          <h4>Facebook Like Box</h4>
          <div class="fb-page"
            data-href="https://www.facebook.com/facebook"
            data-small-header="true"
            data-hide-cover="false"
          data-show-facepile="true"></div>
        </div>
      </div>
      
      
    </div>
  </div>
</section>
<div class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 copyright wow fadeInLeft" data-wow-delay="0.4s">
        <p>&copy; 2017 Bigyapan Serach</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 poweredby wow fadeInRight" data-wow-delay="0.4s">
        <p>Website Designed by <a href="https://cloud.nepbay.com/"> : NCS</a> | Powered By<a href="https://www.nepbay.com/"> : NepBay Inc</a></p>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<?php wp_footer(); ?>
<script>
// Bigyapan Lists
(function(){
$('#itemslider').carousel({ interval: 3000 });
}());
(function(){
$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);
for (var i=1;i<4;i++) {
itemToClone = itemToClone.next();
if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}
itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
}());
</script>
<script>
// Brand Logo
(function(){
$('#itemslider1').carousel({ interval: 3000 });
}());
(function(){
$('.carousel-showmanymoveone1 .item').each(function(){
var itemToClone = $(this);
for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();
if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}
itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
}());
</script>
<!-- animated-css -->

<script>
new WOW().init();
</script>

<script>
$(function(){
$('[name="date"]').datepicker();
});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
add_action( 'admin_footer', 'my_action_javascript' ); // Write our JS below here
function my_action_javascript() { ?>
<script type="text/javascript" >
jQuery(document).ready(function($) {
var data = {
'action': 'my_action',
'whatever': 1234
};
// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
jQuery.post(ajaxurl, data, function(response) {
alert('Got this from the server: ' + response);
});
});
</script> <?php
}
?>
<script type="text/javascript" >

var form="";
var newspaper="";
var industrie=""
var companylisting=""
var brands=""

    $(document).ready( function () {    
//Send date to PHP
$("#form").keyup(function(){
    companylisting=$("#companylisting").val();
    brands=$("#brands").val();

    $.ajax({
          type: "POST",
          data: {companylisting: companylisting, brands:brands},
          url: "search.php",
            success: function(data){ //response param
            $("#result").html(data);
            }

        });
});


$("#companylisting").change(function(){
companylisting=$("#companylisting").val();
brands = $("#brands").val();

$.ajax({
          type: "POST",
          data: {companylisting: companylisting, brands:brands},
          url: "search.php",
            success: function(data){ //response param
            $("#result").html(data);
            }

        });


}); 
    });


</script>





</body>
</html>