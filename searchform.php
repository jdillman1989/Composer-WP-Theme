<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="search-field" />
		<input type="submit" id="searchsubmit" class="search-submit" value="" />
	</div>
</form>