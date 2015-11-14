<?php



?>

<?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>

<form role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" class="navbar-form navbar-right hidden-xs" method="get">
    <label for="s" class="sr-only">Search</label>
    <div class="input-group search-form">
        <input type="text" class="form-control" id="s" name="s" placeholder="Search"<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary"><i class="icon-search"></i></button>
        </span>
    </div> <!-- /.input-group -->
</form>

<!--<form class="navbar-form navbar-right hidden-sm hidden-md hidden-xs" role="search" action="/" method="GET">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Tìm kiếm..."/>
        <span class="input-group-btn">
            <button class="btn btn-success" type="button">Tìm kiếm</button>
        </span>
</form>-->




<!--<form role="form" action="<?php //bloginfo('siteurl'); ?>/" id="searchform" method="get">
    <label for="s" class="sr-only">Search</label>
    <div class="input-group search-form">
        <input type="text" class="form-control" id="s" name="s" placeholder="Search"<?php //if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary"><i class="icon-search"></i></button>
        </span>
    </div>  /.input-group 
</form>-->