<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package kelly
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

    <link rel="shortcut icon" href="http://www.niclamarino.com/wp-content/themes/verge/images/Favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hello! Welcome to Beeline! official website">
    <meta name="author" content="Nicla Marino">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="beeline, save the bees, bees, boardgame, family">

    <title>Beeline! Boardgame - Save the bees with us!</title>

   <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body <?php body_class(); ?>>

<header id="main-header" class="container">
   <section id="top-header">
      <article id="logo">
        <img class="fade pointer" src="/images/sito_logo.png">
     </article>
     <article id="contacts">
        <a class="fade" href="mailto:hello@beeline-game.com?Subject=Hello" target="_top">hello@beeline-game.com <img src="/images/icon-header-mail.png" float="right" width="15px" alt="Beeline email"></a>
     </article>
   </section>
</header>

 <section id="sub-header">
      <article id="menu">
          <nav>
              <ul>
                  <li><a class="l-1 fade"  href="/" title="Home">Back to Homepage &#10094;</a>
              </ul>
          </nav>
      </article>
      <article id="social">
          <nav>
              <ul>
                  <li><a class="s-1 "  href="https://twitter.com/beelinehq" title="Beeline! Twitter" target="_blank"><span class="twitter-header fade"></span></a>
                  <li><a class="s-2 "  href="https://www.facebook.com/beelinehq" title="Beeline! Facebook" target="_blank"><span class="facebook-header fade"></span></a>
                  <li><a class="s-3 "  href="http://instagram.com/beelinehq" title="Beeline! Instagram" target="_blank"><span class="instagram-header fade"></span></a>
              </ul>
          </nav>
      </article>
 </section>

	<div id="content" class="site-content">
