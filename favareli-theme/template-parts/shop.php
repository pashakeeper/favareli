<?php 
/*
 Template name: Shop
 Template post type: post, page
 */
 get_header();
 ?>

 <main>
    <section class="shop_section_01" id="shop_section_01">
        <div class="left_images_side">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/elips1.png" alt="" class="shop_img_01">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/elips2.png" alt="" class="shop_img_02">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/elips3.png" alt="" class="shop_img_03">
        </div>
        <h1><span>SHOP</span></h1>
        <div class="right_images_side">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/elips4.png" alt="" class="shop_img_04">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/elips5.png" alt="" class="shop_img_05">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shop/elips6.png" alt="" class="shop_img_06">
        </div>
    </section>
    <section class="shop_section_02" id="shop_section_02">


        <?php $first_item = get_field('first_item');?>


        <div class="row ml-0 mr-0 shop_row1">
            <h2><?php echo $first_item['first_item_title']; ?><span class="shop_elips_01"></span><span class="shop_elips_02"></span></h2>
            <p>Buy it!</p>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <?php $first_item_img = $first_item['first_item_image']; ?>
                        <img src="<?php echo $first_item_img?>" alt="">
                    </div>
                    <div class="col-lg-3">
                        <div class="num"><?php echo $first_item['first_item_number'] ?></div>
                        <div class="info_row">
                            <p><?php echo $first_item['first_item_name'] ?></p>
                            <p><?php echo $first_item['first_item_price'] ?></p>
                        </div>
                        <div class="item_info">
                            <?php echo $first_item['first_item_info'] ?>
                        </div>
                        <a href="<?php echo $first_item['first_item_link'] ?>" class="btn by_btn">Buy it!</a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/shop/cofee.png" alt="" class="cofee_img">
            </div>
            <div class="col-lg-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/shop/arrow.png" alt="" class="arrow">
            </div>
        </div>

        <?php $second_item = get_field('second_item');?>

        <div class="row shop_row2">
            <div class="shop_row2__elips_01"></div>
            <div class="shop_row2__elips_02"></div>
            <div class="col-lg-8">
                <h2><?php echo $second_item['second_item_title'] ?></h2>
                <p>Try it!</p>
            </div>
            <div class="col-lg-8 shop_item_box">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="item_info__box">
                            <h3><?php echo $second_item['second_item_name'] ?></h3>
                            <?php echo $second_item['second_item_info'] ?>
                        </div>
                        <div class="price"><?php echo $second_item['second_item_price'] ?></div>
                        <a href="<?php echo $second_item['second_item_link'] ?>" class="btn by_btn">Buy it!</a>
                    </div>
                    <div class="col-lg-7">
                        <img src="<?php echo $second_item['second_item_image'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php $third_item = get_field('third_item');?>
    <section class="shop_section_03" id="shop_section_03">
        <div class="row ml-0 mr-0">
            <div class="col-lg-12">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/img/payment-circle.png" alt=""><?php echo $third_item['third_item_title'] ?></h2>
            </div>
            <div class="col-lg-8 gift_box">
                <img src="<?php echo $third_item['third_item_image_1'] ?>" alt="">
                <div class="gift_box__info">
                    <h4><?php echo $third_item['third_item_name'] ?></h4>
                    <?php echo $third_item['third_item_info'] ?>
                    <div class="gift_info__box__price"><?php echo $third_item['third_item_price'] ?></div>
                    <a href="<?php echo $third_item['third_item_link'] ?>" class="btn">Buy it!</a>
                </div>
                <img src="<?php echo $third_item['third_item_image_2'] ?>" alt="">
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/shop/gift.png" alt="" class="gift_img">
    </section>



    <?php include 'form-section.php' ?>
    <?php get_footer(); ?>