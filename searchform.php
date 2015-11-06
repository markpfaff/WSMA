<?php

?>

<?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>

<form role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
    <label for="s" class="sr-only">Search</label>
    <div class="input-group search-form col-sm-2">
        <input type="text" class="form-control" id="s" name="s" placeholder="Search"<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary"><i class="icon-search"></i></button>
        </span>
    </div> <!-- /.input-group -->
</form>

