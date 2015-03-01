<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="search" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
