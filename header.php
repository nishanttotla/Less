<header id="masthead" class="site-header" role="banner">
  <div class="container">

    <div class="gravatar">
      <?php
        // grab admin email and their photo
        $admin_email = get_option('admin_email');
        echo get_avatar( $admin_email, 100 );
      ?>
    </div><!--/ author -->

    <div id="brand">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> &mdash; <span><?php echo get_bloginfo( 'description' ); ?></span></h1>
    </div><!-- /brand -->

    <nav role="navigation" class="site-navigation main-navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- .site-navigation .main-navigation -->

    <div class="clear"></div>
  </div><!--/container -->

</header><!-- #masthead .site-header -->