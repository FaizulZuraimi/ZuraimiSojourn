<script src="https://kit.fontawesome.com/cd8d15d8da.js" crossorigin="anonymous"></script>
 <?php get_header();
 
    while(have_posts()) {
        the_post();

 
 
 
 ?>
    <main>
      <h2 class='page-heading'><?php the_title(); ?></h2>
      <div id='post-container'>
        <section id="blogpost">
            <div class="card">
                <?php if(has_post_thumbnail()) { ?>

                <div class="card-image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="about_me" style="width:200px; height:200px">

                </div>
                <?php } ?>
                <div class="card-description">
                  <?php the_content(); ?>
                </div>

        </section>

    <?php } ?>

        <aside id="sidebar">
            <?php dynamic_sidebar('main-sidebar'); ?>
        </aside>    

      </div>
    </main>

<?php get_footer(); ?>