<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fast-food
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <div class="top-header">
       <div class="container">
          <div class="top-header-wrapper">
              <p><?php the_field('top_text','options'); ?></p>
              <a href="tel:<?php the_field('number_link','options') ?>"><?php the_field('number_text','options') ?></a>
          </div>
       </div>
    </div>

    <header id="masthead" class="site-header">
		<div class="container">
           <div class="menu-wrapper">
               <div class="site-branding">
                   <a href="/">Գաստրոնոմ</a>
                   <button class="menu-burger">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                       </svg>
                   </button>
               </div>
                <div class="searchBar">
                    <?php get_search_form(); ?>
                </div>
               <nav id="site-navigation" class="main-navigation">
                   <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fast-food' ); ?></button>
                    <?php
                       wp_nav_menu(
                           array(
                               'theme_location' => 'menu-1',
                               'menu_id'        => 'primary-menu',
                           )
                       ); ?>
               </nav>

           </div>
        </div>
	</header>
    <div class="popup-menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x close-menu" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
        </svg>
        <h2>Categories</h2>
        <ul>
            <?php
            wp_list_categories(array(
                'title_li' => '',
                'orderby' => 'name',
                'order' => 'ASC',
                'show_count' => 1,
                'hide_empty' => 1,
                'exclude' => '1,2',
                'style' => 'list',
                'class' => 'my-custom-class'
            ));
            ?>
        </ul>
    </div>
 <div class="overlay"></div>


