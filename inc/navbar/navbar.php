<nav class="navbar navbar-expand-lg navbar-light bg-light  shadow shadow-sm fixed-top">
<div class="container">
  <a class="navbar-brand" href="<?php echo BASE_URL; ?>">RUET Career Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php echo $current_page_name == 'home'? 'active': null ;?>">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/">Home</a>
      </li>
      <li class="nav-item <?php echo $current_page_name == 'about'? 'active': null ;?>">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/about">About</a>
      </li>
      <li class="nav-item <?php echo $current_page_name == 'career fair'? 'active': null ;?>">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/careerfair">Career Fair</a>
      </li>
      <li class="nav-item  <?php echo $current_page_name == 'events'? 'active': null ;?>">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/events">Events</a>
      </li>
      <li class="nav-item dropdown <?php echo $current_page_name == 'teams'? 'active': null ;?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Teams
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownTeam">
          <a class="dropdown-item" href="<?php echo BASE_URL; ?>/teams/devTeam"> DevTeam</a>
          <a class="dropdown-item" href="<?php echo BASE_URL; ?>/teams/content-team"> Content Team</a>
          <a class="dropdown-item" href="<?php echo BASE_URL; ?>/teams/business-team"> Business Team</a>
          <a class="dropdown-item" href="<?php echo BASE_URL; ?>/teams/creative-design-team"> Creative Design Team</a>
          <!-- <a class="dropdown-item" href="<?php echo BASE_URL; ?>/teams/high-performance-team"> High Performance Team</a> -->
        </div>
      </li>
      <li class="nav-item dropdown <?php echo $current_page_name == 'committee'? 'active': null ;?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Committee
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL; ?>/ex-com"> Current Ex-com</a>
          <a class="dropdown-item" href="<?php echo BASE_URL; ?>/hall-of-fame"> Hall of fame</a>
        </div>
      </li>
      <li class="nav-item <?php echo $current_page_name == 'blogs'? 'active': null ;?>">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/blogs">Blogs</a>
      </li>
      <li class="nav-item <?php echo $current_page_name == 'news'? 'active': null ;?>">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/media_coverage">News</a>
      </li>
      <li class="nav-item <?php echo $current_page_name == 'contact'? 'active': null ;?>">
        <a class="nav-link" href="<?php echo BASE_URL; ?>/contact">Contact</a>
      </li>
    </ul>
  </div>
</div>
</nav>
