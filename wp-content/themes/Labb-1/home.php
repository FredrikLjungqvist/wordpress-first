<!DOCTYPE html>
<?php
get_header();
?>
<main>
<section>
	<div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12 col-md-9">
                <h1><?php wp_title(''); ?></h1>
                <!-- loopen -->
                        <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content_blogg', get_post_format() );
                        endwhile; endif;
                        ?>
                        <!-- Löste sid-navigationen genom att hämta nuvarande sida och total antalet sidor -->
                    <nav class="navigation pagination">
					    <h2 class="screen-reader-text">Inläggsnavigering</h2>
						    <?php previous_posts_link( 'Föregående' ); ?>
							<span class="page-numbers current">
                                <?php 
                                if (get_query_var( 'paged')==0) {
                                    echo get_query_var( 'paged')+1;
                                }else{
                                    echo get_query_var( 'paged');
                                }
                                ?> 
                            </span>
                            <span>/</span>
							<span class="page-numbers">	
                                <?php 
                                global $wp_query; 
                                $pages = $wp_query->max_num_pages;
                                echo $pages;
                                ?>
                            </span>
								<?php next_posts_link( 'Nästa' ); ?>
					</nav>
            </div>
                    <?php
                    get_sidebar("blogg");
                    ?>
        </div>
    </div>
</section>
</main>                         
                       
        <?php get_footer(); ?>


