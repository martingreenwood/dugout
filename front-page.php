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

<div id="fullpage">

	<?php //home ?>
	<?php $featImg = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
	<section class="section fp-auto-height-responsive" id="banner" style="background-image: url(<?php echo $featImg; ?>);">
		<div class="table">
			<div class="cell middle">
				<div class="container">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background-image-mobile.png" class="mobile-banner" alt="">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'homepage' );
					endwhile;
					?>
				</div>
			</div>
		</div>
	</section>

	<?php //showreel ?>
	<section class="section fp-auto-height-responsive" id="b2bvideo">
		<!-- <div class="container"> -->
			<div class="row">
				<div class="video-container">
					<?php the_field( 'b2b_video' ); ?>
				</div>
			</div>
			<!-- <div class="row">
				<a href="#contact" title="Get in the Dugout">Get in the Dugout</a>
			</div> -->
		<!-- </div> -->
	</section>

	<?php //whoweare ?>
	<section class="section" id="about">

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

	<?php //whatwedo ?>
	<section class="section" id="work">
		<video loop muted autoplay>
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/B2B-CLIP-10-SEC-1.mp4" type="video/mp4">
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/B2B-CLIP-10-SEC-1.webm" type="video/webm">
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/B2B-CLIP-10-SEC-1.ogv" type="video/ogv">
		</video>
    	<div class="ovrly"></div>
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'work_text' ); ?>
				</div><!--
				--><div class="stats">
					<div class="stat">
						<span>
							<?php echo nice_number(get_field( 'clubs' )); ?>
						</span>
						<h3>Clubs and<br>Growing</h3>
					</div><!--
					--><div class="stat">
						<span>
							<?php echo nice_number(get_field( 'social_footprint' )); ?>
						</span>
						<h3>Social<br>Footprint</h3>
					</div><!--
					--><div class="stat">
						<span>
							<?php echo nice_number(get_field( 'video_views' )); ?>
						</span>
						<h3>Video<br>Views</h3>
					</div><!--
					--><div class="stat">
						<span>
							<?php echo nice_number(get_field( 'videos_posted' )); ?>
						</span>
						<h3>Videos<br>Produced</h3>
					</div><!--
					--><div class="stat">
						<span>
							<?php echo nice_number(get_field( 'unique_users' )); ?>
						</span>
						<h3>Unique<br>Users</h3>
					</div><!--
					--><div class="stat">
						<span>
							<?php echo nice_number(get_field( 'social_channels' )); ?>
						</span>
						<h3>Social<br>Channels</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php //originalcontent ?>
	<section class="section fp-auto-height-responsive" id="videos_bottom">
		<div class="container">
			<div class="row">
				<div class="slick">
					<div class="slide">
						<h3>Social</h3>
						<div class="video-container">
							<?php the_field( 'social_video' ); ?>
						</div>
						<div class="cap">
							<p><?php the_field( 'social_text' ); ?></p>
						</div>
					</div>
					<div class="slide">
						<h3>Series</h3>
						<div class="video-container">
							<?php the_field( 'series_video' ); ?>
						</div>
						<div class="cap">
							<p><?php the_field( 'series_text' ); ?></p>
						</div>
					</div>
					<div class="slide">
						<h3>Originals</h3>
						<div class="video-container">
							<?php the_field( 'originals_video' ); ?>
						</div>
						<div class="cap">
							<p><?php the_field( 'originals_text' ); ?></p>
						</div>
					</div>
					<div class="slide">
						<h3>Exclusives</h3>
						<div class="video-container">
							<?php the_field( 'exclusives_video' ); ?>
						</div>
						<div class="cap">
							<p><?php the_field( 'exclusive_text' ); ?></p>
						</div>
					</div>
					<div class="slide">
						<h3>Archive</h3>
						<div class="video-container">
							<?php the_field( 'archives_video' ); ?>
						</div>
						<div class="cap">
							<p><?php the_field( 'archive_text' ); ?></p>
						</div>
					</div>
					<div class="slide">
						<h3>Events</h3>
						<div class="video-container">
							<?php the_field( 'events_video' ); ?>
						</div>
						<div class="cap">
							<p><?php the_field( 'events_text' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php //videocontent ?>	
	<section class="section" id="videosinfo">
		<video loop muted autoplay>
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/B2B-CLIP-10-SEC-2.mp4" type="video/mp4">
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/B2B-CLIP-10-SEC-2.webm" type="video/webm">
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/B2B-CLIP-10-SEC-2.ogv" type="video/ogv">
		</video>
		<div class="ovrly"></div>
		<div class="container">
			<div class="row">	
				<div class="content">
					<?php the_field( 'video_content' ); ?>
				</div>
			</div>
		</div>
	</section>

	<?php //brands ?>	
	<section class="section fp-auto-height-responsive" id="brand">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'brands_content' ); ?>
				</div>
			</div>
			<?php
			//club_icons
			$images = get_field('brands');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $images ): ?>
			<div class="row">
				<div class="content">
					<ul>
						<?php foreach( $images as $image ): ?>
						<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</section>

	<?php //agencies ?>	
	<section class="section fp-auto-height-responsive" id="agency">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'agencies_content' ); ?>
				</div>
			</div>
			<?php
			//club_icons
			$images = get_field('agencies');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $images ): ?>
			<div class="row">
				<div class="content">
					<ul>
						<?php foreach( $images as $image ): ?>
						<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</section>

	<?php //partners ?>
	<section class="section fp-auto-height-responsiven" id="partnerships">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'partner_content' ); ?>
				</div>
			</div>
			<?php
			//club_icons
			$images = get_field('partners');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $images ): ?>
			<div class="row">
				<div class="content">
					<ul>
						<?php foreach( $images as $image ): ?>
						<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</section>

	<?php //platforms ?>
	<section class="section fp-auto-height-responsive" id="platform">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'platform_content' ); ?>
				</div>
			</div>
			<?php
			//club_icons
			$images = get_field('platforms');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $images ): ?>
			<div class="row">
				<div class="content">
					<ul>
						<?php foreach( $images as $image ): ?>
						<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</section>

	<?php //casestudies ?>	
	<section class="section fp-auto-height-responsive" id="testimonials">

		<div class="container">
			<div class="row">
				<h1>Case Studies</h1>
			</div>
		</div>
		<div class="content slicktwo">
			<?php 
			$cnt = 1;
			$args = array( 'post_type' => 'casestudy', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<div class="casestudy">
				<div class="top">
					<div class="container">
						<div class="row">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="row">
							<div class="columns six">
								<h3>Challenge</h3>
								<?php the_field( 'challenge' ); ?>
							</div>
							<div class="columns six">
								<h3>solution</h3>
								<?php the_field( 'challenge' ); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom">
					<div class="container">
						<div class="row">
							<div class="columns eight">
								<h3>The Results</h3>
								<?php the_field( 'results' ); ?>
							</div>
							<?php if (get_field( 'testimonials' )): ?>
							<div class="columns four testimonials">
								<h3>Testimonials</h3>
								<div class="quotes">
									<?php the_field( 'testimonials' ); ?>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php
			endwhile;
			wp_reset_query();
			?>
			</div>
		</div>
	</section>

	<?php //inthenews ?>
	<section class="section fp-auto-height-responsive" id="press">
		<div class="container">
			<div class="row">
				<div class="content">
					<?php the_field( 'news_content' ); ?>
				</div>
			</div>
			<div class="row">
				<?php 
				$cnt = 1;
				$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="columns four story">
					<a href="<?php the_permalink(); ?>">
						<?php //the_post_thumbnail( 'thumbnail' ) ?>
						<h3><?php the_title(); ?></h3>
						<?php //the_excerpt(); ?>
						<button type="button">Read More</button>
					</a>
				</div>
				<?php
				if ($cnt % 3 === 0 ) {
					echo "</div><div class='row'>";
				}
				$cnt++; endwhile;
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

	<?php //theteam ?>
	<section class="section fp-auto-height-responsive" id="team">
		<div class="container">
			<div class="row">
				<h1>OUR WORLD CLASS TEAM</h1>
			</div>
			<div class="row">
				<ul><!--
				
				<?php 
				$countwe = 1;
				$args = array( 'post_type' => 'staff', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				--><li>
					<?php $name = str_replace(" ", "", strtolower(get_the_title())); ?>
					<a href="#<?php echo $name ?>">
						<?php the_post_thumbnail('medium') ?>
						<h3><?php the_title(); ?></h3>
						<h4><?php the_field( 'role' ); ?></h4>
					</a>
					<div class="teaminfo" id="<?php echo $name ?>">
						<span class="exit"></span>
						<div class="picture">
							<?php the_post_thumbnail( 'full' ) ?>
						</div><!--

						--><div class="content">
							<h2><?php the_title(); ?></h2>
							<h4><?php the_field( 'role' ); ?></h4>
							<?php the_content(); ?>
							<!-- <a href="<?php the_field( 'linkedin_url' ); ?>" target="_blank">View LinkedIn Profile</a> -->
						</div>
					</div>
				</li><!--
				<?php
				// if ($countwe % 6 === 0) echo '</div><div class="row">';
				//$countwe++; 
				endwhile;
				wp_reset_query();
				?>
				--></ul>
			</div>
		</div>
	</section>

	<section class="section" id="reach">
		<video loop muted autoplay>
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/B2B-CLIP-10-SEC-4.mp4" type="video/mp4">
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/B2B-CLIP-10-SEC-4.webm" type="video/webm">
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/B2B-CLIP-10-SEC-4.ogv" type="video/ogv">
		</video>
		<div class="ovrly"></div>
		<div class="container">
			<div class="row">
				&nbsp;
			</div>
		</div>
	</section>

	<?php //getintouch ?>
	<section class="section fp-auto-height-responsive" id="contact">
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
					<a href="<?php the_field( 'google_play_url', 'options' ); ?>" target="_blank" title="">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/play-store.png" alt="">
					</a>
					<a href="<?php the_field( 'fire_tv_url', 'options' ); ?>" target="_blank" title="">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/fire-tv.png" alt="">
					</a>
				</div>
			</div>
			<div class="row">
				<hr>
			</div>
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

</div>

<?php
get_footer();
