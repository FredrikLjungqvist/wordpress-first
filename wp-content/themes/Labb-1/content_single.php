<article>
<?php 
    the_post_thumbnail();
    ?>
    <h2 class="title"><?php the_title(); ?></h2>
    <ul class="meta">
        <li>
            <i class="fa fa-calendar"></i> <?php the_date();?>
        </li>
        <li>
            <i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author();?></a>
        </li>
        <li>
            <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1<?php the_category()?> </a>, <a href="kategori.html">Kategori 3</a>
        </li>
    </ul>
    <p>
    <?php the_content(); ?>
    </p>
</article>