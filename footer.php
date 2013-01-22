<hr>
<div class="container">
    <footer class="foot">
        <div class="row">
            <div class="span12">
                <p>
                <?php
                $options = get_option('motrton-one_options');
                $impressumpage = '<a href="' . get_permalink( $options['impressumpage'] ) .'">Impressum</a> |';
                $contactpage = ' <a href="'. get_permalink( $options['contactpage'] ) . '">Kontakt</a> |';
                $newsletterpage = '<a href="' . get_permalink( $options['newsletterpage'] ) . '">Newsletter</a> &nbsp;&nbsp;&nbsp;';
                echo $impressumpage . $contactpage . $newsletterpage;

                $dashboardlink = admin_url();
                $loginlink = wp_login_url( get_permalink() );
                $logoutlink =  wp_logout_url( get_permalink() );
                $registerlink = get_page_link(220);

                if ( is_user_logged_in() ) {
                    echo ' <a href="' . $dashboardlink . '"> Dashboard <i class="icon-wrench"></i></a> | <a href="' . $logoutlink . '">Ausloggen <i class="icon-signout"></i></a>' ; 
                 }else{
                    echo ' | <a href="' . $loginlink . '"> Einloggen <i class="icon-signin"></i></a>';
                    if(get_option('users_can_register')) { 
                    echo '| <a href="' . $registerlink . '"> Registrieren <i class="icon-user"></i></a>'; 
                    }
                 }
                 ?>
                </p>
            </div> <!-- close span12 -->
        </div> <!-- close row -->
    </footer>
</div><!-- /container -->
<?php wp_footer(); ?>
</body>
<html>
