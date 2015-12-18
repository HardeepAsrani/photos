<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
		<div class="input-group">
			<input class="form-control" type="search" placeholder="<?php _e( 'Search', 'photos' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php _e( 'Search for:', 'photos' ) ?>" />
			<span class="input-group-btn">
				<input type="submit" class="btn btn-primary" value="<?php _e( 'Search', 'photos' ) ?>" />
			</span>
		</div>
	</div>
</form>