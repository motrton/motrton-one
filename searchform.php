
<?php
/**
 * The template for displaying search forms in motrton-one (stolen from Twenty Eleven)
 *
 * @package WordPress
 * @subpackage motrton-one
 * @since motrton-one 0.1
 */
?>
    <form method="get" id="searchform" autocomplete="on" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label for="s" class="assistive-text"><?php _e( '', 'motrton-one' ); ?></label>
        <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Suche + Enter', 'motrton-one' ); ?>" />
<!--         <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Suche + Enter', 'motrton-one' ); ?>" />
 -->    </form>

<!-- <form class="navbar-search pull-left">  
  <input type="text" class="search-query" placeholder="Search">  
</form>   -->