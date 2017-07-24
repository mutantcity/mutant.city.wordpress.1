  <nav class="navbar navbar-default" id="header-nav-bar">
    <div class="container-fluid">
      <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


       <div style="overflow:hidden; white-space: nowrap;">
            <a class="navbar-brand" href="/">
              <delayed-class delay="1500" addclass="glyphicon glyphicon-tree-deciduous"></delayed-class>
              <baffle-tag
                text="<?php is_home() ? print "Welcome to Mutant City pardner!" : print "Mutant City" ?>">
              </baffle-tag>
            </a>
        </div>
      </div>

  <div class="collapse navbar-collapse" id="primary-navbar">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/">
            <span class="glyphicon glyphicon-filter"></span>
            <span>Blog</span>
          </a>
        </li>

        <li>
          <a href="<?php echo get_post_type_archive_link( 'p_hackery_snippets' ); ?>">
            <span class="glyphicon glyphicon-flash"></span>
            <span>Snips</span>
          </a>
        </li>

        <li>
          <a href="<?php echo get_page_link( get_page_by_title( 'aboot' )->ID ); ?>">
            <span class="glyphicon glyphicon-user"></span>
            <span>Aboot</span>
          </a>
        </li>

        <li>
          <a href="<?php echo get_page_link( get_page_by_title( 'portfolio' )->ID ); ?>">
              <span class="glyphicon glyphicon-fire"></span>
            <span>Portfolio</span>
          </a>
        </li>

        <li>
          <a href="<?php echo get_page_link( get_page_by_title( 'favorites' )->ID ); ?>">
            <span class="glyphicon glyphicon-star"></span>
            <span>Favs</span>
          </a>
        </li>
      </ul>

    </div><!--/.navbar-collapse-->
  </div><!--/.container-fluid-->
</nav>
