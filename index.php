<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <!-- Include Foundation CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" /> 
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" /> 
</head>
<body <?php body_class(); ?>>

    <!-- Header -->
    <header>
        <div class="wrapper">
            <section class="content">
                <!-- Your header content goes here -->
                <nav class="top-bar">
                    <div class="top-bar-left">
                        <ul class="menu">
                            <li class="menu-text"><?php bloginfo('name'); ?></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <!-- You can add more menu items here -->
                        <ul class="menu">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <!-- Add more menu items as needed -->
                        </ul>
                    </div>
                </nav>
            </section>
        </div>
        
    </header>

    <!-- Home Page Content -->
    <main>
        <div class="wrapper">
            <section class="content">

                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </section>
        </div>

    </main>

    <!-- Footer -->
    <footer>
       <div class="wrapper">
            <section class="content">
                <!-- Your footer content goes here -->
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
            </section>
       </div>
    </footer>

    <?php wp_footer(); ?>
    <!-- Include Foundation JS -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"></script>
    <script>
        // Initialize Foundation JS components here
        jQuery(document).foundation();
    </script>
</body>
</html>