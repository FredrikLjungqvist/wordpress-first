<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_enqueue_scripts(); ?>
 
    <?php wp_head(); ?>
</head>
<body>
    <div id="wrap">
    <header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
                    
  <a class="logo" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
  

					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
        
		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

        
        
    </header>
    <nav id="nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php
        
        wp_nav_menu( array( 'theme_location' => 'huvudmeny' ) );;
        ?>
                    
                    
                </div>
            </div>
        </div>
    </nav> 
   
    
    
    