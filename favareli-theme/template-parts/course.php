<?php 
/*
 Template name: Course
 Template post type: post, page
 */
 ?>
 <?php get_header(); ?>
 <main>

    <section class="course_section_1" id="course_section_1">
        <div class="container">
            <div class="course_section_1__circle_1"></div>
            <div class="course_section_1__circle_2"></div>
            <div class="row">
                <div class="col-lg-8">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="course_big_section" id="course_big_section">
        <img src="<?php echo get_template_directory_uri(); ?>/img/course/circle-1.png" alt="" class="course_circle_side">
        <div class="row ml-0 mr-0">
            <div class="col-lg-12">
                <h2><?php echo the_field('course_theme'); ?></h2>
            </div>
            <?php $course_row1 = get_field('course_theme_row_1'); 
            $course_img = $course_row1['course_image_1'];
            ?>
            <div class="col-lg-6 pl-0">
                <img src="<?php echo $course_img['url'] ?>" alt="<?php echo $course_img['alt'] ?>">
                <div class="bold_border"></div>
            </div>
            <div class="col-lg-3">
                <?php echo $course_row1['course_content']; ?>
            </div>
        </div>
        <?php $course_row2 = get_field('course_theme_row_2'); 
        $course_img = $course_row2['course_image_2'];
        ?>
        <div class="row ml-0 mr-0 second_row">
            <div class="col-lg-3 ml-auto mr-auto">
                <?php echo $course_row2['course_content']; ?>
            </div>
            <div class="col-lg-6 pr-0">
                <img src="<?php echo $course_img['url'] ?>" alt="<?php echo $course_img['alt'] ?>">
            </div>
        </div>
        <?php $course_row3 = get_field('course_theme_row_3'); 
        $course_img = $course_row3['course_image_3'];
        ?>
        <div class="row ml-0 mr-0 third_row">
            <div class="col-lg-6 pl-0">
               <img src="<?php echo $course_img['url'] ?>" alt="<?php echo $course_img['alt'] ?>">
               <div class="thin_border"></div>
           </div>
           <div class="col-lg-3">
            <?php echo $course_row3['course_content']; ?>
        </div>
    </div>
    <div class="col-lg-12 course_title_box">
        <h2><?php echo the_field('course_program_title'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/course/course-elips-small.png" alt=""></h2>
    </div>
    <div class="row ml-0 mr-0 ml-0 fourth_row">
        <div class="course_program__list_box">
            <?php echo the_field('course_program_content'); ?>
        </div>
        <div class="col-lg-4 pr-0">
            <?php $course_prog__image = get_field('course_program_image'); ?>
            <img src="<?php echo $course_prog__image['url'] ?>" alt="<?php echo $course_prog__image['alt'] ?>">
        </div>
    </div>
</section>
<section class="course_section_2" id="course_section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Our teachers</h2>
            </div>
            <?php 

            $args = array(
                'post_type'=> 'teachers',
                'order'    => 'ASC',
                'posts_per_page' => 2
            );              

            $the_query = new WP_Query( $args );?>
            <?php if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : ?>
                <?php $the_query->the_post();  ?>
                
                <div class="col-lg-6">
                    <div class="teacher_box">
                        <div class="teacher_box__image_box">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="teacher_content">
                            <p><b><?php the_title(); ?></b> <?php echo the_field('proffession'); ?></p>
                            <?php the_content(); ?>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <?php endif; ?>
    </div>
</div>
</section>
<section class="course_section_3" id="course_section_3">
    <img src="<?php echo get_template_directory_uri(); ?>/img/course/maniken1.png" alt="" class="manikin_1">
    <img src="<?php echo get_template_directory_uri(); ?>/img//course/maniken2.png" alt="" class="manikin_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <h2><span class="course_section_3_circle1"></span><span class="course_section_3_circle2"></span> <?php echo the_field('course_proces_title'); ?></h2>
                <?php echo the_field('course_proces_contetnt'); ?>
            </div>
        </div>
        <div class="price_box">
            <h2><?php echo the_field('course_price_title'); ?></h2>
            <p><?php echo the_field('course_price'); ?></p>
            <?php echo the_field('course_price_content'); ?>
        </div>
    </div>
</section>


<?php include 'form-section.php' ?>
</main>
<!-- Footer -->
<?php get_footer(); ?>