<?php get_header(); ?>
<main>
<section>
	<div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12 col-md-9">


			<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
	get_template_part( 'content_single', get_post_format() );
    endwhile; endif;
			?>
            </div>
        </div>
    </div>
</section>
</main>  

<?php get_footer(); ?>