<?php
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Akela theme for the GetSimple CMS
*
*****************************************************/
?>



<html>
<head>
<!-- Site Title -->
<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
<?php get_header(); ?>
<meta name="robots" content="index, follow" />
<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />
</head>

<body id="<?php get_page_slug(); ?>" >
  <div id="head">
	<a class="name" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
    <div class="sitemenu">
      <ul><?php get_i18n_navigation(return_page_slug(),0,2,I18N_SHOW_MENU); ?></ul>
    </div>

    <div style="clear:both"></div>
  </div>

  <div id="main">
    <div id="navigation">
      <ul><?php get_i18n_navigation(return_page_slug(),1,100); ?></ul>
    </div>

    <div id="content">
      <h1 id="pagetitle"><?php get_page_title(); ?></h1>
      <?php get_page_content(); ?>
    </div>

	<div id="sidebar">
		<div class="section">
			<?php get_i18n_component('sidebar');	?>
		</div>
	</div>

    <div style="clear:both"></div>

    <div id="footer">
		<?php get_footer(); ?>
    </div>

  </div>
</body>
</html>