<?php get_header();?>

<?php global $bauer; ?>

<section class="header-page">
    <div class="header-page__container container">
        <div class="header-page__content">
            <h1 class="header-page__title subtittle">Наши преимущества</h1>
        </div>
    </div>
</section>

<section class="breadcrumbs">
    <div class="breadcrumbs__container container">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li>Наши проекты</li>
        </ul>
    </div>
</section>

<section class="features">
    <div class="features__container container">
        <?php
            $text = explode("\n", $bauer['advantages-descr-text1']);
            foreach($text as $p){
        ?>
                <p class="features__text">
                    <?=$p?>
                </p>
        <?php } ?>
        <div class="features__wrapper features__wrapper-page">
            <div class="features__wrapper_sq">

            </div>
            <div class="features__item">
                <img src="<?=get_template_directory_uri()?>/img/features2.png" alt="">
                <span>Гарантия</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="features__item features__item-color">
                <img src="<?=get_template_directory_uri()?>/img/features1.png" alt="">
                <span>Гарантия</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="features__item features__item-color">
                <img src="<?=get_template_directory_uri()?>/img/features1.png" alt="">
                <span>Гарантия</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="features__item">
                <img src="<?=get_template_directory_uri()?>/img/features2.png" alt="">
                <span>Гарантия</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
        </div>
        <p class="features__text">
        <?php
            $text = explode("\n", $bauer['advantages-descr-text2']);
            foreach($text as $p){
        ?>
                <p class="features__text">
                    <?=$p?>
                </p>
        <?php } ?>
        </p>
    </div>
</section>

<section class="sertificats">
    <div class="sertificats__container container">
        <div class="sertificats__wrapper">
            <?php 
                $licences = $bauer['advantages-descr-license'];
                foreach ( $licences as $sert ){
            ?>
                    <div class="sertificats__item">

                        <div class="sertificats__pic">
                            <a href="<?=$sert['thumb']?>" data-fancybox="images" data-width="1900">
                                <svg width="130" height="129" viewBox="0 0 130 129" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M127.751 120.53L88.1502 80.9932C95.1677 72.4362 99.3898 61.5108 99.3898 49.6154C99.3898 22.2591 77.0975 0 49.6949 0C22.2923 0 0 22.2591 0 49.6154C0 76.9717 22.2923 99.2308 49.6949 99.2308C61.61 99.2308 72.5526 95.0151 81.123 88.0092L120.724 127.546C121.694 128.515 122.966 129 124.237 129C125.509 129 126.78 128.515 127.751 127.546C129.692 125.608 129.692 122.469 127.751 120.53ZM9.93898 49.6154C9.93898 27.7294 27.7738 9.92308 49.6949 9.92308C71.616 9.92308 89.4508 27.7294 89.4508 49.6154C89.4508 71.5014 71.616 89.3077 49.6949 89.3077C27.7738 89.3077 9.93898 71.5014 9.93898 49.6154Z"
                                        fill="white" />
                                </svg>
                                <img src="<?=$sert['thumb']?>" alt="">
                            </a>
                        </div>

                        <p><?=$sert['title']?></p>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/section', 'tob' );?>

<section class="video">
    <div class="video__container container">


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

<?php get_template_part( 'template-parts/section', 'contacts' );?>


<?php get_footer();?>