<?php get_header(); ?>
<?php global $bauer; ?>
  
  
  
  <section class="header-main">
    <div class="header-main__container container">
      <div class="header-main__content">
        <div class="header-main_content-overlay">

        </div>
        <h1><?=$bauer['main-fdisplay-title']?> </h1>
        <p><?=$bauer['main-fdisplay-descr']?></p>
        <a href="/catalog">Солнечные панели</a>
        <a href="/catalog">Системы энергосбережения</a>
      </div>

    </div>
  </section>

  <section class="about">
    <div class="about__container container">
      <h3 class="about__tittle subtittle">
        О КОМПАНИИ
      </h3>
      <div class="about__wrapper">
        <div class="about__content">
          <?=$bauer['main-about-title']?>
        </div>
        <div class="about__gallery">
          <img class="about__gallery-one" src="<?=$bauer['main-about-img1']['url']?>" alt="">
          <img class="about__gallery-two" src="<?=$bauer['main-about-img2']['url']?>" alt="">
          <img class="about__gallery-three" src="<?=$bauer['main-about-img3']['url']?>" alt="">
          <img class="about__gallery-four" src="<?=$bauer['main-about-img4']['url']?>" alt="">
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/section', 'tob' );?>

  <section class="products">
    <div class="products__container container">
      <h3 class="products__tittle subtittle">
        НАША ПРОДУКЦИЯ
      </h3>
      <div class="products__wrapper products__wrapper-main">

      <?php
        $args = [
          'post_type'         => 'catalog',
          'posts_per_page'    => 6,
          'post_status'       => 'publish', 
        ];
        $wp_query = new WP_Query($args);
        while ( $wp_query->have_posts() ){
          $wp_query->the_post();
      ?>
        <div class="products__item">
          <img src="<?=get_the_post_thumbnail_url();?>" alt="">
          <div class="products__item_name">
            <?php the_title()?> <span><?php the_field( 'power' ); ?></span>
          </div>
          <div class="products__info">
            <p>Размеры: <span> <?php the_field( 'proportions' ); ?></span></p>
            <p>Вес: <span> <?php the_field( 'weight' ); ?></span></p>
            <p>Гарантия: <span> <?php the_field( 'warranty' ); ?></span></p>
          </div>
        </div>
      <?php
        }
      ?>
      </div>
      <a href="/catalog" class="def-btn products__btn">
        Смотреть все позиции
      </a>
      <div class="products__video">
        <div class="video__wrapper">
          <iframe width="100%" height="100%" src="<?=yt_code($bauer['main-video-link'])?>"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="features__container container">
      <h3 class="features__tittle subtittle">
        НАШИ ПРЕИМУЩЕСТВА
      </h3>
      <div class="features__wrapper">
        <div class="features__wrapper_sq">
        <?php 
          $advantages = $bauer['main-advantages-slides'];
        ?>
        </div>
        <div class="features__item">
          <img src="<?=$advantages[0]['thumb']?>" alt="">
          <span><?=$advantages[0]['title']?></span>
          <p><?=$advantages[0]['description']?></p>
        </div>
        <div class="features__item features__item-color">
          <img src="<?=$advantages[1]['thumb']?>" alt="">
          <span><?=$advantages[1]['title']?></span>
          <p><?=$advantages[1]['description']?></p>
        </div>
        <div class="features__item features__item-color">
          <img src="<?=$advantages[2]['thumb']?>" alt="">
          <span><?=$advantages[2]['title']?></span>
          <p><?=$advantages[2]['description']?></p>
        </div>
        <div class="features__item">
          <img src="<?=$advantages[3]['thumb']?>" alt="">
          <span><?=$advantages[3]['title']?></span>
          <p><?=$advantages[3]['description']?></p>
        </div>
      </div>
      <a href="/advantages" class="def-btn features__btn">
        Больше преимуществ
      </a>
    </div>
  </section>

  <section class="projects">
    <div class="container projects__container">
      <h3 class="projects__tittle subtittle">
        ВЫПОЛНЕННЫЕ ПРОЕКТЫ
      </h3>
      <div class="projects__wrapper">
        <?php 
          $slider = $bauer['main-projects-slides'];
          foreach ($slider as $slide){
        ?>
            <div class="projects__slide">
              <img src="<?=$slide['thumb']?>" alt="" class="projects__img">
              <p><?=$slide['title']?></p>
            </div>
        <?php 
          }
        ?>
      </div>
      <a href="/projects" class="def-btn projects__btn">
        Смотреть все проекты
      </a>
    </div>
  </section>

  <?php get_template_part( 'template-parts/section', 'contacts' ) ; ?>




  <?php get_footer(); ?>