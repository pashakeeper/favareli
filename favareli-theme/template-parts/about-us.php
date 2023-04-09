<?php 
/*
 Template name: AboutUs
 Template post type: post, page
 */
 ?>
 <?php get_header(); ?>

 <main>
 	<section class="about_us_section__1" id="about_us_section__1">
 		<div class="about_circle_group__01">
 			<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus-girl1.png" alt="">
 			<span></span>
 			<span></span>
 		</div>
 		<div class="about_circle_group__02">
 			<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus-girl2.png" alt="">
 			<span></span>
 			<span></span>
 			<span></span>
 		</div>
 		<div class="about_circle_group__03">
 			<img src="<?php echo get_template_directory_uri(); ?>/img/aboutus-girl3.png" alt="">
 			<span></span>
 			<span></span>
 		</div>
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-6">
                    <?php $about_title = get_field('about_us_title'); ?>
                    <?php echo $about_title; ?>
                    <div class="line"><img src="<?php echo get_template_directory_uri(); ?>/img/line.svg" alt=""></div>
                    <a href="<?php echo get_field('about_us_link'); ?>" class="btn">Our shop</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us_section__2" id="about_us_section__2">
     <div class="about_us_section__2__circle1"></div>
     <div class="about_us_section__2__circle2"></div>
     <div class="row ml-0 mr-0 align-items-center">
        <div class="col-lg-12">
           <h2><?php echo the_field('history_title'); ?></h2>
       </div>
       <div class="col-lg-4 ml-auto about_info__box">
           <div class="user_name">
            <?php echo the_field('history_name_'); ?>
        </div>
        <div class="content">
          <?php echo the_field('history_content'); ?>
      </div>
  </div>
  <div class="col-lg-6 pr-0">
    <?php $history_img = get_field('history_image'); ?>
    <img class="history_img" src="<?php echo $history_img['url'] ?>" alt="<?php echo $history_img['alt'] ?>">
</div>
</div>
</section>

<section class="about_us_section__3" id="about_us_section__3">
 <div class="galery_circle_1"></div>
 <div class="galery_circle_2"></div>
 <?php  echo the_field('galery_title'); ?>
 <div class="galery__box">
    <?php $galery_1 = get_field('galery_1'); ?>
    <div class="row" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
    <?php foreach ($galery_1 as $galery_image1): ?>
        <?php $galery_img1 = $galery_image1['galery_image'];?>
       <div class="galery_img_box"><img src="<?php echo $galery_img1['url'] ?>" alt="<?php echo $galery_img1['alt'] ?>"></div>
   <?php endforeach; ?>
   </div>
   <?php $galery_2 = get_field('galery_2'); ?>
   <div class="row" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
       <?php foreach ($galery_2 as $galery_image2): ?>
        <?php $galery_img2 = $galery_image2['galery_image2'];?>
       <div class="galery_img_box"><img src="<?php echo $galery_img2['url'] ?>" alt="<?php echo $galery_img2['alt'] ?>"></div>
   <?php endforeach; ?>
   </div>
   <?php $galery_3 = get_field('galery_3'); ?>
   <div class="row" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
       <?php foreach ($galery_3 as $galery_image3): ?>
        <?php $galery_img3 = $galery_image3['galery_image3'];?>
       <div class="galery_img_box"><img src="<?php echo $galery_img3['url'] ?>" alt="<?php echo $galery_img3['alt'] ?>"></div>
   <?php endforeach; ?>
   </div>
   <?php $galery_4 = get_field('galery_4'); ?>
   <div class="row" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
      <?php foreach ($galery_4 as $galery_image4): ?>
        <?php $galery_img4 = $galery_image4['galery_image4'];?>
       <div class="galery_img_box"><img src="<?php echo $galery_img4['url'] ?>" alt="<?php echo $galery_img4['alt'] ?>"></div>
   <?php endforeach; ?>
   </div>
</div>
</section>

<section class="about_us_section__4" id="about_us_section__4">
 <div class="container">
    <div class="row">
       <div class="col-lg-12">
          <h2> <?php echo the_field('about_us_content_title'); ?>  <span class="title_circle_1"></span><span class="title_circle_2"></span></h2>
      </div>
  </div>
</div>
<div class="row ml-0 mr-0">
    <div class="col-lg-4 ml-auto">
       <img class="content_circle_1" src="<?php echo get_template_directory_uri(); ?>/img/payment-circle.png" alt="">
       <?php echo the_field('about_us_content_row_1'); ?>
   </div>
   <div class="col-lg-6 pr-0">
    <?php $image_row1 = get_field('about_us_content_image_row_1'); ?>
       <img src="<?php echo $image_row1['url'] ?>" alt="<?php echo $image_row1['alt'] ?>" class="drawing_img1">
   </div>
</div>
<div class="row ml-0 mr-0">
    <div class="col-lg-6 pl-0">
        <?php $image_row2 = get_field('about_us_content_image_row_2'); ?>
       <img src="<?php echo $image_row2['url'] ?>" alt="<?php echo $image_row2['alt'] ?>" class="drawing_img2">
   </div>
   <div class="col-lg-4">
       <?php echo the_field('about_us_content_row_2'); ?>
       <img class="content_circle_2" src="<?php echo get_template_directory_uri(); ?>/img/payment-circle.png" alt="">
   </div>
</div>
</section>

<?php include 'form-section.php' ?>

</main>
<?php get_footer(); ?>