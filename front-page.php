<?php
/**
 * The template for displaying the front pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dugout
 */

get_header(); ?>

	<?php $featImg = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>

	<section id="banner" style="background-image: url(<?php echo $featImg; ?>);">
		<div class="table">
			<div class="cell middle">
				<div class="container">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Background--image-mobile.jpg" class="mobile-banner" alt="">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'homepage' );
					endwhile;
					?>
				</div>
			</div>
		</div>
	</section>

	<section id="about">
		<div class="container">
			<div class="row">
				<div class="copy">
					<?php the_field( 'about_text' ); ?>
				</div>
				<div class="logos">
					<?php
					//club_icons
					$images = get_field('club_icons');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $images ): ?>
					<ul>
						<?php foreach( $images as $image ): ?>
						<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section id="b2bvideo">
		<div class="container">
			<div class="row">
				<div class="video-container">
					<?php the_field( 'b2b_video' ); ?>
				</div>
			</div>
			<div class="row">
				<a href="#contact" title="Get in the Dugout">Get in the Dugout</a>
			</div>
		</div>
	</section>

	<section id="work">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'work_text' ); ?>
				</div>
			</div>
			<div class="row">
				<div class="stats">
					<div class="columns four">
						<span>
							<?php echo nice_number(get_field( 'clubs' )); ?>
						</span>
						<h3>Clubs and<br>Growing</h3>
					</div>
					<div class="columns four">
						<span>
							<?php echo nice_number(get_field( 'social_footprint' )); ?>
						</span>
						<h3>Social<br>Footprint</h3>
					</div>
					<div class="columns four">
						<span>
							<?php echo nice_number(get_field( 'video_views' )); ?>
						</span>
						<h3>Video<br>Views</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="stats">
					<div class="columns four">
						<span>
							<?php echo nice_number(get_field( 'videos_posted' )); ?>
						</span>
						<h3>Videos<br>Posted</h3>
					</div>
					<div class="columns four">
						<span>
							<?php echo nice_number(get_field( 'unique_users' )); ?>
						</span>
						<h3>Unique<br>Users</h3>
					</div>
					<div class="columns four">
						<span>
							<?php echo nice_number(get_field( 'social_channels' )); ?>
						</span>
						<h3>Social<br>Channels</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="videos_bottom">
		<div class="container">
			<div class="row">
				<div class="columns four">
					<h3>Social</h3>
					<div class="video-container">
						<?php the_field( 'social_video' ); ?>
					</div>
				</div>
				<div class="columns four">
					<h3>Series</h3>
					<div class="video-container">
						<?php the_field( 'series_video' ); ?>
					</div>
				</div>
				<div class="columns four">
					<h3>Originals</h3>
					<div class="video-container">
						<?php the_field( 'originals_video' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="video_content">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'video_content' ); ?>
				</div>
			</div>
			<div class="row">
				<a href="#contact" title="Get in the Dugout">Get in the Dugout</a>
			</div>
		</div>
	</section>

	<section id="videos_bottom">
		<div class="container">
			<div class="row">
				<div class="columns four">
					<h3>Exclusives</h3>
					<div class="video-container">
						<?php the_field( 'exclusives_video' ); ?>
					</div>
				</div>
				<div class="columns four">
					<h3>Archive</h3>
					<div class="video-container">
						<?php the_field( 'archives_video' ); ?>
					</div>
				</div>
				<div class="columns four">
					<h3>Events</h3>
					<div class="video-container">
						<?php the_field( 'events_video' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="brands">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'brands_content' ); ?>
				</div>
			</div>
		</div>
	</section>

	<section id="brand_logos">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php
					//club_icons
					$images = get_field('brands');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $images ): ?>
					<ul>
						<?php foreach( $images as $image ): ?>
						<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section id="partnerships">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'partner_content' ); ?>
				</div>
			</div>
		</div>
	</section>

	<section id="partners_logos">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php
					//club_icons
					$images = get_field('partners');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $images ): ?>
					<ul>
						<?php foreach( $images as $image ): ?>
						<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section id="big_image">
		<div class="container">
			<div class="row">
				<?php $big_image = get_field( 'big_image' ); ?>
				<img src="<?php echo $big_image['url']; ?>" alt="">
			</div>
			<div class="row">
				<a href="#contact" title="Get in the Dugout">Get in the Dugout</a>
			</div>
		</div>
	</section>

	<section id="press">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'news_content' ); ?>
				</div>
			</div>
			<div class="row">
				<?php 
				$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="columns four story">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'thumbnail' ) ?>
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<button type="button">Read More</button>
					</a>
				</div>
				<?php
				endwhile;
				wp_reset_query();
				?>
			</div>
			<!-- <div class="row">
				<div class="content">
					<a target="_blank" href="http://www.dugout.com" title="READ THE LATEST PRESS ON DUGOUT">READ THE LATEST PRESS ON DUGOUT</a>
				</div>
			</div> -->
		</div>
	</section>

	<section id="team">
		<div class="container">
			<div class="row">
				<h1>OUR WORLD CLASS TEAM</h1>
			</div>
			<div class="row">
				<ul id="og-grid" class="og-grid">
				<?php 
				$countwe = 1;
				$args = array( 'post_type' => 'staff', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<li>
					<a href="<?php echo home_url( '/' ) ?>#team" 
						<?php if (get_field( 'field_name' )): ?>
						data-linkedin="<?php the_field( 'linkedin_url' ); ?>" 
						<?php endif ?>
						data-largesrc="<?php the_post_thumbnail_url( 'full' ) ?>" 
						data-title="<?php the_title(); ?>" 
						data-role="<?php the_field( 'role' ); ?>" 
						data-description="<?php echo get_the_content(); ?>">
						<?php the_post_thumbnail( 'thumbnail' ) ?>
						<h3><?php the_title(  ); ?></h3>
						<h4><?php the_field( 'role' ); ?></h4>
					</a>
				</li>
				<?php
				// if ($countwe % 6 === 0) echo '</div><div class="row">';
				//$countwe++; 
				endwhile;
				wp_reset_query();
				?>
				</ul>
			</div>
		</div>
	</section>

	<section id="findus">
		<div class="container">
			<div class="row">
				<div class="columns four">
					<a href="http://www.dugout.com/" target="_blank" title="">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/dugout.png" alt="">
					</a>
				</div>
				<div class="columns eight apps">
					<a href="<?php the_field( 'app_store_url', 'options' ); ?>" target="_blank" title="">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/app-store.png" alt="">
					</a>
					<!-- <a href="<?php the_field( 'mac_store_url', 'options' ); ?>" target="_blank" title="">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/mac-store.png" alt="">
					</a> -->
					<a href="<?php the_field( 'google_play_url', 'options' ); ?>" target="_blank" title="">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/play-store.png" alt="">
					</a>
					<!-- <a href="<?php the_field( 'fire_tv_url', 'options' ); ?>" target="_blank" title="">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/fire-tv.png" alt="">
					</a> -->
				</div>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<div class="row">
				<h1>Contact Us</h1>
			</div>
			<div class="row">
				<div class="columns six contact-form">
					<?php echo do_shortcode( get_field( 'contact_form' ) ); ?>
				</div>
				<div class="columns six">
					<ul class="social">
						<li>
							<a target="_blank" href="<?php the_field( 'facebook', 'options' ); ?>" title="">
								<i class="fab fa-facebook-square"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?php the_field( 'twitter', 'options' ); ?>" title="">
								<i class="fab fa-twitter-square"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?php the_field( 'instagram', 'options' ); ?>" title="">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?php the_field( 'linkedin', 'options' ); ?>" title="">
								<i class="fab fa-linkedin"></i>
							</a>
						</li>
					</ul>
					<?php the_field( 'contact_content' ); ?>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
