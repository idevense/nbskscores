<form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>"> 
<i class="fa fa-search" type="icon"></i>
<label>
<input type="search" class="search-field"
placeholder="<?php echo esc_attr_x( 'Søk', 'placeholder' ) ?>"
onfocus="this.placeholder = ''"
onblur="this.placeholder = '<?php echo esc_attr_x( 'Søk', 'placeholder' ) ?>'"
value="<?php echo get_search_query() ?>" name="s"
title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</label>
    
</form>
