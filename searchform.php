
<?php
/**
 * The template for displaying search forms in motrton-one (stolen from Twenty Eleven)
 *
 * @package WordPress
 * @subpackage motrton-one
 * @since motrton-one 0.1
 */
?>

<!--  <div class="searchfield">
    <div class="ui-widget"> -->
     <form method="get" id="searchform" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">  
      <!--    <label for="s" class="assistive-text"><?php _e( 'Suche', 'motrton-one' ); ?></label> -->  
         <input type="text" name="s" id="s" class="input-medium search-query" data-provide="typeahead" placeholder="<?php esc_attr_e( 'Begirff oder &darr; plus &crarr;', 'motrton-one' ); ?>" />  
         <?php
         // add a datalist to the inputfield
         // as seen here
         // http://wet-boew.github.com/wet-boew/demos/datalist/datalist-eng.html?codekitCB=380560437.939341
         // 
         $options = get_option('motrton-one_options');
         $termsstring = $options['searchterms'];
         $terms = explode(",", $termsstring);
         // echo "<datalist id=\"suggestions\">" . "\n";
         // echo "<!--[if lte IE 9]><select><![endif]-->" . "\n";
         // foreach($terms as $value) {
         //     // $str = preg_replace('/\s*/||/\s*$/','',$value);
         //     echo  "<option label=\"\" value=\"". trim($value) . "\"></option>" . "\n";
         // }
         // echo "<!--[if lte IE 9]></select><![endif]-->" . "\n";
         // echo "</datalist>" . "\n";
         // this writes the data for autocomplete jquery ui 
         // echo "<div id=\"searchterms\" style=\"visibility: hidden;\">";
         // foreach($terms as $value) {
         //     echo trim($value) . ",";
         // }
         // echo "</div>" . "\n";
         // echo '<div id="searchterms" style="visibility: hidden;">'. json_encode($terms) .'}</div>'
         ?>
     </form>
<!--   </div> 
 </div> -->