<?php get_header();/*Template Name: contactus*/ ?>
<?php if(have_posts()): the_post(); ?>
<div class="image_mkks">
	<?php
	$imageID = cs_get_option('contactus_image');
	$attachments = wp_get_attachment_image_src($imageID,'720'); ?>
	<img src="<?php echo $attachments[0];?>" class="img-responsive" alt="top category" />
	<div class="text">
		<h2 class="wow fadeInUp" data-wow-delay="0.4s">Contact Us</h2>
	</div>
	
</div>
<div class="main-breummkks">
	<div class="container breadcrum-mkks">
		<ol class="breadcrumb breadcrumb-arrow">
			<li><a href="index.php">Home</a></li>
			<li class="active"><span>Contact Us</span></li>
		</ol>
	</div>
</div>
<div class="book-online">
	<div class="container online_bookkks">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 get_paragraph">
				<h3>Get in Touch</h3>
				<p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services that we offer on a regular basis. We would be pleased to answer your questions.</p>
				<form id="application-forms" method="post" action="" role="form">
					<div class="col-sm-12">
						<?php the_content(); ?>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 con_inforkks">
				<?php
					$meta_data = get_post_meta( get_the_ID(), '_custom_meta_options', true );
					echo $meta_data['contact_details'];
				?>
				<div class="google-map">
					<?php
							echo $meta_data['map_iframe'];
					?>
				</div>
				<?php  endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>