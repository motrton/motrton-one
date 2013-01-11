
<div class="container">
    <hr>
    <div class="row">
        <div class="span12">
            <footer class="foot">
                <p>
                    <a href="#">Impressum</a> |&nbsp;<a href="<?php echo get_permalink( 14 ); ?>">Kontakt</a> | <a href="<?php echo get_permalink( 17 ); ?>">Newsletter</a>
                    <?php
                    $dashboardlink = admin_url();
                    $loginlink = wp_login_url( get_permalink() );
                    $registerlink = get_page_link(220);
                    if ( is_user_logged_in() ) {
                    
                    echo ' | <a href="' . $dashboardlink . '""> Dashboard <i class="icon-wrench"></i></a>'; 
                 }else{
                    
                    echo ' | <a href="' . $loginlink . '""> Einloggen <i class="icon-signin"></i></a> | <a href="' . $registerlink . '""> Registrieren <i class="icon-user"></i></a>'; 

                    
                 } ?>
                </p>
            </footer>
        </div>
    </div>
</div><!-- /container -->
<?php wp_footer(); ?>
