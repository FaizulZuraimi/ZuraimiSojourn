<?php get_header(); ?>
<script src="https://kit.fontawesome.com/cd8d15d8da.js" crossorigin="anonymous"></script>
    <div id="banner">
        <h1>Zuraimi's Sojourn</h1>
        <h3>Life of Zurtugul</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/blog');?>">
            <h2 class="section-heading">Recent Blogs</h2>
        </a>
        <section>

        <?php 
        
            $args = array (
                'post_type' => 'post',
                'posts_per_page' =>2,
            );

            $blogposts = new WP_Query($args);

            while ($blogposts->have_posts()) {
                $blogposts->the_post();
          
        
        ?>

        

            <!-- blog post #1 -->
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>                    
            <div class="card-description">
                <a href="<?php echo the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p>
                   <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                </p>
                <a href="<?php the_permalink();?>" class="btn-readmore">
                    Read more
                </a>
            </div>
            </div>
            
            <?php } 
            wp_reset_query(); 
            ?>
        </section>
    </main>    

<?php get_footer(); ?>       
     

