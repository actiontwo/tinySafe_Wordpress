<?php get_header(); ?>
<section class="container">
    <div id="main_tiles">

        <ul class="content_tiles">
             <?php
            $query = array(
              'category_name' => 'news',
              'posts_per_page' => 3
            );
            query_posts($query);
            while (have_posts()) : the_post();
                ?>
            <li>
                <a>
                    <figure class="img_tiles">
                        
                        <?php 
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>
                        <img src="<?php echo $url; ?>">
                    </figure>
                    <span class="title_tiles"><?php the_title()?></span>
                </a>
            </li>
            <?php endwhile; ?>
              </ul>
    </div>
    <blockquote id="blockquote">
    <?php
       $query = array(
         'category_name' => 'testimonial',
         'posts_per_page' => 1
       );
       query_posts($query);
       while (have_posts()) : the_post();?>
        <p class="title_blockquote"><?php the_title()?> </p>
        <div class="author_blockquote">
            <?php the_content()?>
        </div>
    <?php endwhile;?>
    </blockquote>
    <div id="question">
        <?php
        $query = array(
          'category_name' => 'questions',
          'posts_per_page' => -1
        );
        query_posts($query);
        while (have_posts()) : the_post();
            ?> 
            <h3 class="title_question text_blue"> <?php the_title() ?></h3>
            <div class="content_question">
                <i class="icon-question"></i>
                <?php the_content() ?>
            </div>
         <?php endwhile;?>
        
        <p class="slogan_footer">
            <?php
            if (get_option('sloganBottom')) {
                echo get_option('sloganBottom');
            } else {?>
                With&nbsp<span class="text_blue">TinySafe&nbsp</span>you have one less thing to worry about.
            <?php } ?>  
        </p>
    </div>
</section>
<?php get_footer(); ?>