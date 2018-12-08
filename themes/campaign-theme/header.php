<script>
function toggleMenu() {
    var headerMenu = document.getElementById("header-menu");
    var showMenu = document.getElementById("show-menu");
    var hideMenu = document.getElementById("hide-menu");
    if (headerMenu.style.display === "block") {
        headerMenu.style.display = "none";
        hideMenu.style.display = "none";
        showMenu.style.display = "block";

    } else {
        headerMenu.style.display = "block";
        showMenu.style.display = "none";
        hideMenu.style.display = "block";
    }
}
</script>
<!DOCTYPE html>
<html>
<head> 
	<?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" >
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/apple-touch-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url('/favicon-32x32.png') ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('/favicon-16x16.png') ?>">
	<link rel="manifest" href="<?php echo site_url('/site.webmanifest') ?>">
	<link rel="mask-icon" href="<?php echo site_url('/safari-pinned-tab.svg') ?>" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#3c252d">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<header class="site-header">
    <div class="container">
	<div class="logo"><a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/images/Demokratie-in-Europa-logo.svg')?>"></a></div>
      <a class="menu-icon show-menu" id="show-menu" onclick="toggleMenu()"><i class="fas fa-bars"></i>Menu</a>
      <a class="menu-icon hide-menu" id="hide-menu" onclick="toggleMenu()"><i class="fas fa-times"></i>Close</a>
      <div class="menu" id="header-menu">
        <nav class="main-navigation">
          <ul>
            <li><a href="<?php echo site_url('/about-us') ?>"><?php pll_e('Über uns'); ?></a></li>
            <!--<li><a href="<?php echo site_url('/european-spring') ?>">European Spring</a></li>-->
            <li><a href="<?php echo site_url('/policies') ?>"><?php pll_e('Programm'); ?></a></li>
            <li><a href="<?php echo get_post_type_archive_link('candidate'); ?>">
				<?php
				if(pll_current_language() == 'en'){
				echo('Candidates');
				}
				else {
				echo('Kandidat<span class="asterisk">*</span>innen');
				}
				?>
				</a></li>
			  
			  
			  
            <li><a href="<?php echo get_post_type_archive_link('event'); ?>"><?php pll_e('Events'); ?></a></li>
            <li><a href="<?php echo site_url('/presse') ?>"><?php pll_e('Presse'); ?></a></li>
            <li><a href="<?php echo site_url('/mitgliedschaft') ?>"><?php pll_e('Mitglied werden'); ?></a></li>
            <li class="nav-button"><a href="<?php echo site_url('/help-out') ?>"><?php pll_e('Spenden'); ?></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>