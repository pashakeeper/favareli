<?php get_header(); ?>
	<main>
		<!-- section 1 -->
		<section class="section_01" id="section_01">
			<div class="section_01__figures">
				<img src="<?php echo get_template_directory_uri() ?>/img/people1.png" alt="" class="section_01__figures__image01">
				<img src="<?php echo get_template_directory_uri() ?>/img/people2.png" alt="" class="section_01__figures__image02">
				<img src="<?php echo get_template_directory_uri() ?>/img/people3.png" alt="" class="section_01__figures__image03">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
						<p class="pre_title"><?php echo the_field('pre_title','option'); ?></p>
						<?php $title = get_field('main_title','option');?>
						<h1><?php echo $title; ?></h1>
						<p class="description"><?php echo the_field('after_title','option'); ?></p>
						<a href="#form_section" class="btn btn_first_section">Buy a course</a>
					</div>
				</div>
			</div>
		</section>
		<!-- end of section 1 -->

		<!-- section 2  -->
		<section class="section_02" id="section_02">
			<img class="background_image" src="<?php echo get_template_directory_uri() ?>/img/bg2.jpg" alt="">
			<div class="buttons_group" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
				<a class="blur_btn" href="#">Back</a>
				<a href="#" class="blue_btn">Next</a>
			</div>
		</section>
		<!-- end of section 2 -->


		<!-- section 3 -->
		<section class="section_03" id="section_03">
			<div class="figure_01"></div>
			<div class="figure_02"></div>
			<div class="figure_03"></div>
			<div class="figure_04"></div>
			<div class="figure_05"><img src="<?php echo get_template_directory_uri() ?>/img/vector.svg" alt=""></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php echo the_field('courses_title','option'); ?>
					</div>
					<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
						<div class="courses_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/course1.jpg" alt="">
							<a href="" class="btn btn_courses">Buy it</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1200">
						<div class="courses_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/course2.jpg" alt="">
							<a href="" class="btn btn_courses">Buy it</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
						<div class="courses_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/course3.jpg" alt="">
							<a href="" class="btn btn_courses">Buy it</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end of section 3-->

		<!-- section 4 -->
		<section class="section_04" id="section_04">
			<div class="figure_06"><img src="<?php echo get_template_directory_uri() ?>/img/elipssmall.png" alt=""></div>
			<div class="container">
				<div class="elips_01"></div>
				<div class="elips_02"></div>
				<div class="row">
					<div class="col-lg-12">
						<?php echo the_field('events_title','option'); ?>
					</div>
					<div class="col-lg-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
						<div class="events_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/event1.jpg" alt="">
							<div class="events_box__text_block">
								<h3>Fashion disco party</h3>
								<p>for kids from 12 to 16</p>
								<a href="#" class="btn btn_event">Go to Telegram</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
						<div class="events_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/event2.jpg" alt="">
							<div class="events_box__text_block">
								<h3>Fashion <span>summer  |  winter  |  spring </span> camp</h3>
								<p>for kids from 8 to 16</p>
								<a href="#" class="btn btn_event">Sign up</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
						<div class="events_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/event3.jpg" alt="">
							<div class="events_box__text_block">
								<h3>Art lessons <span>fashion decoration</span></h3>
								<p>for kids from 5 to 16</p>
								<a href="#" class="btn btn_event">Sign up</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end of section 4-->

		<!-- section 5  -->
		<section class="section_05" id="section_05">
			<div class="container">
				<div class="row">
					<div class="candels_box">
						<div class="candel candel1"><img src="<?php echo get_template_directory_uri() ?>/img/candle1.svg" alt=""></div>
						<div class="candel candel2"><img src="<?php echo get_template_directory_uri() ?>/img/candle2.svg" alt=""></div>
						<div class="candel candel3"><img src="<?php echo get_template_directory_uri() ?>/img/candle1.svg" alt=""></div>
						<div class="candel candel4"><img src="<?php echo get_template_directory_uri() ?>/img/candle2.svg" alt=""></div>
						<div class="candel candel5"><img src="<?php echo get_template_directory_uri() ?>/img/candle1.svg" alt=""></div>
					</div>
					<div class="col-lg-12">
						<?php echo the_field('birthday_title','option'); ?>
					</div>
					<div class="col-lg-3 col-sm-3">
						<div class="birthday_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/birthday1.png" alt="">
							<p>For kids from 4 to 7</p>
							<a class="btn" href="#">Sign up</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-3">
						<div class="birthday_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/birthday2.png" alt="">
							<p>For kids from 8 to 12</p>
							<a class="btn" href="#">Sign up</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-3">
						<div class="birthday_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/birthday3.png" alt="">
							<p>For kids from 13 to 16</p>
							<a class="btn" href="#">Sign up</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-3">
						<div class="birthday_box">
							<img src="<?php echo get_template_directory_uri() ?>/img/birthday4.png" alt="">
							<p>For kids from 16 to 19</p>
							<a class="btn" href="#">Sign up</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end of section 5 -->

		<!-- section 6  -->
		<section class="section_06" id="section_06">
			<div class="circle_01"></div>
			<div class="circle_02"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Events for <span>all ages</span></h2>
					</div>
					<div class="col-lg-12 d-flex" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
						<?php $event_image = get_field('events_image','option'); ?>
						<img src="<?php echo $event_image['url'] ?>" alt="<?php echo $event_image['alt'] ?>">
						<div class="last_event__box">
							<?php echo the_field('events_content','option'); ?>
							<a href="<?php echo the_field('events_link','option'); ?>" class="btn fashion_btn">Sign up</a>
						</div>
					</div>
					<div class="col-lg-12 d-flex met_container" data-aos="fade-up"  data-aos-duration="1000">
						<div class="photo_met__box">
							<?php echo the_field('photo_content','option'); ?>
							<a href="<?php echo the_field('photo_link','option'); ?>" class="btn photo_btn">Sign up</a>
						</div>
						<?php $photo_image = get_field('photo_image','option'); ?>
						<img src="<?php echo $photo_image['url'] ?>" alt="<?php echo $photo_image['alt'] ?>">
					</div>
				</div>
			</section>
			<!-- end of section 6 -->

			<!-- form section  -->
			<section class="form_section" id="form_section">
				<div class="container">
					<div class="row ml-0 mr-0">
						<div class="col-lg-6 pr-0 contact_side">
							<h2>Contact information</h2>
							<div class="social_box">
								<p>Use our phone numbers</p>

								<div class="phones">
									<a href="tel:<?php echo the_field('form_number_1','option'); ?>"><?php echo the_field('form_number_1','option'); ?></a>
									<a href="tel:<?php echo the_field('form_number_2','option'); ?>"><?php echo the_field('form_number_2','option'); ?></a>
								</div>
								<p class="or">or</p>
								<?php $social = get_field('social_links','option'); ?>
								<div class="contact__icons">
									<a href="https://telegram.me/<?php echo $social['telegram'] ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
											<path d="M20 0C8.96 0 0 8.96 0 20C0 31.04 8.96 40 20 40C31.04 40 40 31.04 40 20C40 8.96 31.04 0 20 0ZM29.28 13.6C28.98 16.76 27.68 24.44 27.02 27.98C26.74 29.48 26.18 29.98 25.66 30.04C24.5 30.14 23.62 29.28 22.5 28.54C20.74 27.38 19.74 26.66 18.04 25.54C16.06 24.24 17.34 23.52 18.48 22.36C18.78 22.06 23.9 17.4 24 16.98C24.0139 16.9164 24.012 16.8503 23.9946 16.7876C23.9772 16.7249 23.9447 16.6673 23.9 16.62C23.78 16.52 23.62 16.56 23.48 16.58C23.3 16.62 20.5 18.48 15.04 22.16C14.24 22.7 13.52 22.98 12.88 22.96C12.16 22.94 10.8 22.56 9.78 22.22C8.52 21.82 7.54 21.6 7.62 20.9C7.66 20.54 8.16 20.18 9.1 19.8C14.94 17.26 18.82 15.58 20.76 14.78C26.32 12.46 27.46 12.06 28.22 12.06C28.38 12.06 28.76 12.1 29 12.3C29.2 12.46 29.26 12.68 29.28 12.84C29.26 12.96 29.3 13.32 29.28 13.6Z" fill="white"></path>
										</svg>
									</a>
									<a href="<?php echo $social['viber'] ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 40" fill="none">
											<path d="M17.9975 0.00630873C14.7875 0.0450587 7.88626 0.572559 4.02626 4.11381C1.15501 6.95881 0.152511 11.1651 0.0350114 16.3663C-0.0624886 21.5488 -0.179989 31.2813 9.20126 33.9313V37.9676C9.20126 37.9676 9.14251 39.5826 10.21 39.9138C11.525 40.3301 12.2738 39.0876 13.5238 37.7526L15.855 35.1163C22.2738 35.6501 27.19 34.4201 27.7563 34.2376C29.0588 33.8213 36.395 32.8838 37.5938 23.1501C38.8238 13.0976 36.995 6.76381 33.6938 3.89881H33.6738C32.6775 2.98131 28.6738 0.0638087 19.7288 0.0313087C19.7288 0.0313087 19.065 -0.0124413 17.9975 0.00630873ZM18.1075 2.83256C19.0188 2.82631 19.5725 2.86506 19.5725 2.86506C27.1438 2.88506 30.7575 5.16381 31.61 5.93131C34.39 8.31381 35.8225 14.0238 34.7738 22.4163C33.7775 30.5538 27.8275 31.0688 26.7263 31.4201C26.2575 31.5701 21.9275 32.6376 16.4725 32.2863C16.4725 32.2863 12.41 37.1888 11.14 38.4513C10.9388 38.6726 10.7038 38.7376 10.5538 38.7051C10.3388 38.6526 10.2738 38.3863 10.2863 38.0213L10.325 31.3226C2.36876 29.1226 2.83751 20.8213 2.92251 16.4851C3.02001 12.1488 3.83376 8.60131 6.25626 6.19881C9.51751 3.25006 15.3775 2.85256 18.105 2.83256H18.1075ZM18.7075 7.16756C18.642 7.1669 18.5771 7.17921 18.5164 7.20377C18.4557 7.22834 18.4004 7.26467 18.3538 7.31069C18.3072 7.3567 18.2702 7.41148 18.2449 7.47187C18.2195 7.53227 18.2064 7.59707 18.2063 7.66256C18.2063 7.94256 18.4338 8.16381 18.7075 8.16381C19.9469 8.14024 21.1787 8.36227 22.3318 8.81709C23.485 9.27191 24.5367 9.95053 25.4263 10.8138C27.2425 12.5776 28.1275 14.9476 28.1613 18.0463C28.1613 18.3201 28.3825 18.5476 28.6625 18.5476V18.5276C28.7945 18.5279 28.9212 18.476 29.0151 18.3833C29.109 18.2906 29.1624 18.1645 29.1638 18.0326C29.2245 16.574 28.9879 15.1183 28.4685 13.754C27.9492 12.3897 27.1578 11.1453 26.1425 10.0963C24.1638 8.16256 21.6563 7.16631 18.7075 7.16631V7.16756ZM12.1188 8.31381C11.7649 8.26211 11.4041 8.33313 11.0963 8.51506H11.07C10.3553 8.93398 9.71153 9.46346 9.16251 10.0838C8.70626 10.6113 8.45876 11.1451 8.39376 11.6588C8.35501 11.9651 8.38126 12.2713 8.47251 12.5638L8.50501 12.5838C9.01876 14.0938 9.69001 15.5463 10.51 16.9138C11.5663 18.835 12.8662 20.6118 14.3775 22.2001L14.4225 22.2651L14.4938 22.3176L14.5388 22.3701L14.5913 22.4151C16.1853 23.9308 17.9664 25.2368 19.8913 26.3013C22.0913 27.4988 23.4263 28.0651 24.2275 28.3001V28.3126C24.4625 28.3838 24.6763 28.4163 24.8913 28.4163C25.5741 28.3663 26.2206 28.089 26.7275 27.6288C27.345 27.0797 27.8686 26.4332 28.2775 25.7151V25.7026C28.6613 24.9801 28.5313 24.2963 27.9775 23.8338C26.8685 22.8644 25.6693 22.0034 24.3963 21.2626C23.5438 20.8001 22.6775 21.0801 22.3263 21.5488L21.5775 22.4926C21.1938 22.9613 20.4963 22.8963 20.4963 22.8963L20.4763 22.9088C15.275 21.5801 13.8875 16.3138 13.8875 16.3138C13.8875 16.3138 13.8225 15.5976 14.3038 15.2326L15.2413 14.4776C15.69 14.1126 16.0025 13.2476 15.5213 12.3938C14.7855 11.119 13.9264 9.9195 12.9563 8.81256C12.7442 8.5516 12.4466 8.37405 12.1163 8.31131L12.1188 8.31381ZM19.5725 9.79881C18.9088 9.79881 18.9088 10.8013 19.5788 10.8013C20.4041 10.8147 21.2187 10.9906 21.9761 11.319C22.7334 11.6473 23.4186 12.1217 23.9925 12.7151C24.516 13.2926 24.9183 13.9693 25.1756 14.7051C25.4328 15.4409 25.5397 16.2209 25.49 16.9988C25.4923 17.1305 25.546 17.256 25.6397 17.3485C25.7334 17.441 25.8596 17.4932 25.9913 17.4938L26.0113 17.5201C26.1439 17.5191 26.2708 17.466 26.3646 17.3722C26.4584 17.2784 26.5115 17.1514 26.5125 17.0188C26.5575 15.0326 25.94 13.3663 24.7288 12.0313C23.5113 10.6963 21.8125 9.94756 19.6438 9.79881H19.5725ZM20.3938 12.4938C19.71 12.4738 19.6838 13.4963 20.3613 13.5163C22.0088 13.6013 22.8088 14.4338 22.9138 16.1463C22.916 16.2763 22.9691 16.4002 23.0616 16.4916C23.1542 16.5829 23.2788 16.6344 23.4088 16.6351H23.4288C23.4956 16.6322 23.5612 16.616 23.6217 16.5875C23.6823 16.5591 23.7365 16.5188 23.7813 16.4691C23.8261 16.4194 23.8606 16.3613 23.8827 16.2982C23.9048 16.235 23.9141 16.1681 23.91 16.1013C23.7925 13.8688 22.575 12.6113 20.4138 12.4951H20.3938V12.4938Z" fill="white"></path>
										</svg>
									</a>
									<a href="<?php echo $social['whatsup'] ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
											<path d="M20 8.10714C13.5089 8.10714 8.23214 13.3839 8.22321 19.875C8.22321 22.0982 8.84822 24.2679 10.0268 26.1339L10.3036 26.5804L9.11607 30.9196L13.5714 29.75L14 30.0089C15.8036 31.0804 17.875 31.6518 19.9911 31.6518H20C26.4821 31.6518 31.9018 26.375 31.9018 19.8839C31.9018 16.7411 30.5446 13.7857 28.3214 11.5625C26.0893 9.33036 23.1429 8.10714 20 8.10714ZM26.9196 24.9286C26.625 25.7589 25.2143 26.5089 24.5357 26.6071C23.4107 26.7768 22.5357 26.6875 20.2946 25.7232C16.75 24.1875 14.4286 20.6161 14.25 20.3839C14.0714 20.1518 12.8036 18.4643 12.8036 16.7232C12.8036 14.9821 13.7143 14.125 14.0446 13.7679C14.3661 13.4107 14.75 13.3214 14.9911 13.3214C15.2232 13.3214 15.4643 13.3214 15.6696 13.3304C15.8839 13.3393 16.1786 13.25 16.4643 13.9375C16.7589 14.6429 17.4643 16.3839 17.5536 16.5625C17.6429 16.7411 17.7054 16.9464 17.5804 17.1786C16.9018 18.5357 16.1786 18.4821 16.5446 19.1071C17.9107 21.4554 19.2768 22.2679 21.3571 23.3125C21.7143 23.4911 21.9196 23.4643 22.125 23.2232C22.3304 22.9911 23.0089 22.1875 23.2411 21.8393C23.4732 21.4821 23.7143 21.5446 24.0357 21.6607C24.3571 21.7768 26.0982 22.6339 26.4554 22.8125C26.8125 22.9911 27.0446 23.0804 27.1339 23.2232C27.2143 23.3929 27.2143 24.1071 26.9196 24.9286ZM35.7143 0H4.28571C1.91964 0 0 1.91964 0 4.28571V35.7143C0 38.0804 1.91964 40 4.28571 40H35.7143C38.0804 40 40 38.0804 40 35.7143V4.28571C40 1.91964 38.0804 0 35.7143 0ZM19.9911 34.0357C17.6161 34.0357 15.2857 33.4375 13.2232 32.3125L5.71429 34.2857L7.72321 26.9464C6.48214 24.8036 5.83036 22.3661 5.83036 19.8661C5.83929 12.0625 12.1875 5.71429 19.9911 5.71429C23.7768 5.71429 27.3304 7.1875 30.0089 9.86607C32.6786 12.5446 34.2857 16.0982 34.2857 19.8839C34.2857 27.6875 27.7946 34.0357 19.9911 34.0357Z" fill="white"></path>
										</svg>
									</a>
									<a href="<?php echo $social['instagramm'] ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
											<path d="M20 0C14.5631 0 13.8855 0.0262533 11.7577 0.116265C9.6212 0.221278 8.17602 0.552569 6.90086 1.04763C5.56627 1.55147 4.35762 2.34031 3.35917 3.35917C2.33747 4.35529 1.54819 5.56461 1.04763 6.90086C0.552569 8.17602 0.221278 9.6212 0.116265 11.7577C0.0200025 13.8867 0 14.5631 0 20C0 25.4369 0.0262533 26.1145 0.116265 28.2423C0.221278 30.3725 0.552569 31.824 1.04763 33.0991C1.55147 34.4337 2.34031 35.6424 3.35917 36.6408C4.35529 37.6625 5.56461 38.4518 6.90086 38.9524C8.17602 39.4412 9.62745 39.7787 11.7577 39.8837C13.8867 39.98 14.5631 40 20 40C25.4369 40 26.1145 39.9737 28.2423 39.8837C30.3725 39.7787 31.824 39.4399 33.0991 38.9524C34.4337 38.4485 35.6424 37.6597 36.6408 36.6408C37.6638 35.6458 38.4533 34.4362 38.9524 33.0991C39.4412 31.824 39.7787 30.3725 39.8837 28.2423C39.98 26.1133 40 25.4369 40 20C40 14.5631 39.9737 13.8855 39.8837 11.7577C39.7787 9.62745 39.4399 8.16852 38.9524 6.90086C38.4485 5.56627 37.6597 4.35762 36.6408 3.35917C35.6458 2.33615 34.4362 1.54667 33.0991 1.04763C31.824 0.552569 30.3725 0.221278 28.2423 0.116265C26.1133 0.0200025 25.4369 0 20 0ZM20 3.60045C25.3394 3.60045 25.977 3.6267 28.0873 3.71671C30.0338 3.80798 31.0939 4.13302 31.7977 4.40805C32.6679 4.72924 33.4554 5.24047 34.103 5.90449C34.7659 6.54935 35.2752 7.3351 35.5932 8.20353C35.8682 8.90736 36.1933 9.9675 36.2845 11.914C36.3745 14.0243 36.4008 14.6631 36.4008 20.0012C36.4008 25.3394 36.3745 25.9782 36.277 28.0885C36.172 30.035 35.847 31.0951 35.5732 31.799C35.1944 32.7378 34.7718 33.3942 34.0743 34.1043C33.4245 34.7641 32.6374 35.2729 31.769 35.5944C31.0739 35.8695 29.9987 36.1945 28.0448 36.2858C25.9232 36.3758 25.2982 36.4021 19.945 36.4021C14.5918 36.4021 13.968 36.3758 11.844 36.2783C9.89749 36.1733 8.8236 35.8482 8.11977 35.5744C7.16965 35.1956 6.51831 34.7731 5.82073 34.0755C5.11689 33.3717 4.66933 32.7016 4.32429 31.7702C4.04426 31.0751 3.72422 30 3.62045 28.046C3.54919 25.9495 3.51544 25.2994 3.51544 19.9712C3.51544 14.6456 3.54919 13.9942 3.62045 11.8715C3.72422 9.91749 4.04426 8.84486 4.32429 8.14727C4.66933 7.1959 5.11814 6.54582 5.82073 5.84198C6.51707 5.14564 7.16965 4.69559 8.11977 4.34304C8.8236 4.06926 9.87123 3.74422 11.8252 3.64671C13.9467 3.57045 14.5718 3.54294 19.9175 3.54294L20 3.60045ZM20 9.73497C18.6515 9.73447 17.3161 9.99971 16.0702 10.5155C14.8243 11.0313 13.6922 11.7876 12.7387 12.7412C11.7851 13.6947 11.0288 14.8268 10.513 16.0727C9.99721 17.3186 9.73197 18.654 9.73247 20.0025C9.73197 21.351 9.99721 22.6864 10.513 23.9323C11.0288 25.1782 11.7851 26.3103 12.7387 27.2638C13.6922 28.2174 14.8243 28.9736 16.0702 29.4895C17.3161 30.0053 18.6515 30.2705 20 30.27C21.3485 30.2705 22.6839 30.0053 23.9298 29.4895C25.1757 28.9736 26.3078 28.2174 27.2613 27.2638C28.2149 26.3103 28.9711 25.1782 29.487 23.9323C30.0028 22.6864 30.268 21.351 30.2675 20.0025C30.268 18.654 30.0028 17.3186 29.487 16.0727C28.9711 14.8268 28.2149 13.6947 27.2613 12.7412C26.3078 11.7876 25.1757 11.0313 23.9298 10.5155C22.6839 9.99971 21.3485 9.73447 20 9.73497ZM20 26.6696C16.3145 26.6696 13.3329 23.688 13.3329 20.0025C13.3329 16.317 16.3145 13.3354 20 13.3354C23.6855 13.3354 26.6671 16.317 26.6671 20.0025C26.6671 23.688 23.6855 26.6696 20 26.6696ZM33.0816 9.32492C33.081 9.96208 32.8274 10.5729 32.3766 11.0232C31.9258 11.4735 31.3147 11.7265 30.6776 11.7265C30.3625 11.7265 30.0506 11.6644 29.7595 11.5438C29.4684 11.4233 29.204 11.2466 28.9812 11.0238C28.7584 10.801 28.5817 10.5366 28.4612 10.2455C28.3406 9.95443 28.2785 9.64246 28.2785 9.32742C28.2785 9.01237 28.3406 8.70041 28.4612 8.40934C28.5817 8.11827 28.7584 7.8538 28.9812 7.63103C29.204 7.40826 29.4684 7.23155 29.7595 7.11098C30.0506 6.99042 30.3625 6.92837 30.6776 6.92837C31.999 6.92837 33.0816 8.0035 33.0816 9.32492Z" fill="white"></path>
										</svg>
									</a>
									<a href="<?php echo $social['facebook'] ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M27.45 40V24.51H32.65L33.428 18.474H27.448V14.62C27.448 12.872 27.934 11.68 30.442 11.68H33.638V6.28C32.0902 6.11529 30.5345 6.03517 28.978 6.04C24.37 6.04 21.216 8.854 21.216 14.02V18.474H16V24.51H21.214V40H2.208C0.988 40 0 39.012 0 37.792V2.208C0 0.988 0.988 0 2.208 0H37.792C39.012 0 40 0.988 40 2.208V37.792C40 39.012 39.012 40 37.792 40H27.45Z" fill="white"></path>
										</svg>
									</a>
									<a href="<?php echo $social['email'] ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 30" fill="none">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M14.344 17.668L20.004 21.538L25.46 17.774L37.69 29.84C37.368 29.944 37.024 30 36.666 30H3.334C2.894 30 2.474 29.914 2.088 29.76L14.344 17.668ZM40 7.752V26.666C40 27.16 39.892 27.628 39.7 28.05L27.712 16.222L40 7.752ZM1.8872e-06 7.858L12.084 16.122L0.212002 27.838C0.0713934 27.4633 -0.000424467 27.0662 1.8872e-06 26.666V7.858ZM36.666 0C38.506 0 40 1.492 40 3.334V4.506L19.996 18.296L1.8872e-06 4.62V3.334C1.8872e-06 1.494 1.492 0 3.334 0H36.666Z" fill="white"></path>
										</svg>
									</a>
								</div>
								<p>Our location</p>
								<div class="adress">Ukraine, Kyiv, 5 Solomyanska st, room 302</div>
							</div>
						</div>
						<div class="col-lg-6 pl-0 contact_form_side">
							<h2>Sign up for <span>courses</span></h2>
							<p>or a trial lesson</p>
							<div class="form_box">
								<?php echo do_shortcode('[contact-form-7 id="7073" title="Contact"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end of form section -->

		</main>


		<?php get_footer() ?>
