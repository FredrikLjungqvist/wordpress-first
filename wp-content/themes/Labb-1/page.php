<!DOCTYPE html>
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                        <h1><?php the_title();?></h1>
						<p><?php  the_content(); ?> </p>
						</div>
                        <div class="col-xs-12 col-sm-4 col-md-6">
							<?php the_post_thumbnail()?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
                        <?php
        
        wp_nav_menu( array( 'theme_location' => 'sidomeny' ) );;
        ?>
							
						</aside>
					</div>
				</div>
			</section>
		</main>
        <?php get_footer(); ?>