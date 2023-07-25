<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <!-- SEO -->
  <!--
<?php
if (is_front_page()) : ?>
  <title><?php wp_title('|', true, 'right'); ?></title>
<?php endif; ?>
-->
  <meta name="keywords" content="web制作,webデザイナー,コーダー,埼玉県,さいたま市,">
  <meta name="description" content="taro ejiriのポートフォリオサイトです。これまで制作してきたWEBサイトについて、また制作する際の概要についてご紹介いたします。">
  <meta name="author" content="taro ejiri">
  <link rel="canonical" href="https://et-design.main.jp/">
  <!-- OGP -->
  <meta property="og:site_name" content="ET ウェブデザイン portfolio">
  <meta property="og:title" content="">
  <meta property="og:description" content="ejiriのポートフォリオサイトです。これまで制作してきたWEBサイトについて、また制作する際の概要についてご紹介いたします。">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://et-design.main.jp/">
  <meta property="og:image" content="">
  <meta property="fb:app_id" content="" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="https://et-design.main.jp/">
  <meta name="twitter:image" content="">

  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">

  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- style.css-->
  <link href="<?php bloginfo('template_url'); ?>/css/style.min.css" rel="stylesheet" type="text/css">

  <!-- slick -->
  <?php if (is_front_page() || is_singular('works')) : ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/slick/slick-theme.css">
  <?php endif; ?>

  <!--[if lt IE 9]>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5shiv.min.js"></script>
<![endif]-->
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96611275-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-96611275-1');
  </script>
  <!-- JSON-LD -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "TARO EJIRI",
      "url": "https://et-design.main.jp/",
      "logo": "https://et-design.main.jp/img/ogp_top.png"
    }
  </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="fadeout">
  <header id="header">
    <div class="header-content">
      <h1>
        <div class="logo_pc">
          <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"></a>
        </div>
        <div class="logo_sm">
          <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_url'); ?>/img/miniLogo.png" alt="<?php bloginfo('name'); ?>"></a>
        </div>
      </h1>
      <nav>
        <div class="size_pc">
          <ul>
            <li><a href="/about/">About</a></li>
            <li><a href="/works/">Works</a></li>
            <li><a href="/contact/">Contact</a></li>
            <!-- <li><a href="#">blog</a></li> -->
          </ul>
        </div>
        <div class="size_sm">
          <input type="checkbox" id="toggle-nav">
          <label for="toggle-nav" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
          </label>
          <div class="menu">
            <ul>
              <li><a href="/about/">About</a></li>
              <li><a href="/works/">Works</a></li>
              <li><a href="/contact/">Contact</a></li>
              <!-- <li><a href="#">blog</a></li> -->
              <li>
                <ul class="h_share_btn">
                  <li><a href="https://github.com/taro-ejiri/portfolio_wp" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sns/github_out.png" alt="github" width="50"></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="wrapper">