<?php /* Template Name: Undersida stil 3 */ 

?>
<!DOCTYPE html>
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
                        <h1><?php the_title();?></h1>
						<p><?php  the_content(); ?> </p>
						</div>
                        
							<?php the_post_thumbnail()?>
						
						
					</div>
				</div>
			</section>
		</main>
        <?php get_footer(); ?>
