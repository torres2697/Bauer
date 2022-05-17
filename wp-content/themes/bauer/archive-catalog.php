<?php get_header();?>


<section class="header-page header-page-catalog"> 
    <div class="header-page__container container">
        <div class="header-page__content">
            <h1 class="subtittle subtittle-page">Каталог продукции</h1>
        </div>
    </div>
</section>

<section class="breadcrumbs">
    <div class="breadcrumbs__container container">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li>Каталог продукции</li>
        </ul>
    </div>
</section>

<section class="positions">
    <div class="container positions__container">
        <ul class="positions__tabs">
            <li class="active">
                Все позиции
            </li>
            <li>
                Солнечные панели
            </li>
            <li>
                Системы энергосбережения
            </li>

        </ul>
        <div class="products__wrapper active">
            <?php
                $args = [
                    'post_type'         => 'catalog',
                    'posts_per_page'    => -1,
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
                        <div class="positions__links">
                            <a href="#" download class="def-btn  positions__link">
                                Скачать каталог
                                pdf, (ua)
                            </a>
                            <a href="#" class="def-btn positions__link" download>
                                Скачать каталог
                                pdf, (ru)
                            </a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
        <div class="products__wrapper">
            <?php
                $args = [
                    'post_type'         => 'catalog',
                    'posts_per_page'    => -1,
                    'post_status'       => 'publish', 
                    'meta_query' => [ [
                        'key' => 'type',
                        'value' => 'panels',
                    ] ],
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
                        <div class="positions__links">
                            <a href="#" download class="def-btn  positions__link">
                                Скачать каталог
                                pdf, (ua)
                            </a>
                            <a href="#" class="def-btn positions__link" download>
                                Скачать каталог
                                pdf, (ru)
                            </a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
        <div class="products__wrapper">
            <?php
                $args = [
                    'post_type'         => 'catalog',
                    'posts_per_page'    => -1,
                    'post_status'       => 'publish', 
                    'meta_query' => [ [
                        'key' => 'type',
                        'value' => 'systems',
                    ] ],
                ];
                $wp_query = new WP_Query($args);
                while ( $wp_query->have_posts() ){
                    $wp_query->the_post();
            ?>
                    <div class="products__item">
                        <img src="<?=get_the_post_thumbnail_url();?>" alt="">
                        <div class="products__item_name">
                            <?php the_title()?>
                        </div>
                        <div class="products__info">
                            <p>Размеры: <span> <?php the_field( 'proportions' ); ?></span></p>
                            <p>Вес: <span> <?php the_field( 'weight' ); ?></span></p>
                            <p>Гарантия: <span> <?php the_field( 'warranty' ); ?></span></p>
                        </div>
                        <div class="positions__links">
                            <a href="#" download class="def-btn  positions__link">
                                Скачать каталог
                                pdf, (ua)
                            </a>
                            <a href="#" class="def-btn positions__link" download>
                                Скачать каталог
                                pdf, (ru)
                            </a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>

<section class="catalog-content">
    <div class="catalog-content__container container">
        <div class="catalog-content__main">
            <?php
                $text = explode("\n", $bauer['catalog-sets-text']);
                foreach($text as $p){
            ?>
                    <p>
                        <?=$p?>
                    </p>
            <?php } ?>
        </div>
        <div class="catalog-content__wrapper">
            <div class="catalog-content__video">
                <iframe width="100%" height="100%" src="<?=yt_code($bauer['catalog-sets-video1'])?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="catalog-content__video">
                <iframe width="100%" height="100%" src="<?=yt_code($bauer['catalog-sets-video2'])?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="catalog-content__video">
                <iframe width="100%" height="100%" src="<?=yt_code($bauer['catalog-sets-video3'])?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

    </div>
</section>

<?php get_template_part( 'template-parts/section', 'contacts' );?>


<?php get_footer();?>