<!-- <h2>Sidebar</h2> -->

<!-- <h2>Suche</h2>
<p>
<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
   <input type="submit" id="search_submit" value="Suchen" />
</form>
</p> -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>