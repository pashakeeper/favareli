<?php 
/*
 Template name: Event
 Template post type: post, page
 */
 ?>
 <?php get_header(); ?>

 <main>

 	<section class="event_page_section__1" id="event_page_section__1">
 		<img src="<?php echo get_template_directory_uri(); ?>/img/dashed-event.png" alt="" class="event_dashed">
 		<img src="<?php echo get_template_directory_uri(); ?>/img/eventpage-1.png" alt="" class="event_girl_1">
 		<img src="<?php echo get_template_directory_uri(); ?>/img/eventpage-2.png" alt="" class="event_girl_2">
 		<img src="<?php echo get_template_directory_uri(); ?>/img/eventpage-3.png" alt="" class="event_girl_3">
 		<div class="container">
 			<div class="row ml-0 mr-0">
 				<div class="col-lg-12">
 					<h1><?php the_title(); ?></h1>
 					<?php the_content(); ?>
 				</div>
 			</div>
 		</div>
 	</section>

 	<section class="event_page_section__2" id="event_page_section__2">
 		<div class="container">
 			<div class="row ml-0 mr-0">
 				<div class="col-lg-12">
 					<?php echo the_field('events_second_title'); ?>
 				</div>
 			</div>
 		</div>
 		<div class="row ml-0 mr-0">
 			<div class="col-lg-4 ml-auto">
 				<img class="event_circle_yellow" src="<?php echo get_template_directory_uri(); ?>/img/event-elips-yellow.png" alt="">
 				<p class="yellow_text"><?php echo the_field('event_yellow_text'); ?></p>
 				<div class="text">
 					<?php echo the_field('event_content_row_1'); ?>
 				</div>
 			</div>
 			<div class="col-lg-6">
 				<?php $event_img1 = get_field('event_image_row_1'); ?>
 				<img class="event_yellow_girl" src="<?php echo $event_img1['url'] ?>" alt="<?php echo $event_img1['alt'] ?>">
 			</div>
 		</div>
 		<div class="row ml-0 mr-0 custom_row">
 			<div class="col-lg-6 p-0">
 				<?php $event_img2 = get_field('event_image_row_2'); ?>
 				<img class="event_left_girl" src="<?php echo $event_img2['url'] ?>" alt="<?php echo $event_img2['alt'] ?>">
 			</div>
 			<div class="col-lg-4">
 				<p class="yellow_text"><?php echo the_field('event_yellow_text_2'); ?></p>
 				<div class="text">
 					<?php echo the_field('event_content_row_2'); ?>
 				</div>
 			</div>
 		</div>
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-6">
 					<div class="list_box">
 						<?php echo the_field('event_construction'); ?>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>


 	<section class="event_page_section__4" id="event_page_section__4">
 		<div class="rules_circle_1"></div>
 		<div class="rules_circle_2"></div>
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<h2>Rules of the chat</h2>
 					<p>You should <span>not to:</span></p>
 				</div>
 			</div>
 		</div>
 		<div class="row ml-0 mr-0">
 			<div class="col-lg-9 ml-auto mr-auto">
 				<div class="rules_box">
 					<?php echo the_field('event_rules_1'); ?>
 				</div>
 			</div>
 			<?php $rules_img = get_field('event_rules_image_2'); ?>
 			<img src="<?php echo $rules_img['url'] ?>" alt="<?php echo $rules_img['alt'] ?>" class="rules_girls">
 		</div>
 		<div class="event_page_section__5">
 			<div class="may_circle_1"></div>
 			<div class="may_circle_2"></div>
 			<div class="row ml-0 mr-0">
 				<div class="col-lg-4 pl-0">
 					<?php $rules_img2 = get_field('event_rules_image'); ?>
 					<img src="<?php echo $rules_img2['url'] ?>" alt="<?php echo $rules_img2['alt'] ?>">
 				</div>
 				<div class="col-lg-7 mr-0">
 					<?php echo the_field('event_rules_2'); ?>
 				</div>
 			</div>
 		</div>
 	</section>
 	<?php include 'form-section.php' ?>
 </main>
 <?php get_footer(); ?>