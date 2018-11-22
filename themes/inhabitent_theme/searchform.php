<div class="header-search">
	
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<fieldset>
		<a onClick="toggle_search('searchInput')"href="#" class="search-toggle" ><i class="fas fa-search"></i></a>
			<label id="searchInput" style="width: 0px">
				<input type="search" class="search-field" placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
			</label>
			<input type="submit" id="search-submit" class="screen-reader-text" value="Search"/>
		</fieldset>
	</form>

</div>

 <script type="text/javascript" src=<?php echo get_template_directory_uri()."/build/js/toggle-search.min.js" ?>> </script>