<?php 
/*
 Template name: Online Learn
 Template post type: post, page
 */
 ?>
 <?php get_header(); ?>

	<main>
		<section  class="learn_section" id="learn_section">
			<img src="<?php echo get_template_directory_uri(); ?>/img/yellow_roundet.png" class="learn_roundet" alt="">
			<div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
				<div class="row">
					<div class="col-lg-12 learning_content__box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/study.png" alt="" class="learn_icon">
						<h1><img src="<?php echo get_template_directory_uri(); ?>/img/payment-circle.png" alt=""><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="row learn__second_row align-items-center" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
				<div class="learn_circle_1"></div>
				<div class="learn_circle_2"></div>
				<?php $learn_img = get_field('online_start_img') ?>
				<div class="col-lg-6 pl-0 pr-0">
					<img src="<?php echo $learn_img['url']; ?>" class="learn_girl" alt="<?php echo $learn_img['alt']; ?>">
				</div>
				<div class="col-lg-4 mr-auto">
					<?php echo the_field('online_start_content'); ?>
				</div>
			</div>
		</section>
		<section class="contact_zoom__section" id="contact_zoom__section">
			<div class="circle_zoom_1"></div>
			<div class="circle_zoom_2"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact_box__zoom" data-aos="fade-up-right" data-aos-easing="linear" data-aos-duration="500">
							<h2>Contact us in<span>ZOOM!</span> <img src="<?php echo get_template_directory_uri(); ?>/img/title_roundet.png" alt=""></h2>
							<p>Make your communication with teachers fast, easy and enjoyable. Use our ZOOM contacts during Your studying!</p>
							<a href="<?php echo the_field('online_zoom_link'); ?>" class="purple_btn">Our ZOOM</a>
						</div>
					</div>
				</div>
			</div>
			<div class="circle_zoom_3"></div>
		</section>
		<?php include 'form-section.php' ?>
	</main>
	<?php get_footer(); ?>