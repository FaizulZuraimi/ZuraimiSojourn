<?php get_header(); ?>
<script src="https://kit.fontawesome.com/cd8d15d8da.js" crossorigin="anonymous"></script>


    <main>
        <a href="<?php echo site_url('/blog');?>">
            <h2 class="page-heading">Search Results for <?php get_search_query(); ?></h2>
        </a>

        <?php if(have_posts()) { ?>

        <section>

        <?php 
        
       

            while (have_posts()) {
               the_post();
          
        
        ?>  

            <!-- blog post #1 -->
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                    <div class="card-meta">
                    Posted by <?php the_author(); ?> on <?php the_time('F j,Y') ?>
                     in <a href="#"><?php echo get_the_category_list(',  ') ?></a>
                    </div>
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

            <?php } else {  ?>
                <div class="no-results">
                    <h2>Couldn't find any results.</h2>
                </div>

            <?php   }   ?>

    </main>    

    <div class="pagination">
                <?php echo paginate_links(); ?>
        </div>

<?php get_footer(); ?>       
     

