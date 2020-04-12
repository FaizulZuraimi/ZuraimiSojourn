<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
    <title>Zuraimi's Sojourn</title>
</head>
<body>

    <!-- slideout menu -->
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url('');?>"
                    <?php if(is_front_page()) echo 'class="active"' ?>  
                >Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog');?>"
                    <?php if(get_post_type()=='post') echo 'class="active"' ?>
                >Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about');?>"
                <?php if(is_page('about')) echo 'class="active"' ?>
                >About Me</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact');?>">Contact</a>
            </li>
            <li>
                <a href="http://zuraimisabki.blogspot.com/2008/">Old Blog</a>
            </li>
            <li>
               <div class="searchbox-slide-menu">
                   <?php get_search_form(); ?>
               </div>
            </li>
        </ul>

    </div>
    <!-- Navigation bar -->
    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url('');?>"> 
                <!-- link to logo logomakr.com/6eZLor -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/logov3.png" alt="zuraimi-sojourn-logo">
            </a>
        </div>
    <div id="menu-icon">
        <i class='fas fa-bars'></i>
    </div>
   
    <ul>
        <li>
            <a href="<?php echo site_url('');?>"
            <?php if(is_front_page()) echo 'class="active"' ?>
            >Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('/blog');?>"
            <?php if(get_post_type()=='post') echo 'class="active"' ?>
            >Blog</a>
        </li>
        <li>
            <a href="<?php echo site_url('/about');?>"
                <?php if(is_page('about')) echo 'class="active"' ?>
            >About Me</a>
        </li>
        <li>
                <a href="<?php echo site_url('/contact');?>">Contact</a>
            </li>
        <li>
            <a href="http://zuraimisabki.blogspot.com/2008/">Old Blog</a>
        </li>
        <li>
            <div id="search-icon">
                <i class="fas fa-search"></i>
            </div>
        </li>
    </ul>

    </nav>

    <div id=searchbox>
        <?php get_search_form(); ?>
    </div>
