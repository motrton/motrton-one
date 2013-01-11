    <hr>
<div class="container">

    <div class="row">
        <div class="span12">
            <footer class="foot">
                <p>
                    <a href=" <?php get_permalink( 163 ) ?> ">Impressum</a> | <a href="<?php echo get_permalink( 14 ); ?>">Kontakt</a> | <a href="<?php echo get_permalink( 17 ); ?>">Newsletter</a> &nbsp;&nbsp;&nbsp;
                    <?php
                    $dashboardlink = admin_url();
                    $loginlink = wp_login_url( get_permalink() );
                    $logoutlink =  wp_logout_url( get_permalink() );
                    $registerlink = get_page_link(220);

                    if ( is_user_logged_in() ) {
                    
                    echo ' <a href="' . $dashboardlink . '""> Dashboard <i class="icon-wrench"></i></a> | <a href="' . $logoutlink . '">Ausloggen <i class="icon-signout"></i></a>' ; 
                 }else{
                    
                    echo ' | <a href="' . $loginlink . '""> Einloggen <i class="icon-signin"></i></a>';
                    if(get_option('users_can_register')) { 
                    echo '| <a href="' . $registerlink . '""> Registrieren <i class="icon-user"></i></a>'; 
                    }
                    
                 } ?>
                </p>
            </footer>
        </div>
    </div>
</div><!-- /container -->
<?php wp_footer(); ?>
