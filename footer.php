
<div class="container">
    <hr>
    <div class="row">
        <div class="span12">
            <footer class="foot">
                <p>
                    <a href="#">Impressum</a> |&nbsp;<a href="<?php echo get_permalink( 14 ); ?>">Kontakt</a> | <a href="<?php echo get_permalink( 17 ); ?>">Newsletter</a>
                    <?php
                    if ( is_user_logged_in() ) {
                     $url = admin_url();
                    echo ' | <a href="' . $url . '""> Dashboard </a>';
                 } ?>
                </p>
            </footer>
        </div>
    </div>
</div><!-- /container -->
<?php wp_footer(); ?>
