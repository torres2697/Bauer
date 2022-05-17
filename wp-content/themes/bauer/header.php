<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?=wp_get_document_title();?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  <?php wp_head();?>
  <?php global $bauer; ?>
</head>

<body>
  <div class="menu-mobile"> 
    <img src="<?=get_template_directory_uri()?>/img/close.png" alt="" class="close-button ">
    <div class="mob-wrapper">
      <ul class="mob-wrapper__list">
        <li class="mob-wrapper__item">
          <a class="mob-wrapper__link" href="/">
            Главная
          </a>
        </li>
        <li class="mob-wrapper__item">
          <a class="mob-wrapper__link" href="/advantages">
            Преимущества
          </a>
        </li>
        <li class="mob-wrapper__item">
          <a class="mob-wrapper__link" href="/catalog">
            Наша продукция
          </a>
        </li>
        <li class="mob-wrapper__item">
          <a class="mob-wrapper__link" href="/projects">
            Выполненные проекты
          </a>
        </li>
        <li class="mob-wrapper__item">
          <a class="mob-wrapper__link" href="/contacts">
            Контакты
          </a>
        </li>
      </ul>
      <div class="mob__tel">
        <a href="tel:<?=$bauer['contacts-sets-phone1']?>" class="mob__tel__num"> <?=$bauer['contacts-sets-phone1']?></a>
        <a href="tel:<?=$bauer['contacts-sets-phone1']?>" class="mob__tel_text">Позвонить мне</a>
      </div>
    </div>
  </div>
  <header class="header">
    <div class="header__container container">
      <nav>
        <a href="/" class="nav__logo">
          <img src="<?=$bauer['main-fdisplay-logo']['url']?>" alt="">
        </a>
        <ul class="nav__menu">
          <li>
            <a href="/">
              Главная
            </a>
          </li>
          <li>
            <a href="/advantages">
              Преимущества
            </a>
          </li>
          <li>
            <a href="/catalog">
              Наша продукция
            </a>
          </li>
          <li>
            <a href="/projects">
              Выполненные проекты
            </a>
          </li>
          <li>
            <a href="/contacts">
              Контакты
            </a>
          </li>
        </ul>
        <div class="nav__tel">
          <a href="tel:<?=$bauer['contacts-sets-phone1']?>" class="nav__tel__num"> <?=$bauer['contacts-sets-phone1']?></a>
          <a href="tel:<?=$bauer['contacts-sets-phone1']?>" class="nav__tel_text">Позвонить мне</a>
        </div>
        <button class="hamburger">
          <img src="<?=get_template_directory_uri()?>/img/hamburger.png" alt="">
        </button>
      </nav>
    </div>
  </header>