<?php get_header();?>


<section class="header-page header-page-projects">
    <div class="header-page__container container">
        <div class="header-page__content">
            <h1 class="subtittle subtittle-page">Выполненные проекты</h1>
        </div>
    </div>
</section>

<section class="breadcrumbs">
    <div class="breadcrumbs__container container">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li>Выполненные проекты</li>
        </ul>
    </div>
</section>

<section class="works">
    <div class="works__container container">
    <?php
        $args = [
            'post_type'         => 'projects',
            'posts_per_page'    => -1,
            'post_status'       => 'publish', 
        ];
        $wp_query = new WP_Query($args);
        while ( $wp_query->have_posts() ){
            $wp_query->the_post();
            $gallery = get_field( 'gallery' );
    ?>
        <div class="works__wrapper">
            <div class="works__photos">
                <div class="works__mainphoto">
                    <?php foreach ($gallery as $img){ ?>
                        <img src="<?=$img?>" alt="">
                    <?php } ?>
                </div>
                <div class="works__minphoto">
                    <?php foreach ($gallery as $img){ ?>
                        <div class="works__min">
                            <img src="<?=$img?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="works__content">
                <h3 class="">
                    <?php the_title();?>
                </h3>
                <p class="works__content_text"><?php the_field( 'descriptions' ); ?></p>
                <div class="works__content_info">
                    <p>Расположение: <span><?php the_field( 'location' ); ?></span> </p>
                    <p>Мощность: <span> <?php the_field( 'power' ); ?></span> </p>
                    <p>Система: <span><?php the_field( 'setup' ); ?></span> </p>
                    <p>Дата установки: <span><?php the_field( 'date' ); ?></span> </p>
                </div>
                <a href="#" class="def-btn works__btn">Узнать подробнее</a>
            </div>
        </div>
    <?php
        }
    ?>
    </div>
</section>

<?php get_template_part( 'template-parts/section', 'contacts' );?>


<?php get_footer();?>