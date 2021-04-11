<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="field" name="s" id="s" placeholder="Búsqueda" />
	<input type="submit" class="submit" style="background-image: url('<?php echo THEMEPATH; ?>images/search.svg');" name="submit" id="searchsubmit" value=""/>
</form>
