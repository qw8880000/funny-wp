<form role="search" method="get" class="" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<!--<span class="screen-reader-text"><?php /*echo _x( 'Search for:', 'label', 'funnywp' ); */?></span>-->
		<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'funnywp' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</div>
	<button type="submit" class="btn btn-primary"><?php echo _x( 'Search', 'submit button', 'funnywp' ); ?></button>
</form>
