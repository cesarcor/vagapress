<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
		<label>
			<input type="search"
       class="search-field"
       placeholder="search destination"
       value="<?php echo get_search_query(); ?>"
       name="s" title="search"/>
		</label>
</form>
